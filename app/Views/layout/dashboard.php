<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('image/Picture4.png') ?>">
    <link rel="stylesheet" href="<?= base_url('scss/custom_bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/custom.css') ?>">
    
    <script src="https://kit.fontawesome.com/6760d85006.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsencrypt/bin/jsencrypt.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<body>
    <div class="bg-primary mx-3" style="height: 30px;">
        <div class="dropdown text-end">
            <button class="bg-primary border-0 dropdown-toggle text-black align-middle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= session()->username ?>_<?= session()->level ?>_kode cabang
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="btn-sm dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- <div class="fixed-top bg-primary mx-3 mt-1 position-relative" style="height: 30px;">
        <div class="dropdown-center text-end">
            <button class="bg-primary border-0 dropdown-toggle text-black align-middle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= session()->username ?>_<?= session()->level ?>_kode cabang
            </button>
            <ul class="dropdown-menu">
                <li><a class="btn-sm dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
            </ul>
        </div>
    </div> -->
    <?= $this->renderSection('content') ?>
</body>
</html>