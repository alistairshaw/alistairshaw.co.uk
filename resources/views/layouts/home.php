<?php

use App\App;
/**
 * @var $content
 * @var $parameters
 */
?>
<!doctype html>
<html lang="en">
<?php echo App::view('sections/head', $parameters) ?>
<body>
<?php echo $content ?>
<?php echo App::view('sections/footer', $parameters) ?>
</body>
</html>

<script src="/js/production.min.js" type="application/javascript"></script>