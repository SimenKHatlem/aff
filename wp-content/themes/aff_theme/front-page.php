
<?php 
	get_header();
	$args = array(
	  'post_type' => 'nyheter',
	  'posts_per_page' => 1,
	  'meta_query' => array(
	    array(
	      'key' => 'hovedartikkel',
	      'value' => '1',
	      'compare' => '==' // not really needed, this is the default
	    )
	  )
	);
	$the_query = new WP_Query($args);
	$hovedID;

?>
<div class = "container-vstor">
	<div class = "fnyheter">
		<?php

        	$the_query->the_post();
        	$hovedID = get_the_ID();
      ?>
		<div class = "hovednyhet">
			<div class = "hnbilde">
				<?php 
					$image = get_field('artikkelbilde');
					$link = get_permalink($hovedID);
				?>
				<a href = "<?php echo $link ?> "><img src="<?php echo get_field('hovedartikkel_bilde'); ?>" alt="<?php echo $image['alt']; ?>"  /></a>
			</div>
			<div class = "hntekst">
				<h2><a href = "<?php echo $link ?> "> 
					<?php 
						echo get_field('arikkel_tittel');
					?>
				</a></h2><p>
				<?php
					echo get_the_excerpt();
				?>
						
				</br>
						
				<?php
					echo get_field('hoved_beskrivelse');
				?>
				</p>

			</div>
		</div>

		<?php
			$args = array(
			  'post_type' => 'nyheter',
			  'posts_per_page' => 4,
			  'post__not_in'=>array($hovedID),
			  'order'=> DESC

			);
			$counter = 0;
			$the_query = new WP_Query($args);

			while ($the_query->have_posts()) {
				$the_query->the_post();

		 		if($counter <2){
		 			echo '<div class = "fnyhet">';
					$counter++;}
				else{
					$counter = 0;
					echo '<div class = "fnyhetend">';
				}
			?>
			<div class = "fnyhetsbilde">
			<?php 
				$image = get_field('artikkelbilde');
				$link = get_permalink(get_the_ID());
			?>
			<a href = "<?php echo $link ?> "><img src="<?php echo get_field('thumbnail'); ?>" alt="<?php echo $image['alt']; ?>"  /></a>
		</div>
		<div class = "fnyhetstekst">
			<h2><a href = "<?php echo $link ?> "> 
			<?php 
				echo get_field('arikkel_tittel');
			?>
			</a></h2>
			<p>
				<?php
					echo get_the_excerpt();
				?>
			</p>

		</div>
	</div>
	<?php
}
?>

<div class = "clearer">

</div>
			
</div>
</div>
<?php
	get_footer();

?>