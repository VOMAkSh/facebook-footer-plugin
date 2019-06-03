<?php

    class Facebook_Link_Footer_Settings {

        function __construct () {
            add_action("admin_menu", array($this, "create_settings_menu"));
            add_action("admin_init", array($this, "settings_init"));
        }

        function create_settings_menu () {
            add_options_page(
                'facebook_footer_link',
                'Facebook Footer',
                'manage_options',
                'facebook_footer_link',
                array($this, 'create_options_form')
            );
        }

        function settings_init () {
            register_setting(
                'facebook_footer_group',
                'facebook_footer_settings'
            );
            add_settings_section(
                'facebook_footer_section_one',
                'Basic Settings',
                array($this, 'facebook_settings_section_one_callback'),
                'facebook_footer_group'
            );
            add_settings_field(
                'facebook_footer_full_name',
                'Full Name',
                array ($this, "render_full_name"),
                'facebook_footer_group',
                'facebook_footer_section_one'
            );
            add_settings_field(
                'facebook_footer_nickname',
                'Nick Name',
                array ($this, 'render_nickname'),
                'facebook_footer_group',
                'facebook_footer_section_one'
            );
            add_settings_field(
                'facebook_footer_profile_link',
                'Facebook Profile Link',
                array ($this, 'render_profile_link'),
                'facebook_footer_group',
                'facebook_footer_section_one'
            );
        }

        function render_full_name () {
            $options = get_option('facebook_footer_settings');
            ?>
            <input type="text" name="facebook_footer_settings[facebook_footer_full_name]" value="<?php echo $options["facebook_footer_full_name"]; ?>">
            <?php 
        }

        function render_nickname () {
            $options = get_option('facebook_footer_settings');
            ?>
            <input type="text" name="facebook_footer_settings[facebook_footer_nickname]" value="<?php echo $options["facebook_footer_nickname"] ?>">
            <?php 
        }

        function render_profile_link () {
            $options = get_option('facebook_footer_settings');
            ?>
            <input type="text" name="facebook_footer_settings[facebook_footer_profile_link]" value="<?php echo $options["facebook_footer_profile_link"]; ?>">
            <?php
        }

        function facebook_settings_section_one_callback () {
            echo "";
        }

        function create_options_form () {
            ?>
            <form method="POST" action="options.php">
                <?php
                    settings_fields('facebook_footer_group');
                    do_settings_sections('facebook_footer_group');
                    submit_button();
                ?>
            </form>
            <?php 
        }

    }

    new Facebook_Link_Footer_Settings();

?>
