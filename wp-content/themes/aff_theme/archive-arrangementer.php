
<?php 

#Lister alle arrangementer
get_header();
?>
<div class = "container-medium">
		<div class = "programtopp">
			<h1> PROGRAM </h1>
			<div class = "dropdowner">
			</div>
		</div>
	<div class = "aarrangementer">
		<?php 
			include "Arrangement.php";

			$args = array(
				'posts_per_page' => -1,
				'post_type' =>  'arrangementer', 
			);
			$arrangementer = new WP_Query($args);
			$counter = 0;
			$datoliste[0] = "Velg dato";
			$sjangerliste[0] = "Velg sjanger";
			$arrangementerliste = [];
			while($arrangementer->have_posts()){
				$arrangementer->the_post();
				$arr = new Arrangement(get_field('filmbilde'), get_field('filmtittel'), 
				get_field('filmdato'), get_field('visningstid'), get_field('sjanger'), get_field('andrefilmvisning'),
				get_field('andrefilmdato'), get_field('andrevisningstid'), get_permalink(get_the_ID()) );
				$arrangementerliste[] = $arr;
			}
			
			function compareArrangement($firstvalue, $value){
		        $diff = makefulltime($firstvalue->filmdato, $firstvalue->visningstid) - makefulltime($value->filmdato, $value->visningstid);
		        if($diff > 0){
		            return 1;
		        }
		        elseif($diff < 0){
		            return -1;
		        }
		        return 0;
		    }
		    
			usort($arrangementerliste, "compareArrangement");

			#Lager liste med sjangere og visningsdatoer til sortering
			for($i = 0; $i < count($arrangementerliste); $i++){
				$dato = $arrangementerliste[$i]->filmdato;
				$dateclass = new DateTime ($dato);
				$andredato;
				$andredatoclass;
				if($arrangementerliste[$i]->andrefilmvisning){
					$andredato = $arrangementerliste[$i]->andrefilmdato;
				$andredatoclass = new DateTime ($andredato);
				}
				if(!in_array($dateclass->format('d.m.Y'), $datoliste)){
					$datoliste[count($datoliste)]=$dateclass->format('d.m.Y');
				}
				if($arrangementerliste[$i]->andrefilmvisning and !in_array($andredatoclass->format('d.m.Y'), $datoliste)){
					$datoliste[count($datoliste)]=$andredatoclass->format('d.m.Y');
				}
				if($arrangementerliste[$i]->sjanger){
				$sjangere = $arrangementerliste[$i]->sjanger; 
				foreach( $sjangere as $sjanger ){
				if(!in_array($sjanger, $sjangerliste)){
					$sjangerliste[count($sjangerliste)] = $sjanger;
				}

				#Legger til sjanger og visningsdato som class så de kan vises/sjules  ved sortering
			?>
			<div class = "aarrangement vises <?php $sjangere = $arrangementerliste[$i]->sjanger;
		if($arrangementerliste[$i]->sjanger){
			foreach( $sjangere as $sjanger ){ echo " " . $sjanger;
			if(!in_array($sjanger, $sjangerliste)){
					$sjangerliste[count($sjangerliste)] = $sjanger;
				}
			}
			}
			echo " " . $dateclass->format('dmY'); 
			if($arrangementerliste[$i]->andrefilmvisning){echo " " .$andredatoclass->format('dmY');} ?>">

				<div class = "aarrangementbilde">
					<?php $image = $arrangementerliste[$i]->filmbilde;
					$link = $arrangementerliste[$i]->link;?>
					<a href = "<?php echo $link ?> "><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  /></a>
				</div>

				<div class = "aarrangementoverskrift">
					<h2>
				 	<a href = "<?php echo $link ?> "><?php echo strtoupper($arrangementerliste[$i]->filmtittel) ?></a>
				 </h2>
				 <h3>
				 	<?php echo norskdag($dateclass->format("l")) . " " . $dateclass->format('d.m'); 
				 	echo " " . $arrangementerliste[$i]->visningstid;
				 	if($arrangementerliste[$i]->andrefilmvisning){ 
				 		if($arrangementerliste[$i]->andrefilmdato != $arrangementerliste[$i]->filmdato){
				 		echo"</h3><h3>" . norskdag($andredatoclass->format("l")) . " " . $andredatoclass->format('d.m') ;
				 		echo " " . $arrangementerliste[$i]->andrevisningstid . "</h3>";
				 	}
				 	else{
				 		echo ", " . $arrangementerliste[$i]->andrevisningstid . "</h3>";
				 	}
				 	}?>
				</div>

			</div>
			<?php
		}

		function compareDato($firstvalue, $value){
			$first = explode(".", $firstvalue);
			$second = explode(".", $value);
			if($first[2]>$second[2]){
				return 1;
			}
			elseif($first[2]<$second[2]){
				return -1;
			}
			elseif($first[1]>$second[1]){
				return 1;
			}
			elseif($first[1]<$second[1]){
				return -1;
			}
			elseif($first[0]>$second[0]){
				return 1;
			}
			elseif($first[0]<$second[0]){
				return -1;
			}
		        return 0;
		    }

		    #Sorterer datoene i sorteringsdropdown
			usort($datoliste, "compareDato");
		?>

		<div class = "clearer">
		</div>

	</div>
</div>

<!--
Legger til datoer og sjangere i dropdown menyer
-->
<script>
var innhold =  '<select class = "datoer" > <?php for($i = 0; $i < count($datoliste); $i++){
	echo '"<option value = "' . $datoliste[$i] . '">' . $datoliste[$i] . "</option>";
} 
echo "</select>';";
	?>
	innhold += '<select class = "sjangere"><?php for($i = 0; $i < count($sjangerliste); $i++){
		echo "<option value = " . $sjangerliste[$i] . ">" . ucfirst($sjangerliste[$i]) . "</option>"; 
	} ?>
	</select>'
function addDropdown(){
jQuery(".dropdowner").append(innhold);
}

addDropdown();
</script>
<?php

	get_footer();

?>