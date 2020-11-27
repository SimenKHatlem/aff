<?php 
get_header();

while (have_posts()){
	the_post();
	?>

  <div class = "container-liten">
  		<h1> 
          <?php
            echo get_the_title();
          ?>
      </h1>

          <?php
            the_content();
          ?>
  </div>
<?php

}
	get_footer();

?>