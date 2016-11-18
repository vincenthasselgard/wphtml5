<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header role="banner">
        <?php 
            // ARIA demands role to be defined as navigation for navigational elements. It seems redundant, but it's recommend by WAI-ARIA.
        ?>
        <nav role="navigation">
            <?php 
                // ul can't have role navigation according to HTML5, but it's valid to use inside of a nav element for structural purposes.
            ?>
            <ul>
                <li>Home</li>
                <li>About us</li>
                <li>Contact us</li>
            </ul>
        </nav>
    </header>