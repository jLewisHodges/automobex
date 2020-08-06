<?php
    include('includes/main_functions.php');

    function main_nav()
    {
        global $dtm;

        $class = "container nav";

        $links_array = array(
            array('text' => 'Home', 'url' => 'index.php'),
            array('text' => 'Challenges', 'url' => 'challenges.php'),
            array('text' => 'Education Center', 'url' => 'education.php')
        );
        
        return $dtm->navigation($links_array, $class);
    }

    function get_html_title($page_title)
    {
        $title = $page_title.' | Automobex';

        return $title;
    }

    function get_javascript($script)
    {
        $javascript = 'scripts/'.$script;

        return $javascript;
    }

?>