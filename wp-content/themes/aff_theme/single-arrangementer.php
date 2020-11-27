<?php 
get_header();
?>
<body>
	<div class = "container-vstor"> 
		<?php
			while (have_posts()){
				the_post();
		?>
		<div class = "arrtekst">
			<h1>
				<?php
	 				echo get_field('overskirfts_tittel');
	 			?>
			</h1>
			<?php 
				echo do_shortcode( '[ess_post]' ); 

          		the_content();
          	?>

			<div id = "filmtrailer" class = "filmtrailer">
			<?php 
				echo get_field('trailer');
			?>
			</div>
		</div>
	
		<div class = "infobar">
			<div class = "knapper">
				<p>Visninger: </p>

				<p>  
					<?php 
						$dato = get_field('filmdato');
  						$dato = new DateTime($dato);
  						echo norskdag($dato->format("l")) . " " . $dato->format('d.m') . ", kl " . get_field('visningstid');
  					?>	
  				</p>
				<?php 
					if (get_field('billettkjop')){
					?>
					<div class = "knapp">
						<a href =" <?php echo get_field('billettkjop')?>" target="_blank">
							Kjøp billett
						</a>
				
					</div>
				<?php 
				}
				if(get_field('trailerlink')){

			?>
			<div class = "knapp kleft">
				<a href = "<?php echo get_field('trailerlink')?>" target="_blank">
					Trailer
				</a>
			</div>
			<?php 
			} 
			if(get_field('andrefilmvisning')){
			?>

			<p>
				<?php 
					$dato = get_field('andrefilmdato');
	  				$dato = new DateTime($dato);
	  
	  				echo norskdag($dato->format("l")) . " " . $dato->format('d.m') . ", kl " . get_field('andrevisningstid');
	  			?>	
  			</p>
					
					
			<div class = "knapp">
				<a href =" <?php echo get_field('andrebillettkjop');?>" target="_blank">
					Kjøp billett
				</a>
			</div>

		<?php 
		} 
	?>

</div>
<div class = info>
	<?php
	echo get_field('filminfo');
	?>
</div>
			
		

</div>
</div>
<div class = "clearer">
</div>

</body>
<?php
}
	get_footer();
?>