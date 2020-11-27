
<?php 
get_header();
?>

<div class = "container-medium">
    
<?php
    while ( have_posts() ) {
        the_post(); 
    ?>
 	<div class = "nyhetstopp">
        <strong><h1>
            <?php 
                echo get_field('arikkel_tittel'); 
            ?>
        </h1></strong>
        <h2> 
            <?php 
                the_excerpt();
            ?>    
        </h2>
    </div>
    <?php 
        echo do_shortcode( '[ess_post]' ); 
    ?>
</div>
<div class = "container-liten">
    <div class = "nyhetsinnhold">
    <?php 
        the_content(); 
    ?>
    </div>
</div>
 
<?php 
}
?>
<?php
	get_footer();

?>