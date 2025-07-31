<div class="tab-pane fade show active" id="v-pills-syarat" role="tabpanel" aria-labelledby="v-pills-informasi-tab" tabindex="0">
    <div id="sewa1">
        <?php if (isset($_SESSION['Answered'])) : ?>
            <div class="mt-2 bg-secondary border border-1 border-black text-center p-1" style="width: 250px; height: 30px;">
                <p class="collapse-fsize">Sewa Selain Tanah dan Bangunan</p>
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
        <div class="mt-2 mb-2">
            <p class="collapse-fsize"><strong>Sewa Selain Tanah dan Bangunan:</strong><br>1. Sewa Mesin Fotocopy<br>2. Sewa Peralatan Kantor Lain</p>
        </div>
        <div class="mt-2">
            <span class="bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">1.Pastikan dokumen lengkap</span>
            <table class="table table-white table-bordered">
                <thead class="table-primary">
                    <tr>
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
                        <td class="collapse-fsize2">Surat Perintah Kerja/Perjanjian Kerja Sama (Bermaterai)</td>
                        <td class="collapse-fsize2">Kepala Unit Kerja</td>
                        <td class="collapse-fsize2">Ya</td>
                        <td class="collapse-fsize2">-</td>
                        <td class="collapse-fsize2">pajak penghasilan ditanggung siapa</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="collapse-fsize2">Kuitansi/Invoice</td>
                        <td class="collapse-fsize2">Pemilik</td>
                        <td class="collapse-fsize2">Ya</td>
                        <td class="collapse-fsize2">Ya</td>
                        <td class="collapse-fsize2">Kuitansi untuk transaksi > 5 juta dibubuhi materai</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="collapse-fsize2">Faktur Pajak</td>
                        <td class="collapse-fsize2">Pemilik</td>
                        <td class="collapse-fsize2">Ya</td>
                        <td class="collapse-fsize2">Ya</td>
                        <td class="collapse-fsize2">
                            <?php if (!isset($_SESSION['Answered']) || session()->q1 == 1 || $wapu == null) : ?>
                                Kode awal ??
                            <?php elseif ($wapu == 1) : ?>
                                Kode awal 04
                            <?php elseif ($wapu == 2) : ?>
                                Kode awal 03
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td class="collapse-fsize2">Berita acara expired</td>
                        <td class="collapse-fsize2">-</td>
                        <td class="collapse-fsize2">-</td>
                        <td class="collapse-fsize2">-</td>
                        <td class="collapse-fsize2">Apabila kuitansi > 30 hari dari tanggal input</td>
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
                        <td class="collapse-fsize2">DSP OHC</td>
                        <td class="collapse-fsize2">
                            <img class="myImg" id="img4" src="<?= base_url('image/Picture5.png') ?>" alt="DSP Sewa" style="width:100%;max-width:239px">
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
                        <td class="collapse-fsize2">Pastikan rekening aktif di mobile banking/iBSI</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td class="collapse-fsize2">Jenis Pembayaran</td>
                        <td class="collapse-fsize2">Selain Tanah dan Bangunan</td>
                        <td class="collapse-fsize2">Detail: Sewa Selain Tanah dan Bangunan</td>
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
                        <td class="collapse-fsize2">PL60137 - Sewa Mesin Fotocopy<br>PL60123 - Sewa Peralatan Kantor Lain</td>
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
                        <td class="collapse-fsize2">Pajak Penghasilan</td>
                        <td class="collapse-fsize2">Sewa</td>
                        <td class="collapse-fsize2">Detail : Sewa Selain Tanah dan Bangunan, Beban BSI</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td class="collapse-fsize2">Keterangan</td>
                        <td class="collapse-fsize2"></td>
                        <td class="collapse-fsize2">Tidak terdapat simbol (-,./^&"`)</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td class="collapse-fsize2">Mulai Amortisasi</td>
                        <td class="collapse-fsize2"></td>
                        <td class="collapse-fsize2">Pastikan Berakhirnya Amortisasi Sama Dengan Bulan Perjanjian</td>
                    </tr>
                </tbody>
            </table>
            <span class="bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">3. Rincian yang terbentuk</span>
            <div>
                <img src="<?= base_url('image/Picture6.png') ?>" alt="" width="833" height="104">
            </div>
            <span class="mt-3 bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">4. Jurnal yang terbentuk</span>
            <div>
                <img src="<?= base_url('image/Picture7.png') ?>" alt="" width="459" height="259">
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="v-pills-penginputan" role="tabpanel" aria-labelledby="v-pills-input-tab" tabindex="0">
    <div id="sewa1">
        <div class="mt-2 bg-secondary border border-1 border-black text-center p-1" style="width: 250px; height: 30px;">
            <p class="collapse-fsize text-start">User: <?= session()->level ?></p>
        </div>
        <div class="border border-top-0 border-black text-center p-1" style="width: 250px; height: 100px;">
            <p class="collapse-fsize text-start" style="margin-bottom: -0px;">Vendor: 
                <?php if (!isset($_SESSION['Answered']) || session()->q1 == 1) : ?>
                    ??
                <?php elseif ($pkp == 1) : ?>
                    <span class="collapse-fsize">PKP</span>
                <?php elseif ($pkp == 2) : ?>
                    <span class="collapse-fsize">Non-PKP</span>
                <?php else : ?>
                    <span class="collapse-fsize">Pribadi</span>
                <?php endif; ?>
                <?php if (!isset($_SESSION['Answered']) || session()->q1 == 1) : ?>
                     - ?? (harap diisi questionare untuk sewa ini)
                <?php elseif ($wapu == 1) : ?>
                    <span class="collapse-fsize"> - WAPU</span>
                <?php elseif ($wapu == 2) : ?>
                    <span class="collapse-fsize"> - Bukan WAPU</span>
                <?php endif; ?>
            </p>
            <p class="collapse-fsize text-start" style="margin-bottom: -0px;">PPh 
                <?php if (!isset($_SESSION['Answered']) || session()->q1 == 1) : ?>
                    Ditanggung ??
                <?php elseif ($pph == 1) : ?>
                    <span class="collapse-fsize">Ditanggung Pemilik</span>
                <?php elseif ($pph == 2) : ?>
                    <span class="collapse-fsize">Ditanggung BSI</span>
                <?php endif; ?>
            </p>
            <p class="collapse-fsize text-start">Nominal : 
                <?php if (!isset($_SESSION['Answered']) || session()->q1 == 1) : ?>
                    ??
                <?php elseif ($nominal == 2 && $nominal1 == 1 || $pribadi == 1) : ?>
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
        <div class="mt-2">
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
                        <td class="collapse-fsize2">DSP OHC</td>
                        <td class="collapse-fsize2">
                            <img class="myImg" id="img4" src="<?= base_url('image/Picture5.png') ?>" alt="DSP Sewa" style="width:100%;max-width:239px">
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
                        <td class="collapse-fsize2">Pastikan rekening aktif di mobile banking/iBSI</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td class="collapse-fsize2">Jenis Pembayaran</td>
                        <td class="collapse-fsize2">Selain Tanah dan Bangunan</td>
                        <td class="collapse-fsize2">Detail: Sewa Selain Tanah dan Bangunan</td>
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
                        <td class="collapse-fsize2">PL60137 - Sewa Mesin Fotocopy<br>PL60123 - Sewa Peralatan Kantor Lain</td>
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
                        <td class="collapse-fsize2">Pajak Penghasilan</td>
                        <td class="collapse-fsize2">Sewa</td>
                        <td class="collapse-fsize2">Detail : Sewa Selain Tanah dan Bangunan, Beban BSI</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td class="collapse-fsize2">Keterangan</td>
                        <td class="collapse-fsize2"></td>
                        <td class="collapse-fsize2">Tidak terdapat simbol (-,./^&"`)</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td class="collapse-fsize2">Mulai Amortisasi</td>
                        <td class="collapse-fsize2"></td>
                        <td class="collapse-fsize2">Pastikan Berakhirnya Amortisasi Sama Dengan Bulan Perjanjian</td>
                    </tr>
                </tbody>
            </table>
            <span class="bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">2. Rincian yang terbentuk</span>
            <div>
                <img src="<?= base_url('image/Picture6.png') ?>" alt="" width="833" height="104">
            </div>
            <span class="mt-3 bg-primary collapse-fsize text-white align-bottom pt-2 ps-1" style="width: 250px; height: 30px; display: inline-block;">3. Jurnal yang terbentuk</span>
            <div>
                <img src="<?= base_url('image/Picture7.png') ?>" alt="" width="459" height="259">
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="v-pills-pajak" role="tabpanel" aria-labelledby="v-pills-input-tab" tabindex="0">
    <div id="sewa1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia culpa perferendis expedita rem, voluptatum pariatur recusandae fugiat nisi voluptas quae dignissimos repellat tenetur placeat numquam corrupti rerum sapiente. Ea, voluptates.</p>
    </div>
</div>
<div class="tab-pane fade" id="v-pills-form" role="tabpanel" tabindex="0">
    <div id="sewa1" class="p-3">
        <h5 class="mb-4">Download Files</h5>
        <ul class="list-group" id="fileList"></ul>
        <button id="downloadAllBtn" class="btn btn-primary btn-sm mt-3 float-end">
        Download All
        </button>
    </div>
</div>