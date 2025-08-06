<div class="tab-pane fade" id="v-pills-syarat" role="tabpanel" aria-labelledby="v-pills-informasi-tab" tabindex="0">
    <div class="sewa1">
        <div class="mt-2 mb-2 alert alert-warning text-center" role="alert">
            <span class="collapse-fsize">Pembayaran Sewa Tanah dan Bangunan kantor cabang hanya dapat diajukan oleh BOC</span>
        </div>
        <?php if (isset($_SESSION['Answered'])) : ?>
            <div class="mt-2 bg-secondary border border-1 border-black text-center p-1" style="width: 250px; height: 30px;">
                <p class="collapse-fsize">Sewa Tanah dan Bangunan</p>
            </div>
            <div class="border border-top-0 border-black text-center p-1" style="width: 250px; height: 100px;">
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
        <?php endif; ?>
        <div class="mt-2">
            <span class="bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">1.Pastikan dokumen lengkap</span>
            <table class="table table-white table-bordered">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col" class="collapse-fsize2">No</th>
                        <th scope="col" class="collapse-fsize2">Dokumen</th>
                        <th scope="col" class="collapse-fsize2">Tandatangan</th>
                        <th scope="col" class="collapse-fsize2">Scan warna</th>
                        <th scope="col" class="collapse-fsize2">Stempel Tanggal</th>
                        <th scope="col" class="collapse-fsize2">Perhatikan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="collapse-fsize2">Persetujuan Nota Analisa Sewa Properti</td>
                        <td class="collapse-fsize2">RCEO & Deputy Ops</td>
                        <td class="collapse-fsize2">-</td>
                        <td class="collapse-fsize2">-</td>
                        <td class="collapse-fsize2">pajak penghasilan ditanggung siapa</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="collapse-fsize2">Perjanjian sewa bermaterai</td>
                        <td class="collapse-fsize2">Kepala Unit Kerja</td>
                        <td class="collapse-fsize2">Yes</td>
                        <td class="collapse-fsize2">-</td>
                        <td class="collapse-fsize2">pajak penghasilan ditanggung siapa</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="collapse-fsize2">Kuitansi</td>
                        <td class="collapse-fsize2">Pemilik Bangunan</td>
                        <td class="collapse-fsize2">Yes</td>
                        <td class="collapse-fsize2">Yes</td>
                        <td class="collapse-fsize2">Kuitansi untuk transaksi > 5 juta dibubuhi materai</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td class="collapse-fsize2">Faktur Pajak</td>
                        <td class="collapse-fsize2">Pemilik Bangunan</td>
                        <td class="collapse-fsize2">Yes</td>
                        <td class="collapse-fsize2">Yes</td>
                        <td class="collapse-fsize2">
                            <?php if (!isset($_SESSION['Answered']) || session()->q1 == 2 || $wapu == null) : ?>
                                <span class="collapse-fsize">Kode awal 03</span>
                            <?php elseif ($wapu == 1) : ?>
                                <span class="collapse-fsize">Kode awal 04</span>
                            <?php elseif ($wapu == 2) : ?>
                                <span class="collapse-fsize">Kode awal 03</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td class="collapse-fsize">Berita Acara Expired Dokumen</td>
                        <td class="collapse-fsize">-</td>
                        <td class="collapse-fsize">-</td>
                        <td class="collapse-fsize">-</td>
                        <td class="collapse-fsize">Apabila kuitansi > 30 hari dari tanggal input</td>
                    </tr>
                </tbody>
            </table>
            <span class="bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">2. Inputan harus sesuai dg dokumen</span>
            <table class="table table-white table-bordered">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col" class="collapse-fsize2">No</th>
                        <th scope="col" class="collapse-fsize2">Inputan</th>
                        <th scope="col" class="collapse-fsize2">Yang dipilih/diisi</th>
                        <th scope="col" class="collapse-fsize2">Perhatikan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="collapse-fsize2">DSP yang dipilih</td>
                        <td class="collapse-fsize2">DSP SEWA</td>
                        <td class="collapse-fsize2">
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
                        <td class="collapse-fsize2">Nama Vendor</td>
                        <td class="collapse-fsize2">Sesuai invoice/kuitansi</td>
                        <td class="collapse-fsize2">Pastikan sudah terdaftar di Master Vendor, Pastikan tidak ada simbol (-,./^&"`)</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="collapse-fsize2">Nomor Rekening</td>
                        <td class="collapse-fsize2">Sesuai invoice/kuitansi</td>
                        <td class="collapse-fsize2">Pastikan rekening aktif di mobile banking/iBSI</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td class="collapse-fsize2">Jenis Pembayaran</td>
                        <td class="collapse-fsize2">Sewa</td>
                        <td class="collapse-fsize2">Detail:  Sewa Tanah dan Bangunan</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td class="collapse-fsize2">Metode</td>
                        <td class="collapse-fsize2">3.Amortisasi</td>
                        <td class="collapse-fsize2">
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
                        <td class="collapse-fsize2">Rekening BDD</td>
                        <td class="collapse-fsize2">131560001 - BDD Sewa</td>
                        <td class="collapse-fsize2">
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
                        <td class="collapse-fsize2">Nomor GL Amortisasi/Alokasi beban</td>
                        <td class="collapse-fsize2">PL60120 - Sewa Gedung</td>
                        <td class="collapse-fsize2">
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
                        <td class="collapse-fsize2">Kode URC</td>
                        <td class="collapse-fsize2">URC Unit Kerja</td>
                        <td class="collapse-fsize2">URC Cabang: 4098 Alokasi Cabang, 4097 Alokasi Area</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td class="collapse-fsize2">Jenis Perhitungan Pajak</td>
                        <td class="collapse-fsize2">10% dari harga sewa (tidak termasuk PPN)</td>
                        <td class="collapse-fsize2">Jurnal yang terbentuk PPh 4 ayat 2</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td class="collapse-fsize2">Mulai Amortisasi</td>
                        <td class="collapse-fsize2">Sesuai Jangka waktu Perjanjian</td>
                        <td class="collapse-fsize2">jk tgl input > tgl 25, diisi bulan berikutnya</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td class="collapse-fsize2">Masa Amortisasi</td>
                        <td class="collapse-fsize2">Sesuai Jangka waktu Perjanjian</td>
                        <td class="collapse-fsize2">jk tgl input > tgl 25, masa amortisasi dikurangi 1 bulan</td>
                    </tr>
                </tbody>
            </table>
            <span class="bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">3. Rincian yang terbentuk</span>
            <table class="table table-white table-bordered">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col" class="collapse-fsize">No</th>
                        <th scope="col" class="collapse-fsize">Nama Vendor</th>
                        <th scope="col" class="collapse-fsize">Kode GL</th>
                        <th scope="col" class="collapse-fsize">Nama GL</th>
                        <th scope="col" class="collapse-fsize">URC</th>
                        <th scope="col" class="collapse-fsize">Mata Uang</th>
                        <th scope="col" class="collapse-fsize">DPP</th>
                        <th scope="col" class="collapse-fsize">PPN</th>
                        <th scope="col" class="collapse-fsize">PPh</th>
                        <th scope="col" class="collapse-fsize">Jumlah Pembayaran</th>
                        <th scope="col" class="collapse-fsize">Perhatian</th>
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
            <span class="mt-3 bg-primary collapse-fsize1 text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">4. Jurnal yang terbentuk</span>
            <div>
                <img src="<?= base_url('image/Picture9.png') ?>" alt="" width="508" height="215">
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="v-pills-penginputan" role="tabpanel" tabindex="0">
    <div class="mt-2 mb-2 alert alert-warning text-center">
        <span class="collapse-fsize">Pembayaran Sewa Tanah dan Bangunan kantor cabang hanya dapat diajukan oleh BOC</span>
    </div>
    <div class="sewa1">
        <?php if (isset($_SESSION['Answered'])) : ?>
            <div class="mt-2 bg-secondary border border-1 border-black text-center p-1" style="width: 250px; height: 30px;">
                <p class="collapse-fsize text-center">Sewa Tanah dan Bangunan</p>
            </div>
            <div class="mb-2 border border-top-0 border-black text-center p-1" style="width: 250px; height: 100px;">
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
        <?php endif; ?>
        <!-- <div>
            <span class="bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">1. Inputan harus sesuai dg dokumen</span>
            <table class="table table-white table-bordered">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col" class="collapse-fsize2">No</th>
                        <th scope="col" class="collapse-fsize2">Inputan</th>
                        <th scope="col" class="collapse-fsize2">Yang dipilih/diisi</th>
                        <th scope="col" class="collapse-fsize2">Perhatikan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="collapse-fsize2">DSP yang dipilih</td>
                        <td class="collapse-fsize2">DSP SEWA</td>
                        <td class="collapse-fsize2">
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
                        <td class="collapse-fsize2">Nama Vendor</td>
                        <td class="collapse-fsize2">Sesuai invoice/kuitansi</td>
                        <td class="collapse-fsize2">Pastikan tidak ada simbol (-,./^&"`)</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="collapse-fsize2">Nomor Rekening</td>
                        <td class="collapse-fsize2">Sesuai invoice/kuitansi</td>
                        <td class="collapse-fsize2">Cek kembali apakah rekening aktif di mobile banking/iBSI</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td class="collapse-fsize2">Jenis Pembayaran</td>
                        <td class="collapse-fsize2">Sewa</td>
                        <td class="collapse-fsize2">Detail:  Sewa Tanah dan Bangunan</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td class="collapse-fsize2">Metode</td>
                        <td class="collapse-fsize2">3.Amortisasi</td>
                        <td class="collapse-fsize2">
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
                        <td class="collapse-fsize2">Rekening BDD</td>
                        <td class="collapse-fsize2">131560001 - BDD Sewa</td>
                        <td class="collapse-fsize2">
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
                        <td class="collapse-fsize2">Nomor GL Amortisasi/Alokasi beban</td>
                        <td class="collapse-fsize2">PL60120 - Sewa Gedung</td>
                        <td class="collapse-fsize2">
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
                        <td class="collapse-fsize2">Kode URC</td>
                        <td class="collapse-fsize2">URC Unit Kerja</td>
                        <td class="collapse-fsize2">URC Cabang: 4098 Alokasi Cabang, 4097 Alokasi Area</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td class="collapse-fsize2">Jenis Perhitungan Pajak</td>
                        <td class="collapse-fsize2">10% dari harga sewa (tidak termasuk PPN)</td>
                        <td class="collapse-fsize2">Jurnal yang terbentuk PPh 4 ayat 2</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td class="collapse-fsize2">Mulai Amortisasi</td>
                        <td class="collapse-fsize2">Sesuai Jangka waktu Perjanjian</td>
                        <td class="collapse-fsize2">jk tgl input > tgl 25, diisi bulan berikutnya</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td class="collapse-fsize2">Masa Amortisasi</td>
                        <td class="collapse-fsize2">Sesuai Jangka waktu Perjanjian</td>
                        <td class="collapse-fsize2">jk tgl input > tgl 25, masa amortisasi dikurangi 1 bulan</td>
                    </tr>
                </tbody>
            </table>
            <span class="bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">2. Rincian yang terbentuk</span>
            <table class="table table-white table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="collapse-fsize2">No</th>
                        <th scope="col" class="collapse-fsize2">Nama Vendor</th>
                        <th scope="col" class="collapse-fsize2">Kode GL</th>
                        <th scope="col" class="collapse-fsize2">Nama GL</th>
                        <th scope="col" class="collapse-fsize2">URC</th>
                        <th scope="col" class="collapse-fsize2">Mata Uang</th>
                        <th scope="col" class="collapse-fsize2">DPP</th>
                        <th scope="col" class="collapse-fsize2">PPN</th>
                        <th scope="col" class="collapse-fsize2">PPh</th>
                        <th scope="col" class="collapse-fsize2">Jumlah Pembayaran</th>
                        <th scope="col" class="collapse-fsize2">Perhatian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="collapse-fsize2">1</th>
                        <td scope="col" class="collapse-fsize2">Sesuai Invoice</td>
                        <td scope="col" class="collapse-fsize2">PL60120</td>
                        <td scope="col" class="collapse-fsize2">Sewa Gedung</td>
                        <td scope="col" class="collapse-fsize2">4098000</td>
                        <td scope="col" class="collapse-fsize2">IDR</td>
                        <td scope="col" class="collapse-fsize2">Sesuai Faktur Pajak</td>
                        <td scope="col" class="collapse-fsize2">Sesuai Faktur Pajak</td>
                        <td scope="col" class="collapse-fsize2">
                            <?php if (($pribadi == 1 || $nominal1 == 2 || ($nominal1 == 1 && $wapu == 1)) || ($pph == 1 && $nominal1 == 1 && $wapu == 2)) : ?>
                                10% dari harga sewa
                            <?php elseif ((($pph == 1 && $nominal1 == 1) || $pph == 2) || ($pph == 2 && $wapu == 1)) : ?>
                                10/90 x Nilai sewa
                            <?php endif; ?>
                        </td>
                        <td scope="col" class="collapse-fsize2">
                            <?php if (($pribadi == 1 || $nominal1 == 2 || ($nominal1 == 1 && $wapu == 1)) || ($pph == 1 && $nominal1 == 1)) : ?>
                                Harga Sewa - PPh
                            <?php elseif (($pph == 1 && $nominal1 == 1 && $wapu == 2) || ($pph == 2 && $nominal1 == 1 && $wapu == 2)) : ?>
                                Harga Sewa - PPh + PPN
                            <?php endif; ?>
                        </td>
                        <td scope="col" class="collapse-fsize2"></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <img src="<?= base_url('image/Picture8.png') ?>" alt="" width="728" height="102">
            </div>
            <span class="mt-3 bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">3. Jurnal yang terbentuk</span>
            <div>
                <img src="<?= base_url('image/Picture9.png') ?>" alt="" width="508" height="215">
            </div>
        </div> -->
    </div>
</div>
<div class="tab-pane fade" id="v-pills-pajak" role="tabpanel" aria-labelledby="v-pills-input-tab" tabindex="0">
    <div class="sewa1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia culpa perferendis expedita rem, voluptatum pariatur recusandae fugiat nisi voluptas quae dignissimos repellat tenetur placeat numquam corrupti rerum sapiente. Ea, voluptates.</p>
    </div>
</div>
<div class="tab-pane fade" id="v-pills-form" role="tabpanel" tabindex="0">
  <div class="sewa1 p-3">
    <h5 class="mb-4">Download Files</h5>

    <ul class="list-group" id="fileList">
    
    </ul>

    <button id="downloadAllBtn" class="btn btn-primary btn-sm mt-3 float-end">
      Download All
    </button>
  </div>
</div>
