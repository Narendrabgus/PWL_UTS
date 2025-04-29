<?= $this->extend('templates/main_layouts') ?>
<?= $this->section('content') ?>

<h2>Selamat datang, <?= session('username') ?> (User2)</h2>

<table class="table">
    <thead>
        <tr>
            <th>Keterangan</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Beli Buku</td>
            <td>Rp35.000</td>
        </tr>
    </tbody>
</table>

<?= $this->endSection() ?>