<?php

    class Facebook_Footer_Content_Creation {

        function __construct () {
            add_filter("the_content", array($this, "add_facebook_link_at_end"));
        }

        function add_facebook_link_at_end ($content) {
            $options = get_option('facebook_footer_settings');
            $allContent = $content;
            $allContent .= "<hr />";
            $allContent .= "<div><i class='fab fa-facebook-f' style='margin-right: 5px;'></i><span>Click <a target='_blank' href='" . $options["facebook_footer_profile_link"] . "'>here</a> to open Facebook Profile of <b>" . $options["facebook_footer_full_name"] . "</b></span></div>";
            return $allContent;
        }

    }

    new Facebook_Footer_Content_Creation();

