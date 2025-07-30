<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('image/Picture4.png') ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('scss/custom_bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/custom.css') ?>">
</head>
<body>
    <div class="fixed-top bg-primary mx-3 mt-1" style="height: 30px;"></div>
    <?= $this->renderSection('content') ?>
</body>
</html>