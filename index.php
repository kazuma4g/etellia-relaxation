<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etellia Relaxation</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="main_content">
        <?php get_header(); ?>
        <?php get_template_part('/ui/top_content'); ?>
        <?php get_footer(); ?>
    </div>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
<?php wp_footer(); ?>
</body>
</html>