<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1><?php echo $judul; ?></h1>
    <?php echo form_open($aksi); ?>
    <?php if (isset($id)) { ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <?php } ?>
    <p>Nama: <input type="text" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>"></p>
    <p>Email: <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>"></p>
    <p>Password: <input type="password" name="password"></p>
    <p>Level: 
        <select name="level">
            <option value="admin" <?php echo isset($level) && $level == 'admin' ? 'selected' : ''; ?>>Admin</option>
            <option value="anggota" <?php echo isset($level) && $level == 'anggota' ? 'selected' : ''; ?>>Anggota</option>
        </select>
    </p>
    <p><input type="submit" value="Simpan"></p>
    <?php echo form_close(); ?>
</body>
</html>