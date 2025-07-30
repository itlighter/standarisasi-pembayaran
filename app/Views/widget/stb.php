<div class="mt-2 ms-3 tab-pane fade show" id="informasi-tab-pane" role="tabpanel" aria-labelledby="informasi-tab" tabindex="0">
    <div class="d-flex w-100" style="overflow-x: hidden;">
        <div class="bg-secondary custom-border-1 float-start">
            <span class="rotate-90 collapse-fsize text-white text-center" id="ps2"><strong>SEWA</strong></span><br><span class="rotate-90 collapse-fsize text-white" id="ps1"><strong>TANAH DAN BANGUNAN</strong></span>
        </div>
        <div class="border border-start-1 border-top-0 border-end-0 border-bottom-0 border-dark-subtle" id="sewa">
            <div class="mx-2 mt-2 bg-secondary border border-1 border-black text-center p-1" style="width: 250px; height: 30px;">
                <p class="collapse-fsize">Sewa Tanah dan Bangunan</p>
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
                <span class="bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">2. Kesesuaian informasi antar dokumen</span>
                <table class="table table-secondary">
                    <thead>
                        <tr>
                            <th scope="col" class="collapse-fsize">No</th>
                            <th scope="col" class="collapse-fsize">Dokumen</th>
                            <th scope="col" class="collapse-fsize">Pajak Penghasilan (PPh) ditanggung</th>
                            <th class="table-primary" scope="col" class="collapse-fsize">Perhatikan</th>
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
        </div>
    </div>
</div>
<div class="tab-pane fade show active" id="petunjuk-tab-pane" role="tabpanel" aria-labelledby="petunjuk-tab" tabindex="0">
    <div class="mt-2 ms-3 d-flex mb-5" style="overflow-x: hidden;">
        <div class="bg-secondary custom-border-1 float-start">
            <span class="rotate-90 collapse-fsize text-white text-center" id="ps2"><strong>SEWA</strong></span><br><span class="rotate-90 collapse-fsize text-white" id="ps1"><strong>TANAH DAN BANGUNAN</strong></span>
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
                            <td class="collapse-fsize">DSP SEWA</td>
                            <td class="collapse-fsize">
                                <img class="myImg" id="img4" src="<?= base_url('image/Picture10.png') ?>" alt="DSP Sewa" style="width:100%;max-width:239px">
                                <div id="myModal4" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img04">
                                    <div class="caption" id="caption4"></div>
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
                            <td class="collapse-fsize">Sewa</td>
                            <td class="collapse-fsize">Detail:  Sewa Tanah dan Bangunan</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td class="collapse-fsize">Metode</td>
                            <td class="collapse-fsize">3.Amortisasi</td>
                            <td class="collapse-fsize">
                                <img class="myImg" id="img1" src="<?= base_url('image/Picture11.jpeg') ?>" height="96" alt="Metode: 3.Amortisasi" style="width:100%;max-width:242px">
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div class="caption" id="caption1"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td class="collapse-fsize">Rekening BDD</td>
                            <td class="collapse-fsize">131560001 - BDD Sewa</td>
                            <td class="collapse-fsize">
                                <img class="myImg" id="img2" src="<?= base_url('image/Picture12.jpeg') ?>" height="210" alt="BDD Sewa" style="width:100%;max-width:240px">
                                <div id="myModal2" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img02">
                                    <div class="caption" id="caption2"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td class="collapse-fsize">Nomor GL Amortisasi/Alokasi beban</td>
                            <td class="collapse-fsize">PL60120 - Sewa Gedung</td>
                            <td class="collapse-fsize">
                                <img class="myImg" id="img3" src="<?= base_url('image/Picture13.jpeg') ?>" height="119" alt="Nomor GL: PL60120 - Sewa Gedung"  style="width:100%;max-width:212px">
                                <div id="myModal3" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img03">
                                    <div class="caption" id="caption3"></div>
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
                            <td class="collapse-fsize">Jenis Perhitungan Pajak</td>
                            <td class="collapse-fsize">10% dari harga sewa (tidak termasuk PPN)</td>
                            <td class="collapse-fsize">Jurnal yang terbentuk PPh 4 ayat 2</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td class="collapse-fsize">Mulai Amortisasi</td>
                            <td class="collapse-fsize">Sesuai Jangka waktu Perjanjian</td>
                            <td class="collapse-fsize">jk tgl input > tgl 25, diisi bulan berikutnya</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td class="collapse-fsize">Masa Amortisasi</td>
                            <td class="collapse-fsize">Sesuai Jangka waktu Perjanjian</td>
                            <td class="collapse-fsize">jk tgl input > tgl 25, masa amortisasi dikurangi 1 bulan</td>
                        </tr>
                    </tbody>
                </table>
                <span class="bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">2. Rincian yang terbentuk</span>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">No</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">Nama Vendor</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">Kode GL</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">Nama GL</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">URC</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">Mata Uang</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">DPP</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">PPN</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">PPh</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">Jumlah Pembayaran</th>
                            <th scope="col" class="collapse-fsize" style="background-color: #48a39e; color: white;">Perhatian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="collapse-fsize">1</th>
                            <td scope="col" class="collapse-fsize">Sesuai Invoice</td>
                            <td scope="col" class="collapse-fsize">PL60120</td>
                            <td scope="col" class="collapse-fsize">Sewa Gedung</td>
                            <td scope="col" class="collapse-fsize">4098000</td>
                            <td scope="col" class="collapse-fsize">IDR</td>
                            <td scope="col" class="collapse-fsize">Sesuai Faktur Pajak</td>
                            <td scope="col" class="collapse-fsize">Sesuai Faktur Pajak</td>
                            <td scope="col" class="collapse-fsize">
                                <?php if (($pribadi == 1 || $nominal1 == 2 || ($nominal1 == 1 && $wapu == 1)) || ($pph == 1 && $nominal1 == 1 && $wapu == 2)) : ?>
                                    10% dari harga sewa
                                <?php elseif ((($pph == 1 && $nominal1 == 1) || $pph == 2) || ($pph == 2 && $wapu == 1)) : ?>
                                    10/90 x Nilai sewa
                                <?php endif; ?>
                            </td>
                            <td scope="col" class="collapse-fsize">
                                <?php if (($pribadi == 1 || $nominal1 == 2 || ($nominal1 == 1 && $wapu == 1)) || ($pph == 1 && $nominal1 == 1)) : ?>
                                    Harga Sewa - PPh
                                <?php elseif (($pph == 1 && $nominal1 == 1 && $wapu == 2) || ($pph == 2 && $nominal1 == 1 && $wapu == 2)) : ?>
                                    Harga Sewa - PPh + PPN
                                <?php endif; ?>
                            </td>
                            <td scope="col" class="collapse-fsize"></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <img src="<?= base_url('image/Picture8.png') ?>" alt="" width="728" height="102">
                </div>
                <span class="mt-3 bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">3. Jurnal yang terbentuk</span>
                <div>
                    <img src="<?= base_url('image/Picture9.png') ?>" alt="" width="508" height="215">
                </div>
            </div>
        </div>
    </div>
</div>