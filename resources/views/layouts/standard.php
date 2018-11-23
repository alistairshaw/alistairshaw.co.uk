<?php

use App\App;
/**
 * @var $content
 * @var $parameters
 */
?>
<!doctype html>
<html lang="en" manifest="<?php echo $parameters['manifest'] ? 'manifest.appcache' : '' ?>">
<?php echo App::view('sections/head', $parameters) ?>
<body>
<?php echo App::view('sections/header', $parameters) ?>
<?php echo $content ?>
<?php echo App::view('sections/footer', $parameters) ?>
<?php echo App::view('sections/foot', $parameters) ?>
</body>
</html>

