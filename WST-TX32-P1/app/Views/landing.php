<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
</head>
<body>
    <h1>Hello</h1>
    <!-- <header class="header">
        <img src="" alt="" class="logo">
        <nav class="nav">
            <a href="<?= base_url() ?>" class="btn">Home</a>
            <a href="<?= base_url().'about' ?>" class="btn">About</a>
            <a href="<?= base_url(). 'catalog' ?>" class="btn">Products</a>
        </nav>
        <a href="" class="btn action"></a>
    </header> -->
    <?= $this->include('components/header_nav')?>
</body>
</html>         