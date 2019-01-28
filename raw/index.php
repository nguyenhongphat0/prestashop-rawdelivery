<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raw delivery files</title>
    <style>
        a {
            display: inline-block;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            background: #DDD;
        }
        a:hover {
            background: #555;
            color: white;
        }
    </style>
</head>
<body>
    <?php $files = array_diff(scandir('.'), array('.', '..', 'index.php')); ?>
    <h1>> Raw delivery: <?php echo count($files); ?> files</h1>
    <?php foreach ($files as $file) : ?>
        <a href="<?php echo $file; ?>"><?php echo $file; ?></a>
    <?php endforeach; ?>
</body>
</html>
