<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <?php if(session()->getFlashdata('error')): ?>
        <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <form method="post" action="/login">

        <!-- ini untuk membuat kolom username -->
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br> <!-- nama="username" yang di dalam tanda petik itu yang dipanggil di AuthController  buat bisa nyimpen dan ngambil data nantinya-->

        <!-- ini untuk membuat kolom password -->
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br> <!-- type password itu berfungsi untuk menjadikan teks yang diketik menjadi bulet bulet (tidak terlihat teksnya) -->
        
        <!-- ini untuk membuat tombol login -->
        <button type="submit">Login</button>
    </form>
</body>
</html>
