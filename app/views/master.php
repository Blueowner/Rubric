<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rubrica</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?= base('css/main.css') ?>">
        <script src="<?= base('js/vendor/modernizr-2.7.1.min.js') ?>"></script>
    </head>
    <body>

        <? include $view ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= base('js/vendor/jquery-1.10.2.min.js') ?>"><\/script>')</script>
        <script src="<?= base('js/min/main.min.js') ?>"></script>
    </body>
</html>
