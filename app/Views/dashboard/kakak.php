<?= $this->extend('templates/main_layouts') ?>
<?= $this->section('content') ?>

<h2>Selamat datang, <?= session('username') ?> (user1)</h2>

<table class="table">
    <thead>
        <tr>
            <th>Keterangan</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Jajan</td>
            <td>Rp20.000</td>
        </tr>
    </tbody>
</table>

<?= $this->endSection() ?>