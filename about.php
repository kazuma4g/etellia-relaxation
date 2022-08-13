<?php
/**　　　　　　　　　　　　　　　　　
 * Template Name: About Salon
 */
?>
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
        <?php get_template_part('/ui/about_content'); ?>
        <?php get_footer(); ?>
    </div>
</body>
</html>