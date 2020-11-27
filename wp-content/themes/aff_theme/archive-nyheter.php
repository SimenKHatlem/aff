
<?php 

#Fremviser alle nyheter
	get_header();
?>

<div class = "container-medium">
	<div class = "anyhetertopp">
		<h1> NYHETER </h1>
	</div>
<?php
	$args = array(
	  'post_type' => 'nyheter',
	  'posts_per_page' => -1,
	  'post__not_in'=>array($hovedID),
	  'order'=> DESC);

	$counter = 0;
	$the_query = new WP_Query($args);
	while ($the_query->have_posts()) {
		$the_query->the_post();
		?>
		<div class = "fnyhet <?php if($counter ==0){
			$counter++;}
			else{
				$counter--;					
				echo 'right';}?>">
				<div class = "fnyhetsbilde">
				<?php 
					$image = get_field('artikkelbilde');
					$link = get_permalink(get_the_ID());
				?>
				<a href = "<?php echo $link ?> "><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  /></a>
				</div>
				<div class = "fnyhetstekst">
				<h2><a href = "<?php echo $link ?> "> 
				<?php 
					echo get_field('arikkel_tittel');
				?>
				
				</a></h2><p>
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
<?php
	get_footer();

?>