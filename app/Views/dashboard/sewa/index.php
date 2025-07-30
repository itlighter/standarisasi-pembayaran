<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="mt-2 mx-3 p-3" style="height: 70px;">
    <img src="<?= base_url('image/Picture4.png') ?>" alt="gambar" id="sm-img">
</div>
<div class="mx-3 border border-top-0 border-start-0 border-end-0 border-primary position-relative">
    <div class="position-absolute top-50 start-50 translate-middle">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item small mb-1"><a class="text-decoration-none" href="../">Dashboard</a></li>
            <li class="breadcrumb-item small mb-1"><a class="text-decoration-none" href="../#petunjuk-tab-pane">Petunjuk Pembayaran</a></li>
            <li class="breadcrumb-item small mb-1"><a class="text-decoration-none" href="petunjuk/sewa">Identifikasi Sewa</a></li>
            <li class="breadcrumb-item active small mb-1" aria-current="page">Sewa</li>
        </ol>
        </nav>
    </div>
</div>
<div class="mx-3 mt-2">
    <ul class="row nav nav-tab" style="margin-left: 0px; margin-right: 0px;" id="myTab" role="tablist">
    <li class="col nav-item custom-border me-1" role="presentation">
        <button class="nav-link border border-0 text-body collapse-fsize" id="informasi-tab" data-bs-toggle="tab" data-bs-target="#informasi-tab-pane" type="button" role="tab" aria-controls="informasi-tab-pane" aria-selected="true">Dokumen Syarat Pembayaran</button>
    </li>
    <li class="col nav-item custom-border mx-1" role="presentation">
        <button class="nav-link active border border-0 text-body collapse-fsize" id="petunjuk-tab" data-bs-toggle="tab" data-bs-target="#petunjuk-tab-pane" type="button" role="tab" aria-controls="petunjuk-tab-pane" aria-selected="false">Penginputan Pembayaran</button>
    </li>
    <li class="col nav-item custom-border mx-1" role="presentation">
        <button class="nav-link border border-0 text-body collapse-fsize" id="perpajakan-tab" data-bs-toggle="tab" data-bs-target="#perpajakan-tab-pane" type="button" role="tab" aria-controls="perpajakan-tab-pane" aria-selected="false">Pajak</button>
    </li>
    <li class="col nav-item custom-border mx-1" role="presentation">
        <button class="nav-link border border-0 text-body collapse-fsize" id="opitem-tab" data-bs-toggle="tab" data-bs-target="#opitem-tab-pane" type="button" role="tab" aria-controls="opitem-tab-pane" aria-selected="false">Form-form</button>
    </li>
    </ul>
</div>
<div class="tab-content" id="myTabContent">
    <?php if (session()->q1 == 1) : ?>
        <?= view_cell('\App\Libraries\Widget::stb', ['nominal' => session()->q2, 'nominal1' => session()->q5, 'pribadi' => session()->q3, 'pkp' => session()->q4, 'wapu' => session()->q6, 'pph' => session()->q7]) ?>
    <?php endif; ?>
    <?php if (session()->q1 == 2) : ?>
        <?= view_cell('\App\Libraries\Widget::sstb', ['nominal' => session()->q8, 'nominal1' => session()->q11, 'pribadi' => session()->q9, 'pkp' => session()->q10, 'wapu' => session()->q12, 'pph' => session()->q13]) ?>
    <?php endif; ?>
</div>
<script src="<?= base_url('bootstrap/js/imgModal.js') ?>"></script>
<?= $this->endSection() ?>