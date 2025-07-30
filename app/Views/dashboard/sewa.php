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
            <li class="breadcrumb-item small mb-1"><a class="text-decoration-none" href="../#v-pills-petunjuk-tab">Petunjuk Pembayaran</a></li>
            <li class="breadcrumb-item active small mb-1" aria-current="page">Identifikasi Sewa</li>
        </ol>
        </nav>
    </div>
</div>
<div class="mx-3 mt-2">
    <ul class="row nav nav-tab" style="margin-left: 0px; margin-right: 0px;" id="myTab" role="tablist">
    <li class="col nav-item custom-border me-1" role="presentation">
        <button class="nav-link border border-0 text-body" id="informasi-tab" data-bs-toggle="tab" data-bs-target="#informasi-tab-pane" type="button" role="tab" aria-controls="informasi-tab-pane" aria-selected="false" disabled>Informasi</button>
    </li>
    <li class="col nav-item custom-border mx-1" role="presentation">
        <button class="nav-link active border border-0 text-body" id="petunjuk-tab" data-bs-toggle="tab" data-bs-target="#petunjuk-tab-pane" type="button" role="tab" aria-controls="petunjuk-tab-pane" aria-selected="true" disabled>Petunjuk Pembayaran</button>
    </li>
    <li class="col nav-item custom-border mx-1" role="presentation">
        <button class="nav-link border border-0 text-body" id="perpajakan-tab" data-bs-toggle="tab" data-bs-target="#perpajakan-tab-pane" type="button" role="tab" aria-controls="perpajakan-tab-pane" aria-selected="false" disabled>Perpajakan</button>
    </li>
    <li class="col nav-item custom-border mx-1" role="presentation">
        <button class="nav-link border border-0 text-body" id="opitem-tab" data-bs-toggle="tab" data-bs-target="#opitem-tab-pane" type="button" role="tab" aria-controls="opitem-tab-pane" aria-selected="false" disabled>Open Item</button>
    </li>
    <li class="col nav-item custom-border ms-1" role="presentation">
        <button class="nav-link border border-0 text-body" id="buktipotong-tab" data-bs-toggle="tab" data-bs-target="#buktipotong-tab-pane" type="button" role="tab" aria-controls="buktipotong-tab-pane" aria-selected="false" disabled>Bukti Potong</button>
    </li>
    </ul>
</div>
<div class="mt-2 ms-3 d-flex" style="overflow-x: hidden;">
    <div class="bg-secondary custom-border-1 float-start">
        <span class="rotate-90 collapse-fsize text-white text-center" id="ps2"><strong>SEWA</strong></span>
    </div>
    <div class="border border-start-1 border-top-0 border-end-0 border-bottom-0 border-dark-subtle" id="sewa">
        <div class="bg-primary w-100 ms-1 p-1" style="height: 30px;"><p class="text-white collapse-fsize">Identifikasi</p></div>
        <?php if (session()->getFlashdata('errorQ')) : ?>
            <div class="alert alert-danger mw-100 mx-2 mt-1">
                <?php echo session()->getFlashdata('errorQ'); ?>
            </div>
        <?php endif; ?>
        <?= validation_list_errors() ?>

        <?= form_open('dashboard/sewa'); ?>
        <p class="collapse-fsize p-custom">Apakah Transaksi ini tergolong sewa tanah dan bangunan (sewa gedung, ruang ATM, lahan u Pilonsign/Wallsign)?</p>
        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q1" value="1" id="q1-1">
        <label class="collapse-fsize form-check-label" for="q1-1">Ya</label><br>
        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q1" value="2" id="q1-2">
        <label class="collapse-fsize form-check-label" for="q1-2">Tidak</label>
        <div class="collapse" id="showSewa1" style="margin-bottom: -10px;">
            <p class="collapse-fsize p-custom">Apakah total sewa gedung yang dibayarkan < Rp.200jt?</p>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q2" value="1" id="q2-1">
            <label class="collapse-fsize form-check-label" for="q2-1">Ya</label><br>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q2" value="2" id="q2-2">
            <label class="collapse-fsize form-check-label" for="q2-2">Tidak</label>
            <div class="collapse" id="show200-1" style="margin-bottom: -10px;">
                <p class="bg-secondary collapse-fsize">Perjanjian sewa-menyewa dibuat harus dengan notarill</p>
            </div>
            <div class="collapse" id="show200-2" style="margin-bottom: -10px;">
                <p class="bg-secondary collapse-fsize">Perjanjian sewa-menyewa dapat dibuat tanpa notarill</p>
            </div>
            <p class="collapse-fsize p-custom">Apakah Vendor merupakan Orang Pribadi?</p>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q3" value="1" id="q3-1">
            <label class="collapse-fsize form-check-label" for="q3-1">Ya</label><br>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q3" value="2" id="q3-2">
            <label class="collapse-fsize form-check-label" for="q3-2">Tidak</label>
            <div class="mb-1 collapse" id="showVendor" style="margin-bottom: -10px;">
                <p class="collapse-fsize p-custom">Apakah pemilik merupakan Pengusaha Kena Pajak (PKP)?</p>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q4" value="1" id="q4-1">
                <label class="collapse-fsize form-check-label" for="q4-1">Ya</label><br>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q4" value="2" id="q4-2">
                <label class="collapse-fsize form-check-label" for="q4-2">Tidak</label>
                <div class="collapse" id="showPKP1" style="margin-bottom: -10px;">
                    <p class="bg-secondary collapse-fsize">Pemilik Gedung menerbitkan Faktur Pajak dan menjadi dokumen syarat pembayaran</p>
                </div>
                <div class="collapse" id="showPKP3" style="margin-bottom: -10px;">
                    <p class="bg-secondary collapse-fsize">Pemilik/Vendor tidak menerbitkan faktur pajak, tidak perlu melampirkan faktur</p>
                </div>
                <p class="collapse-fsize p-custom">Apakah total sewa gedung yang dibayarkan > Rp.10Jt??</p>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q5" value="1" id="q5-1">
                <label class="collapse-fsize form-check-label" for="q5-1">Ya</label><br>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q5" value="2" id="q5-2">
                <label class="collapse-fsize form-check-label" for="q5-2">Tidak</label>
                <div class="collapse" id="showBumn" style="margin-bottom: -10px;">
                    <div class="collapse" id="showNominal1" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize" id="pnominal">1. PPN di pungut oleh BSI, sehingga akan mengurangi nominal yang dibayarkan ke vendor<br>2. Beban akan diamortisasi sesuai dengan jangka waktu dalam OJS, sehingga metode transaksi yang harus dipilih oleh User adalah "Amortisasi"</p>
                    </div>
                    <p class="collapse-fsize p-custom">Apakah vendor termasuk perusahaan tertentu yang dimiliki secara langsung oleh BUMN dalam KMK No.240 Tahun:</p>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q6" value="1" id="q6-1">
                    <label class="collapse-fsize form-check-label" for="q6-1">Ya</label><br>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q6" value="2" id="q6-2">
                    <label class="collapse-fsize form-check-label" for="q6-2">Tidak</label>
                    <div class="collapse" id="showBumn1" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Faktur Pajak yang dikeluarkan oleh Vendor kode awalnya "04" atau "01"</p>
                    </div>
                    <div class="collapse" id="showBumn2" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Faktur pajak yang dikeluarkan oleh Vendor kode awalnya "03"</p>
                    </div>
                </div>
                <div class="collapse" id="showNominal2" style="margin-bottom: -10px;">
                    <p class="bg-secondary collapse-fsize" id="pnominall">1. PPN disetorkan oleh Vendor, sehingga tidak mengurangi nominal yang dibayarkan ke vendor.<br>2. Beban akan dibuku sekaligus, sehingga metode transaksi yang harus dipilih oleh User adalah "Sekaligus"</p>
                </div>
            </div>
            <p class="collapse-fsize p-custom">Apakah Pajak Penghasilan atas sewa menjadi kewajiban PEMILIK dalam Perjanjian sewa?</p>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q7" value="1" id="q7-1">
            <label class="collapse-fsize form-check-label" for="q7-1">Ya</label><br>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q7" value="2" id="q7-2">
            <label class="collapse-fsize form-check-label" for="q7-2">Tidak</label>
            <div class="collapse" id="showPph" style="margin-bottom: -10px;">
                <p class="bg-secondary collapse-fsize">Sewa Tanah dan bangunan dikenakan PPh 4 ayat (2) sewa sebesar 10% dari nilai sewa. PPh tsb dipotong dari pembayaran sewa BSI ke vendor sehingga nominal yang diterima vendor adalah 90% dari nilai sewa</p>
            </div>
            <div class="collapse" id="showPph2" style="margin-bottom: -10px;">
                <p class="bg-secondary collapse-fsize">Pajak Penghasilan sesuai ketentuan Perpajakan adalah kewajiban dari Pemilik dan harus dipotong dari pembayaran yang akan diterima pemilik</p>
            </div>
        </div>
        <div class="collapse" id="showSewa2" style="margin-bottom: -10px;">
            <p class="collapse-fsize p-custom">Apakah total sewa yang dibayarkan < Rp.200jt?</p>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q8" value="1" id="q8-1">
            <label class="collapse-fsize form-check-label" for="q8-1">Ya</label><br>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q8" value="2" id="q8-2">
            <label class="collapse-fsize form-check-label" for="q8-2">Tidak</label>
            <div class="collapse" id="show2200-1" style="margin-bottom: -10px;">
                <p class="bg-secondary collapse-fsize">Perjanjian sewa-menyewa dibuat harus dengan notarill</p>
            </div>
            <div class="collapse" id="show2200-2" style="margin-bottom: -10px;">
                <p class="bg-secondary collapse-fsize">Perjanjian sewa-menyewa dapat dibuat tanpa notarill</p>
            </div>
            <p class="collapse-fsize p-custom">Apakah Vendor merupakan Orang Pribadi?</p>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q9" value="1" id="q9-1">
            <label class="collapse-fsize form-check-label" for="q9-1">Ya</label><br>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q9" value="2" id="q9-2">
            <label class="collapse-fsize form-check-label" for="q9-2">Tidak</label>
            <div class="mb-1 collapse" id="showVendor1" style="margin-bottom: -10px;">
                <p class="collapse-fsize p-custom">Apakah pemilik merupakan Pengusaha Kena Pajak (PKP)?</p>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q10" value="1" id="q10-1">
                <label class="collapse-fsize form-check-label" for="q10-1">Ya</label><br>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q10" value="2" id="q10-2">
                <label class="collapse-fsize form-check-label" for="q10-2">Tidak</label>
                <div class="collapse" id="showPKP2" style="margin-bottom: -10px;">
                    <p class="bg-secondary collapse-fsize">Pemilik Gedung menerbitkan Faktur Pajak dan menjadi dokumen syarat pembayaran</p>
                </div>
                <div class="collapse" id="showPKP4" style="margin-bottom: -10px;">
                    <p class="bg-secondary collapse-fsize">Pemilik Gedung tidak menerbitkan Faktur Pajak, tidak perlu menerbitkan faktur</p>
                </div>
                <p class="collapse-fsize p-custom">Apakah total sewa yang dibayarkan > Rp.10Jt??</p>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q11" value="1" id="q11-1">
                <label class="collapse-fsize form-check-label" for="q11-1">Ya</label><br>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q11" value="2" id="q11-2">
                <label class="collapse-fsize form-check-label" for="q11-2">Tidak</label>
                <div class="collapse" id="showBumn3" style="margin-bottom: -10px;">
                    <div class="collapse" id="showNominal11" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">1. PPN di pungut oleh BSI, sehingga akan mengurangi nominal yang dibayarkan ke vendor<br>2. Beban akan diamortisasi sesuai dengan jangka waktu dalam OJS, sehingga metode transaksi yang harus dipilih oleh User adalah "Amortisasi"</p>
                    </div>
                    <div class="collapse" id="showNominal12" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">1. PPN disetorkan oleh Vendor, sehingga tidak mengurangi nominal yang dibayarkan ke vendor.<br>2. Beban akan dibuku sekaligus, sehingga metode transaksi yang harus dipilih oleh User adalah "Sekaligus"</p>
                    </div>
                    <p class="collapse-fsize p-custom">Apakah vendor termasuk perusahaan tertentu yang dimiliki secara langsung oleh BUMN dalam KMK No.240 Tahun:</p>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q12" value="1" id="q12-1">
                    <label class="collapse-fsize form-check-label" for="q12-1">Ya</label><br>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q12" value="2" id="q12-2">
                    <label class="collapse-fsize form-check-label" for="q12-2">Tidak</label>
                    <div class="collapse" id="showBumn11" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Termasuk perusahaan tertentu yang dimiliki secara langsung oleh BUMN (KMK No.240 Tahun 2022)</p>
                    </div>
                    <div class="collapse" id="showBumn12" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Bukan termasuk perusahaan tertentu yang dimiliki secara langsung oleh BUMN (KMK No.240 Tahun 2022)</p>
                    </div>
                </div>
            </div>
            <p class="collapse-fsize p-custom">Apakah Pajak Penghasilan atas sewa menjadi kewajiban PEMILIK dalam Perjanjian sewa?</p>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q13" value="1" id="q13-1">
            <label class="collapse-fsize form-check-label" for="q13-1">Ya</label><br>
            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q13" value="2" id="q13-2">
            <label class="collapse-fsize form-check-label" for="q13-2">Tidak</label>
            <div class="collapse" id="showPph1" style="margin-bottom: -10px;">
                <p class="bg-secondary collapse-fsize">Sewa Tanah dan bangunan dikenakan PPh 4 ayat (2) sewa sebesar 2% dari nilai sewa. PPh tsb dipotong dari pembayaran sewa BSI ke vendor sehingga nominal yang diterima vendor adalah 90% dari nilai sewa</p>
            </div>
        </div>
        <div class="mt-3 collapse" id="showSewa3">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col" class="collapse-fsize">No</th>
                        <th scope="col" class="collapse-fsize">Dokumen</th>
                        <th scope="col" class="collapse-fsize">Tandatangan</th>
                        <th scope="col" class="collapse-fsize">Scan warna</th>
                        <th scope="col" class="collapse-fsize">Stempel Tanggal</th>
                        <th scope="col" class="collapse-fsize" style="background-color: #fdb345;">Perhatikan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="collapse-fsize">Persetujuan Nota Analisa Sewa Properti</td>
                        <td class="collapse-fsize">RCEO & Deputy Ops</td>
                        <td class="collapse-fsize">-</td>
                        <td class="collapse-fsize">-</td>
                        <td class="collapse-fsize">pajak penghasilan ditanggung siapa</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="collapse-fsize">Perjanjian sewa bermaterai</td>
                        <td class="collapse-fsize">Kepala Unit Kerja</td>
                        <td class="collapse-fsize">Yes</td>
                        <td class="collapse-fsize">-</td>
                        <td class="collapse-fsize">pajak penghasilan ditanggung siapa</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="collapse-fsize">Kuitansi</td>
                        <td class="collapse-fsize">Pemilik Bangunan</td>
                        <td class="collapse-fsize">Yes</td>
                        <td class="collapse-fsize">Yes</td>
                        <td class="collapse-fsize">isi lengkap semua isian</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td class="collapse-fsize">Faktur Pajak</td>
                        <td class="collapse-fsize">Pemilik Bangunan</td>
                        <td class="collapse-fsize">Yes</td>
                        <td class="collapse-fsize">Yes</td>
                        <td class="collapse-fsize">kode awal 030</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col" class="collapse-fsize">No</th>
                        <th scope="col" class="collapse-fsize">Dokumen</th>
                        <th scope="col" class="collapse-fsize">Pajak Penghasilan (PPh) ditanggung</th>
                        <th scope="col" class="collapse-fsize" style="background-color: #fdb345;">Perhatikan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="collapse-fsize">Nota Analisa</td>
                        <td class="collapse-fsize">Pemilik Bangunan</td>
                        <td class="collapse-fsize">Informasi Pajak, jangka waktu sewa, nominal sebelum dan sesudah pajak harus sejalan</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="collapse-fsize">Perjanjian sewa bermaterai</td>
                        <td class="collapse-fsize">Pemilik Bangunan</td>
                        <td class="collapse-fsize">Hari pengajuan - tangga</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="collapse-fsize">Kuitansi</td>
                        <td class="collapse-fsize"></td>
                        <td class="collapse-fsize">bulan input BSI pasti</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td class="collapse-fsize">Faktur Pajak</td>
                        <td class="collapse-fsize"></td>
                        <td class="collapse-fsize"></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td class="collapse-fsize">Berita acara expired dokumen*</td>
                        <td class="collapse-fsize"></td>
                        <td class="collapse-fsize"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <button class="border-0 text-center w-25 bg-secondary" id="footerDashboard" style="margin-top: 35px; margin-left: 35%; margin-bottom: 80px;">Selanjutnya</button>
        </div>
        <?= form_close(); ?>
    </div>
</div>
<div>
    <footer class="sticky-bottom bg-primary mx-3" style="height: 30px; margin-top: 25px;"></footer>
</div>
<script src="<?= base_url('bootstrap/js/custom.js') ?>"></script>
<?= $this->endSection() ?>