<?php
require_once __DIR__.'/../vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo mix('/dist/app.min.css') ?>" />
</head>
<body>
    <div>
        <h1 class="title">My Name Is App</h1>
        <div id="app"></div>
    </div>
    <script src="<?php echo mix('/dist/app.min.js') ?>"></script>
</body>
</html>
