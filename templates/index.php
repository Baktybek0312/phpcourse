<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Hello from index</h1>

    <?php foreach($news as $item): ?>
        <p><?php echo $item; ?></p>
    <?php endforeach; ?>

    <?php if ($a == 2): ?>
        <h1>hello</h1>
    <?php endif; ?>
</body>
</html>
