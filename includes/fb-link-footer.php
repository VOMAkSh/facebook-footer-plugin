<?php

    function fb_link_plugin_add_scripts_styles() {
        wp_enqueue_style("bootstrap-cdn-css", "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
        wp_enqueue_style("font-awesome-cdn-css", "https://use.fontawesome.com/releases/v5.6.3/css/all.css");
        wp_enqueue_script("bootstrap-cdn-js", "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", false, "4", false);
        wp_enqueue_style("styles.css-stylesheet", plugin_dir_path(__DIR__) . "/css/styles.css");
        wp_enqueue_script("main.js-file", plugin_dir_path(__DIR__) . "/js/main.js", false, "0.0.1", true);
    }

    add_action('wp_enqueue_scripts', 'fb_link_plugin_add_scripts_styles');

?>