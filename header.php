<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <head>
        <h1><?php echo '1'; bloginfo('name'); ?></h1>
        <h2><?php echo '2'; bloginfo('description'); ?></h2>
        <h2><?php echo '3'; bloginfo('url'); ?></h2>
    </head>