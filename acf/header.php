<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light p-0">
            <div class="container">
                <?php
                    if(function_exists('the_custom_logo')){
                        the_custom_logo();
                    }
                ?>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="collapsibleNavId">
                    <?php
                        if(function_exists('register_custom_menus')){
                            if(has_nav_menu('primary')){
                                wp_nav_menu(
                                    array(
                                        "theme_location" => "primary"
                                    )
                                );
                            }
                        }
                    ?>
                </div>
            </div>
        </nav>
    </header>