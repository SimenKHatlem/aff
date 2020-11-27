<?php


function aff_files(){
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-3.2.1.js'), null, '1.0', true);
    wp_enqueue_script('main_script', get_theme_file_uri('/js/main.js'), null, '1.0', true);
    wp_enqueue_script('paralax', get_theme_file_uri('/js/parallax.js'));
    wp_enqueue_style( 'main_style', get_stylesheet_directory_uri() . "/style.css?ver=<?php echo rand(111,999)?>");
}

add_action('wp_enqueue_scripts', 'aff_files');

function aff_features(){
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}

add_action('after_setup_theme', 'aff_features');

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');


function get_id_by_slug($page_slug) {
    $page = get_page_by_path($page_slug, ObJECT, arkiv );
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}

function has_next($array) {
    if (is_array($array)) {
        if (next($array) === false) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}


#Oversetter fra engelsk til norsk
function norskdag($day){
    switch($day){
        case "Monday":
        return "Mandag";
        break;
        case "Tuesday":
        return "Tirsdag";
        break;
        case "Wednesday":
        return "Onsdag";
        break;
        case "Thursday":
        return "Torsdag";
        break;
        case "Friday":
        return "Fredag";
        break;
        case "Saturday":
        return "Lørdag";
        break;
        case "Sunday":
        return "Søndag";
        break;
    }
}

function arraccept($arrangement){
    if(timecompare($arrangement->filmdato, $arrangement->visningstid)){
        return $arrangement;
    }
    elseif ($arrangement->andrefilmvisning){
        if(timecompare($arrangement->andrefilmdato, $arrangement->andrevisningstid)){
            return $arrangement->removefirst();
        }
        return null;
    }

    return null;

}

#Sjekker om et arrangement allerede har skjedd
function timecompare($dato, $tid){
    
    if(date(makefulltime($dato, $tid)) > date(time())){
        return true;
    }
    return false;
}

function makefulltime($dato, $tid){

    $tidarr = explode(":", trim($tid) );
    $tidsek = $tidarr[0]*60*60 + $tidarr[1]*60;
    $dateclass = new DateTime ($dato);
    $arrsek = $dateclass->format('U') + $tidsek;
    return $arrsek;
}

?>