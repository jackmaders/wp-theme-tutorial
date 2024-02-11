<?php
function tutorial_theme_support()
{
    add_theme_support("title-tag");
}

function tutorial_register_styles()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style(
        "tutorial-style",
        get_template_directory_uri() . "/style.css",
        ["tutorial-bootstrap", "tutorial-fontawesome"],
        $version,
        "all"
    );
    wp_enqueue_style(
        "tutorial-bootstrap",
        "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",
        [],
        "4.4.1",
        "all"
    );
    wp_enqueue_style(
        "tutorial-fontawesome",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",
        [],
        "5.13.0",
        "all"
    );
}

function tutorial_register_scripts()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_script(
        "tutorial-javascript",
        get_template_directory_uri() . "/assets/scripts/main.js",
        ["tutorial-jquery", "tutorial-pepper", "tutorial-bootstrap"],
        $version,
        "all"
    );
    wp_enqueue_script(
        "tutorial-jquery",
        "https://code.jquery.com/jquery-3.4.1.slim.min.js",
        [],
        "3.4.1",
        true
    );
    wp_enqueue_script(
        "tutorial-pepper",
        "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",
        [],
        "1.16.0",
        true
    );
    wp_enqueue_script(
        "tutorial-bootstrap",
        "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",
        [],
        "4.4.1",
        true
    );
}

add_action("after_setup_theme", "tutorial_theme_support");
add_action("wp_enqueue_scripts", "tutorial_register_styles");
add_action("wp_enqueue_scripts", "tutorial_register_scripts");
