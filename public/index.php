<?php use App\App;

require_once('../app/app.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/production.min.css">
    </head>
</head>
<body>

<?php App::view('sections/hero') ?>
<?php App::view('sections/about') ?>
<?php App::view('sections/resume') ?>
<?php App::view('sections/footer') ?>

</body>
</html>

<script src="js/production.min.js" type="application/javascript"></script>