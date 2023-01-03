<?php

class BusinessTheme
{
    public function __construct()
    {
        add_action("after_setup_theme", [$this, "themeSetup"]);
        add_action("wp_enqueue_scripts", [$this, "enqueueStyle"]);
        add_action("init", [$this, "patterCategory"]);
    }

    public function themeSetup(): void
    {
        add_editor_style("style.css");
        add_theme_support("wp-block-styles");
    }

    public function enqueueStyle(): void
    {
        wp_enqueue_style("main-style", get_stylesheet_uri());
    }

    public function patterCategory(): void
    {
        register_block_pattern_category("BusinessTheme", [
            "label" => __("BusinessTheme"),
        ]);
    }
}

$init = new BusinessTheme();
?>
