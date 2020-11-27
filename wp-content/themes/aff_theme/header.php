<?php //include 'Arrangement.php'; ?>
<!DOCTYPE html>
<html>

  <head>

    <meta name="viewport" content = "width= device-width, initial-scale = 1">

    <?php
      if(get_field('facebookbeskrivelse')){
      ?>

      <meta property = "og:description" content = "<?php echo get_field('facebookbeskrivelse') ?>"/>
      <?php
      }
      elseif(has_excerpt()){
      ?>
      <meta property = "og:description" content = "<?php echo get_the_excerpt() ?>"/>
      <?php
      }

     if(get_post_type()=='nyheter' and !is_archive()){
        $image = get_field('artikkelbilde');
      }
      elseif(get_post_type()=='arrangementer' and !is_archive()){
        $image = get_field('filmbilde');
      }
      else{
        $image['url'] = "http://arabiskfilmfest.no/wp-content/uploads/nyaff.jpg";
      } 
    ?>
    <meta property='og:image' content='<?php echo $image['url']; ?>' />

    <?php 
    wp_head();
    ?>

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body <?php body_class();?> >
    <header>
      <?php 
        if(get_post_type()=='nyheter' and !is_archive()){

          $image = get_field('artikkelbilde');
          $headerImg = get_field('headerbilde');
        ?>
        <a href = "<?php echo get_home_url(); ?>">
          <img id = "headerBilde" src = "<?php echo $headerImg; ?>" class = "deskHeader" style = "width: 100%">
          <img id = "headerBilde" src = "<?php echo $image['url']; ?>" class = "mobHeader" style = "width: 100%">
        </a>

        <?php 
      }
      elseif(get_post_type()=='arrangementer' and !is_archive()){
        $image = get_field('filmbilde');
      ?>

      <img id = "headerBilde" src="<?php echo $image['url']; ?>" style = "width: 100%" alt="<?php echo $image['alt']; ?>">

      <?php

      }
      else{
      if(!is_front_page()){
      ?>
      <a href = "<?php echo get_home_url(); ?>">
        <img id = "headerBilde" src = "http://arabiskfilmfest.no/wp-content/uploads/nyaff.jpg" style = "width: 100%">
      </a>
      <?php
      }
      else{
      ?>
      <img id = "headerBilde" src = "http://arabiskfilmfest.no/wp-content/uploads/nyaff.jpg" style = "width: 100%">
      <?php
      }
    }

    if(!is_front_page()){
    ?>
    <div class = "linkhome">
      <a href = "<?php echo get_home_url(); ?>">
        <img src = "http://arabiskfilmfest.no/wp-content/uploads/u_bakgrunn_cut.png">
      </a>
    </div>
    <?php 
    }

    $meny = wp_get_nav_menu_items('navmeny');
    $menuItems = count($meny);?>
    <div class = "navbar">
      <div class = "navbuttons">
      	<div class = "navbutton navforsidelink"  style="display: none;">
      		<a href = "<?php echo get_home_url(); ?>">
    			<h3>
    				Forside
    			</h3>
    		</a>
    	</div>
      <?php
        for($i = $menuItems-1; $i >= 0; $i--){
        ?>
        <div class = "navbutton <?php if($meny[$i]->url == get_permalink() or $meny[$i]->url == get_post_type_archive_link(get_post_type())){
        echo "thispage";
      } ?>">
        <a href = "<?php echo $meny[$i]->url ?>">
          <h3>
          <?php echo strtoupper($meny[$i]->title);?>
          </h3>
        </a>
      </div>
      <?php 
      }
    ?>

  </div>
  	
</div>
<div id = "burgermeny" onclick="menyNav()">
	<img src = "http://arabiskfilmfest.no/wp-content/uploads/burger.png">
</div>
<div id = "closenav" onclick="closeMenyNav()" style= "display: none;">
	<img src = "http://arabiskfilmfest.no/wp-content/uploads/ex.png">
</div>
<div class = "clearer">

</header>