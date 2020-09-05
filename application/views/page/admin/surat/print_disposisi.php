<style type="text/css">
body {
    font-size: 12px !important;
    color: #212121;
}

table {
    width: 100%;
    font-size: 12px;
    color: 212121;
}

tr,
td {
    border: 1px solid #444;
    padding: 8px !important;
    vertical-align: middle !important;
}

#lbr {
    font-size: 17px;
    font-weight: bold;
}

.isi_rks {
    height: 150px !important;
}

.tgh {
    text-align: center;
}

#right {
    border-right: none !important;
}

#left {
    border-left: none !important;
}

.header {
    text-align: center;
    margin: -.5rem 0;
}

.logo1 {
    float: left;
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 0 0 1.2rem;
}

.logo2 {
    float: right;
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 0 0 1.2rem;
}

.text {
    font-size: 15px !important;
    font-weight: bold;
    text-transform: uppercase;
}

#lead {
    width: auto;
    position: relative;
    margin: 15px 0 0 75%;
}

.lead {
    font-weight: bold;
    text-decoration: underline;
    margin-bottom: -10px;
}
</style>
<div class="row" align="center">
    <div class="header">
        <!-- Ubah Nanti Gambarnya -->
        <img src="<?= base_url() ?>assets/img/POLDA.png" class="logo1">
        <img src="<?= base_url() ?>assets/img/BIDTIK.jpg" class="logo2">
        <h6 class="text">KEPOLISIAN NEGARA REPUBLIK INDONESIA<br> DAERAH BALI <br> BIDANG TEKNOLOGI INFORMASI DAN
            KOMUNIKASI</h6>
    </div>
    <br>
    <table cellspacing="0" cellspacing="5">

        <tr>
            <td class="tgh" id="lbr" colspan="5">LEMBAR CETAK DISPOSISI</td>
        </tr>
        <tr>
            <td id="right" width="200"><strong> No Agenda :</strong></td>
            <td id="left" colspan="2"><?= $surat[0]['no_agenda'] ?></td>
        </tr>
        <tr>
            <td id="right" width="200"><strong> Nomor Surat :</strong></td>
            <td id="left" colspan="2"><?= $surat[0]['no_surat'] ?></td>
        </tr>
        <tr>
            <td id="right" width="200"><strong> Perihal :</strong></td>
            <td id="left" colspan="2"><?= $surat[0]['perihal'] ?></td>
        </tr>
        <tr>
            <td id="right" width="200"><strong> Tujuan Disposisi :</strong></td>
            <td id="left" colspan="2"><?= $surat[0]['first_name'] ?></td>
        </tr>
        <tr>
            <td id="right" width="200"><strong> Isi Disposisi :</strong></td>
            <td id="left" colspan="2"><?= $surat[0]['isi_disposisi']; ?></td>
        </tr>
        <tr>
            <td id="right" width="200"><strong> Sifat:</strong></td>
            <td id="left" colspan="2"><?= $surat[0]['sifat']; ?></td>
        </tr>
        <tr>
            <td id="right" width="200"><strong> Batas Waktu :</strong></td>
            <td id="left" colspan="2"><?= $surat[0]['batas_waktu'] ?></td>
        </tr>
        <tr>
            <td id="right" width="200"><strong> Catatan :</strong></td>
            <td id="left" colspan="2"><?= $surat[0]['catatan']; ?></td>
        </tr>
        <tr>
            <td id="right" width="200"><strong> Dikirim Oleh:</strong></td>
            <td id="left" colspan="2"><?= $users[0]['first_name']; ?></td>
        </tr>
    </table>
    <div id="lead">
        <p>Mengetahui,<br>
            Kepala Bidang TIK POLDA BALI</p>
        <div style="height: 50px"></div>
        <p class="lead">M. SAMSU ARIFIN, S,I.K., M.H.</p>
        <p>NRP. 74070753</p>
    </div>
</div>

<script type="text/javascript">
window.print();
</script>