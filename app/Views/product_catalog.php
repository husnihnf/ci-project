<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $brand ?></h1>
    <hr />
    <ul>
        <?php foreach ($product_name as $item) : ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>