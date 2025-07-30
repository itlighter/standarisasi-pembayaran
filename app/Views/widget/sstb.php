<div class="mt-2 ms-3 tab-pane fade" id="informasi-tab-pane" role="tabpanel" aria-labelledby="informasi-tab" tabindex="0">
    <div class="d-flex mb-4" style="overflow-x: hidden;">
        <div class="bg-secondary custom-border-1 float-start">
            <span class="rotate-90 collapse-fsize text-white text-center" id="ps2"><strong>SEWA SELAIN</strong></span><br><span class="rotate-90 collapse-fsize text-white" id="ps1"><strong>TANAH DAN BANGUNAN</strong></span>
        </div>
        <div class="border border-start-1 border-top-0 border-end-0 border-bottom-0 border-dark-subtle" id="sewa">
            <div class="mx-2 mt-2 bg-secondary border border-1 border-black text-center p-1" style="width: 250px; height: 30px;">
                <p class="collapse-fsize">Sewa Selain Tanah dan Bangunan</p>
            </div>
            <div class="mx-2 border border-top-0 border-black text-center p-1" style="width: 250px; height: 100px;">
               <p class="collapse-fsize text-start" style="margin-bottom: -0px;">Vendor: 
                    <?php if ($pkp == 1) : ?>
                        <span class="collapse-fsize">PKP</span>
                    <?php elseif ($pkp == 2) : ?>
                        <span class="collapse-fsize">Non-PKP</span>
                    <?php else : ?>
                        <span class="collapse-fsize">Pribadi</span>
                    <?php endif; ?>
                    <?php if ($wapu == 1) : ?>
                        <span class="collapse-fsize"> - WAPU</span>
                    <?php elseif ($wapu == 2) : ?>
                        <span class="collapse-fsize"> - Bukan WAPU</span>
                    <?php endif; ?>
                </p>
                <p class="collapse-fsize text-start" style="margin-bottom: -0px;">PPh 
                    <?php if ($pph == 1) : ?>
                        <span class="collapse-fsize">Ditanggung Pemilik</span>
                    <?php elseif ($pph == 2) : ?>
                        <span class="collapse-fsize">Ditanggung BSI</span>
                    <?php endif; ?>
                </p>
                <p class="collapse-fsize text-start">Nominal : 
                    <?php if ($nominal == 2 && $nominal1 == 1 || $pribadi == 1) : ?>
                        <span class="collapse-fsize">> Rp. 200 Juta</span>
                    <?php elseif ($nominal == 1 && $nominal1 == 1 && $pribadi == 2) : ?>
                        <span class="collapse-fsize">> Rp. 10 Juta, < Rp. 200 Juta</span>
                    <?php elseif ($nominal == 1 && $pribadi == 1) : ?>
                        <span class="collapse-fsize">< Rp. 200 Juta</span>
                    <?php elseif ($nominal == 2 && $nominal1 == 2) : ?>
                        <span class="collapse-fsize">< Rp. 10 Juta</span>
                    <?php endif; ?>
                </p>
            </div>
            <div class="m-2">
                <p class="collapse-fsize"><strong>Sewa Selain Tanah dan Bangunan:</strong><br>1. Sewa Mesin Fotocopy<br>2. Sewa Peralatan Kantor Lain</p>
            </div>
            <div class="mx-2 mt-2">
                <span class="bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">1.Pastikan dokumen lengkap</span>
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
                            <td class="collapse-fsize">Surat Perintah Kerja/Perjanjian Kerja Sama (Bermaterai)</td>
                            <td class="collapse-fsize">Kepala Unit Kerja</td>
                            <td class="collapse-fsize">Ya</td>
                            <td class="collapse-fsize">-</td>
                            <td class="collapse-fsize">pajak penghasilan ditanggung siapa</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="collapse-fsize">Kuitansi/Invoice</td>
                            <td class="collapse-fsize">Pemilik</td>
                            <td class="collapse-fsize">Ya</td>
                            <td class="collapse-fsize">Ya</td>
                            <td class="collapse-fsize">isi lengkap semua isian</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="collapse-fsize">Faktur Pajak</td>
                            <td class="collapse-fsize">Pemilik</td>
                            <td class="collapse-fsize">Ya</td>
                            <td class="collapse-fsize">Ya</td>
                            <td class="collapse-fsize">kode awal 030</td>
                        </tr>
                    </tbody>
                </table>
                <span class="bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">2. Kesesuaian informasi antar dokumen</span>
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
                            <td class="collapse-fsize">Surat Perintah Kerja/Perjanjian Kerja Sama (Bermaterai)</td>
                            <td class="collapse-fsize">BSI</td>
                            <td class="collapse-fsize"></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="collapse-fsize">Kuitansi/Invoice</td>
                            <td class="collapse-fsize"></td>
                            <td class="collapse-fsize">Hari pengajuan - tanggal kuitansi < 30 hr</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="collapse-fsize">Faktur Pajak</td>
                            <td class="collapse-fsize"></td>
                            <td class="collapse-fsize">bulan input BSI pasti = bulan faktur pajak terbit</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td class="collapse-fsize">Berita acara expired dokumen*</td>
                            <td class="collapse-fsize"></td>
                            <td class="collapse-fsize">Jika hari pengajuan - tanggal kuitansi > 30 hr</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade show active" id="petunjuk-tab-pane" role="tabpanel" aria-labelledby="petunjuk-tab" tabindex="0">
    <div class="mt-2 ms-3 d-flex" style="overflow-x: hidden;">
        <div class="bg-secondary custom-border-1 float-start">
            <span class="rotate-90 collapse-fsize text-white text-center" id="ps2"><strong>SEWA SELAIN</strong></span><br><span class="rotate-90 collapse-fsize text-white" id="ps1"><strong>TANAH DAN BANGUNAN</strong></span>
        </div>
        <div class="border border-start-1 border-top-0 border-end-0 border-bottom-0 border-dark-subtle" id="sewa">
            <div class="mx-2 mt-2 bg-secondary border border-1 border-black text-center p-1" style="width: 250px; height: 30px;">
                <p class="collapse-fsize text-start">User: <?= session()->level ?></p>
            </div>
            <div class="mx-2 border border-top-0 border-black text-center p-1" style="width: 250px; height: 100px;">
                <p class="collapse-fsize text-start" style="margin-bottom: -0px;">Vendor: 
                    <?php if ($pkp == 1) : ?>
                        <span class="collapse-fsize">PKP</span>
                    <?php elseif ($pkp == 2) : ?>
                        <span class="collapse-fsize">Non-PKP</span>
                    <?php else : ?>
                        <span class="collapse-fsize">Pribadi</span>
                    <?php endif; ?>
                    <?php if ($wapu == 1) : ?>
                        <span class="collapse-fsize"> - WAPU</span>
                    <?php elseif ($wapu == 2) : ?>
                        <span class="collapse-fsize"> - Bukan WAPU</span>
                    <?php endif; ?>
                </p>
                <p class="collapse-fsize text-start" style="margin-bottom: -0px;">PPh 
                    <?php if ($pph == 1) : ?>
                        <span class="collapse-fsize">Ditanggung Pemilik</span>
                    <?php elseif ($pph == 2) : ?>
                        <span class="collapse-fsize">Ditanggung BSI</span>
                    <?php endif; ?>
                </p>
                <p class="collapse-fsize text-start">Nominal : 
                    <?php if ($nominal == 2 && $nominal1 == 1 || $pribadi == 1) : ?>
                        <span class="collapse-fsize">> Rp. 200 Juta</span>
                    <?php elseif ($nominal == 1 && $nominal1 == 1 && $pribadi == 2) : ?>
                        <span class="collapse-fsize">> Rp. 10 Juta, < Rp. 200 Juta</span>
                    <?php elseif ($nominal == 1 && $pribadi == 1) : ?>
                        <span class="collapse-fsize">< Rp. 200 Juta</span>
                    <?php elseif ($nominal == 2 && $nominal1 == 2) : ?>
                        <span class="collapse-fsize">< Rp. 10 Juta</span>
                    <?php endif; ?>
                </p>
            </div>
            <div class="mx-2 mt-2">
                <span class="bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">1. Inputan harus sesuai dg dokumen</span>
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col" class="collapse-fsize">No</th>
                            <th scope="col" class="collapse-fsize">Inputan</th>
                            <th scope="col" class="collapse-fsize">Yang dipilih/diisi</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #fdb345;">Perhatikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="collapse-fsize">DSP yang dipilih</td>
                            <td class="collapse-fsize">DSP OHC</td>
                            <td class="collapse-fsize">
                                <img class="myImg" id="img5" src="<?= base_url('image/Picture5.png') ?>" style="width:100%;max-width:239px">
                                <div id="myModal5" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img05">
                                    <div class="caption" id="caption5"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="collapse-fsize">Nama Vendor</td>
                            <td class="collapse-fsize">Sesuai invoice/kuitansi</td>
                            <td class="collapse-fsize">Pastikan tidak ada simbol (-,./^&"`)</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="collapse-fsize">Nomor Rekening</td>
                            <td class="collapse-fsize">Sesuai invoice/kuitansi</td>
                            <td class="collapse-fsize">Cek kembali apakah rekening aktif di mobile banking/iBSI</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td class="collapse-fsize">Jenis Pembayaran</td>
                            <td class="collapse-fsize">Selain Tanah dan Bangunan</td>
                            <td class="collapse-fsize">Detail: Sewa Selain Tanah dan Bangunan</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td class="collapse-fsize">Metode</td>
                            <td class="collapse-fsize">3. Amortisasi</td>
                            <td class="collapse-fsize">
                                <img class="myImg" id="img6" src="<?= base_url('image/Picture11.jpeg') ?>" height="96" style="width:100%;max-width:242px">
                                <div id="myModal6" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img06">
                                    <div class="caption" id="caption6"></div>
                                </div>
                            </td>
                        </tr>
                        <!-- <tr>
                            <th scope="row">6</th>
                            <td class="collapse-fsize">Rekening BDD</td>
                            <td class="collapse-fsize">131560001 - BDD Sewa</td>
                            <td class="collapse-fsize">
                                <img class="myImg" id="img2" src="<?= base_url('image/Picture12.jpeg') ?>" height="210" style="width:100%;max-width:240px">
                                <div id="myModal2" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img02">
                                    <div class="caption" id="caption2"></div>
                                </div>
                            </td>
                        </tr> -->
                        <tr>
                            <th scope="row">7</th>
                            <td class="collapse-fsize">Nomor GL Amortisasi/Alokasi beban</td>
                            <td class="collapse-fsize">PL60137 - Sewa Mesin Fotocopy<br>PL60123 - Sewa Peralatan Kantor Lain</td>
                            <td class="collapse-fsize">
                                <img class="myImg" id="img7" src="<?= base_url('image/Picture13.jpeg') ?>" height="119" style="width:100%;max-width:212px">
                                <div id="myModal7" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img07">
                                    <div class="caption" id="caption7"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td class="collapse-fsize">Kode URC</td>
                            <td class="collapse-fsize">URC Unit Kerja</td>
                            <td class="collapse-fsize">URC Cabang: 4098 Alokasi Cabang, 4097 Alokasi Area</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td class="collapse-fsize">Pajak Penghasilan</td>
                            <td class="collapse-fsize">Sewa</td>
                            <td class="collapse-fsize">Detail : Sewa Selain Tanah dan Bangunan, Beban BSI</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td class="collapse-fsize">Keterangan</td>
                            <td class="collapse-fsize"></td>
                            <td class="collapse-fsize">Tidak terdapat simbol (-,./^&"`)</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td class="collapse-fsize">Mulai Amortisasi</td>
                            <td class="collapse-fsize"></td>
                            <td class="collapse-fsize">Pastikan Berakhirnya Amortisasi Sama Dengan Bulan Perjanjian</td>
                        </tr>
                    </tbody>
                </table>
                <span class="bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">2. Rincian yang terbentuk</span>
                <div>
                    <img src="<?= base_url('image/Picture6.png') ?>" alt="" width="833" height="104">
                </div>
                <span class="mt-3 bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">3. Jurnal yang terbentuk</span>
                <div>
                    <img src="<?= base_url('image/Picture7.png') ?>" alt="" width="459" height="259">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var modal5 = document.getElementById("myModal5");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img5 = document.getElementById("img5");
    var modalImg5 = document.getElementById("img05");
    var captionText5 = document.getElementById("caption5");
    img5.onclick = function(){
    modal5.style.display = "block";
    modalImg5.src = this.src;
    captionText5.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span5 = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span5.onclick = function() {
    modal5.style.display = "none";
    }

    var modal6 = document.getElementById("myModal6");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img6 = document.getElementById("img6");
    var modalImg6 = document.getElementById("img06");
    var captionText6 = document.getElementById("caption6");
    img6.onclick = function(){
    modal6.style.display = "block";
    modalImg6.src = this.src;
    captionText6.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span6 = document.getElementsByClassName("close")[1];

    // When the user clicks on <span> (x), close the modal
    span6.onclick = function() {
    modal6.style.display = "none";
    }

    var modal7 = document.getElementById("myModal7");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img7 = document.getElementById("img7");
    var modalImg7 = document.getElementById("img07");
    var captionText7 = document.getElementById("caption7");
    img7.onclick = function(){
    modal7.style.display = "block";
    modalImg7.src = this.src;
    captionText7.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span7 = document.getElementsByClassName("close")[2];

    // When the user clicks on <span> (x), close the modal
    span7.onclick = function() {
    modal7.style.display = "none";
    }
</script>