<?= $this->extend('templates/main_layouts') ?>
<?= $this->section('content') ?>

<h2>Selamat datang, <?= session('username') ?> (Admin)</h2>

<table class="table">
    <thead>
        <tr>
            <th>Nama Anak</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Kakak</td>
            <td>Jajan</td>
            <td>Rp20.000</td>
        </tr>
        <tr>
            <td>Adik</td>
            <td>Beli Buku</td>
            <td>Rp35.000</td>
        </tr>
    </tbody>
</table>

<?= $this->endSection() ?>