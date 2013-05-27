<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php print $language->language; ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php print $language->language; ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php print $language->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language; ?>"> <!--<![endif]-->
    <head profile="<?php print $grddl_profile; ?>">
        <?php print $head; ?>
        <title><?php print $head_title; ?></title>
        <meta name="viewport" content="width=device-width">
        <?php print $styles; ?>
        <?php print $scripts; ?>
    </head>
    <body class="<?php print $classes; ?>" <?php print $attributes;?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>

        <script>
            jQuery(document).ready(function(){
                jQuery('.front .flexslider').flexslider();
                jQuery('.not-front .flexslider').flexslider({
                    controlNav: "thumbnails" 
                });
                jQuery('#tab-container').easytabs();
                jQuery('#tab-container2').easytabs();
            });
        </script>

    </body>
</html>
