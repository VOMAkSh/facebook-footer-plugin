<?php

    function add_fb_link_at_end ( $content ) {
        $allContent = $content;
        $allContent .= "<hr />";
        $allContent .= "<div><i class='fab fa-facebook-f' style='margin-right: 5px;'></i><span>Click <a target='_blank' href='https://facebook.com'>here</a> to open Facebook Profile</span></div>";
        return $allContent;
    }

    add_filter("the_content", "add_fb_link_at_end");

