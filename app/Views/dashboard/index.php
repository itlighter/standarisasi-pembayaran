<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="mt-2 mx-3 p-3" style="height: 70px;">
    <img src="<?= base_url('image/Picture4.png') ?>" alt="gambar" id="sm-img">
</div>
<div class="mx-3 border border-top-0 border-start-0 border-end-0 border-primary position-relative">
    <div class="position-absolute top-50 start-50 translate-middle">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active small mb-1" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
</div>
<div class="mx-3 mt-2">
    <ul class="row nav nav-tab" style="margin-left: 0px; margin-right: 0px;" id="myTab" role="tablist">
    <li class="col nav-item custom-border me-1" role="presentation">
        <button class="nav-link active border border-0 text-body" id="informasi-tab" data-bs-toggle="tab" data-bs-target="#informasi-tab-pane" type="button" role="tab" aria-controls="informasi-tab-pane" aria-selected="true">Informasi</button>
    </li>
    <li class="col nav-item custom-border mx-1" role="presentation">
        <button class="nav-link border border-0 text-body" id="petunjuk-tab" data-bs-toggle="tab" data-bs-target="#petunjuk-tab-pane" type="button" role="tab" aria-controls="petunjuk-tab-pane" aria-selected="false">Petunjuk Pembayaran</button>
    </li>
    <li class="col nav-item custom-border mx-1" role="presentation">
        <button class="nav-link border border-0 text-body" id="perpajakan-tab" data-bs-toggle="tab" data-bs-target="#perpajakan-tab-pane" type="button" role="tab" aria-controls="perpajakan-tab-pane" aria-selected="false">Perpajakan</button>
    </li>
    <li class="col nav-item custom-border mx-1" role="presentation">
        <button class="nav-link border border-0 text-body" id="opitem-tab" data-bs-toggle="tab" data-bs-target="#opitem-tab-pane" type="button" role="tab" aria-controls="opitem-tab-pane" aria-selected="false">Open Item</button>
    </li>
    <li class="col nav-item custom-border ms-1" role="presentation">
        <button class="nav-link border border-0 text-body" id="buktipotong-tab" data-bs-toggle="tab" data-bs-target="#buktipotong-tab-pane" type="button" role="tab" aria-controls="buktipotong-tab-pane" aria-selected="false">Bukti Potong</button>
    </li>
    </ul>
    <div class="w-100 mt-2 mb-2 tab-content" id="myTabContent" style="height: 415px;">
    <div class="tab-pane fade show active" id="informasi-tab-pane" role="tabpanel" aria-labelledby="informasi-tab" tabindex="0">
        <div class="row" style="height: 415px; margin-left: 0px; margin-right: 0px;">
            <div class="col border border-top-0 border-bottom-0 border-start-0 border-end-2 border-dark-subtle p-2">
                <p>Isi Informasi 1</p>
            </div>
            <div class="col border border-top-0 border-bottom-0 border-start-2 border-end-0 border-dark-subtle p-2">
                <div class="mb-5 mt-4 ms-5">
                    <img src="" class="mb-5" alt="gambar">
                    <p class="text-primary mb-5">CFA telah melakukan penyesuaian limit penunjang kinerja, untuk melihat dan mendownload memo sosialisasi perubahan PTO Penunjang Kinerja, klik gambar di atas</p>
                    <h6 class="text-primary mb-1">NPWP BSI</h3>
                    <p style="font-size: 12px; margin-bottom: -1px;">Anda dapat mendownload NPWP BSI dengan menekan tombol di bawah</p>
                    <a  href="<?= base_url('MockupAlokasiBiaya.xlsx') ?>" class="text-decoration-none" download>
                        <button type="button" class="border-0 bg-primary text-white"
                            style="--bs-btn-padding-y: .2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .75rem; width: 200px; font-size: 12px;" download><strong>Download NPWP</strong></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="petunjuk-tab-pane" role="tabpanel" aria-labelledby="petunjuk-tab" tabindex="0">
        <div class="row" style="height: 415px; margin-left: 0px; margin-right: 0px;">
            <div class="col border border-top-0 border-bottom-0 border-start-0 border-end-1 border-dark-subtle p-2">
                <div class="row" style="margin-left: -5px;">
                    <div class="col me-3 border border-1 ps-3 pt-3 pe-3">
                        <div class="ps-2 pt-2 border border-1 mb-2 position-relative">
                            <h5 style="margin-bottom: 0px;">SEWA</h5>
                            <img src="<?= base_url('image/Picture1.png') ?>" alt="gambar" class="float-end sm-img">
                            <p style="margin-bottom: 0px; font-size: 12px;">Gedung &#8226; Ruang</p>
                            <p style="margin-top: 0px; font-size: 12px;">ATM &#8226; Lahan Wallsign</p>
                            <a href="/dashboard/petunjuk/sewa" class="stretched-link"></a>
                        </div>
                        <a data-bs-toggle="collapse" href="#sewaCollapse" aria-expanded="false" aria-controls="sewaCollapse" class="icon-link float-end link-warning" style="position: relative; right: -12px; bottom: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Informasi" class="bi bi-info-circle float-end focusCollapse" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col me-3 border border-1 ps-3 pt-3 pe-3">
                        <div class="ps-2 pt-2 border border-1 mb-2 position-relative">
                            <h5 style="margin-bottom: 0px;">Jasa</h5>
                            <img src="<?= base_url('image/OHVA6082.PNG') ?>" alt="gambar" class="float-end sm-img">
                            <p style="margin-bottom: 0px; font-size: 12px;">Renovasi &#8226; EO</p>
                            <p style="margin-top: 0px; font-size: 12px;">Pemasangan &#8226; Pengiriman</p>
                        </div>
                        <a data-bs-toggle="collapse" href="#jasaCollapse" aria-expanded="false" aria-controls="jasaCollapse" class="icon-link float-end link-warning" style="position: relative; right: -12px; bottom: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Informasi" class="bi bi-info-circle float-end focusCollapse" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col me-3 border border-1 ps-3 pt-3 pe-3">
                        <div class="ps-2 pt-2 border border-1 mb-2 position-relative" style="height: 85px;">
                            <h5 style="margin-bottom: 0px;">Listrik</h5>
                            <img src="<?= base_url('image/Picture2.png') ?>" alt="gambar" class="float-end sm-img">
                            <br>
                            <p style="margin-bottom: 0px; font-size: 12px;">Air &#8226; PBB &#8226; Reklame</p>
                        </div>
                        <a data-bs-toggle="collapse" href="" aria-expanded="false" aria-controls="" class="icon-link float-end link-warning" style="position: relative; right: -12px; bottom: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Informasi" class="bi bi-info-circle float-end focusCollapse" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col me-2 border border-1 ps-3 pt-3 pe-3">
                        <div class="ps-2 pt-2 border border-1 mb-2 position-relative">
                            <h5 style="margin-bottom: 0px;">Vendor</h5>
                            <img src="<?= base_url('image/Picture3.png') ?>" alt="gambar" class="float-end sm-img">
                            <p style="margin-bottom: 0px; font-size: 12px;">Baru &#8226; Edit</p>
                            <p style="margin-top: 0px; font-size: 12px;">Tambah Rekening</p>
                        </div>
                        <a data-bs-toggle="collapse" href="#vendorCollapse" aria-expanded="false" aria-controls="vendorCollapse" class="icon-link float-end link-warning" style="position: relative; right: -12px; bottom: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Informasi" class="bi bi-info-circle float-end focusCollapse" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div id="collapse-group">
                    <div class="collapse position-relative justify-content-center mt-2" id="sewaCollapse" data-bs-parent="#collapse-group">
                        <div class="border border-1 border-black position-absolute start-50 translate-middle-x p-2" style="height: 200px; width: 400px;">
                            <h3 class="text-center">SEWA</h3>
                            <p class="collapse-fsize">><strong> Sewa Tanah dan Bangunan:</strong> Sewa Gedung, Sewa Ruang untuk ATM, Sewa lahan untuk wallsign/pilonsign yang bebannya diamortisasi</p>
                            <p class="collapse-fsize">><strong> SELAIN Sewa Tanah dan bangunan:</strong> Sewa Mesin Fotocopy, Printer, Scanner, Mesin Hitung Uang, Scanner</p>
                        </div>
                    </div>
                    <div class="collapse position-relative justify-content-center mt-2" id="vendorCollapse" data-bs-parent="#collapse-group">
                        <div class="border border-1 border-black position-absolute start-50 translate-middle-x p-2" style="height: 200px; width: 400px;">
                            <h3 class="text-center">Vendor</h3>
                            <p class="collapse-fsize">Dokumen yang diperlukan dan petunjuk penginputan untuk mendaftarkan vendor baru, mengubah data vendor yang telah diapproved dan menambahkan rekening baru</p>
                        </div>
                    </div>
                    <div class="collapse position-relative justify-content-center mt-2" id="jasaCollapse" data-bs-parent="#collapse-group">
                        <div class="border border-1 border-black position-absolute start-50 translate-middle-x p-2" style="height: 200px; width: 400px;">
                            <h3 class="text-center">JASA</h3>
                            <p class="collapse-fsize" style="margin-bottom: -5px;">> Jasa Notaris Sewa Gedung / Lahan / Ruang ATM</p>
                            <p class="collapse-fsize" style="margin-bottom: -5px;">> Beban Keamanan</p>
                            <p class="collapse-fsize" style="margin-bottom: -5px;">> Pemeliharaan & Perbaikan Gedung/Rumah BSI</p>
                            <p class="collapse-fsize" style="margin-bottom: -5px;">> Pemeliharaan & Perbaikan Instansi Milik BSI</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="perpajakan-tab-pane" role="tabpanel" aria-labelledby="perpajakan-tab" tabindex="0">
        <div class="row" style="height: 415px; margin-left: 0px; margin-right: 0px;">
            <div class="col border border-top-0 border-bottom-0 border-start-0 border-end-1 border-dark-subtle p-2">
                <p>Isi Perpajakan 1</p>
            </div>
            <div class="col border border-top-0 border-bottom-0 border-start-1 border-end-0 border-dark-subtle p-2">
                <p>Isi Perpajakan 2</p>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="opitem-tab-pane" role="tabpanel" aria-labelledby="opitem-tab" tabindex="0">
        <div class="row" style="height: 415px; margin-left: 0px; margin-right: 0px;">
            <div class="col border border-top-0 border-bottom-0 border-start-0 border-end-1 border-dark-subtle p-2">
                <p>Isi Open Item 1</p>
            </div>
            <div class="col border border-top-0 border-bottom-0 border-start-1 border-end-0 border-dark-subtle p-2">
                <p>Isi Open Item 2</p>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="buktipotong-tab-pane" role="tabpanel" aria-labelledby="buktipotong-tab" tabindex="0">
        <div class="row" style="height: 415px; margin-left: 0px; margin-right: 0px;">
            <div class="col border border-top-0 border-bottom-0 border-start-0 border-end-1 border-dark-subtle p-2">
                <p>Isi Bukti Potong 1</p>
            </div>
            <div class="col border border-top-0 border-bottom-0 border-start-1 border-end-0 border-dark-subtle p-2">
                <p>Isi Bukti Potong 2</p>
            </div>
        </div>
    </div>
    </div>
</div>
<div>
    <footer class="sticky-bottom bg-primary mx-3" style="height: 30px; margin-top: 25px;"></footer>
</div>
<script>
    var url = window.location.href;
    if (url.includes('#')) {
        var activeTab = url.substring(url.indexOf("#") + 1);
        var activeTab1 = activeTab.slice(0, -5);
        $(".tab-pane").removeClass("show active");
        $(".nav-link").removeClass("active");
        $("#" + activeTab).addClass("show active");
        $("#" + activeTab1).addClass("active");
    }
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>
<?= $this->endSection() ?>