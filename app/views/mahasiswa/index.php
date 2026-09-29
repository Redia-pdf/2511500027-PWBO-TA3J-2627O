<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <h1>Daftar Mahasiswa</h1>
                <?php foreach ($data['mhs'] as $mhs): ?>
                    <ul>
                        <li><?php echo $mhs['nama']; ?></li>
                        <li><?php echo $mhs['nim']; ?></li>
                        <li><?php echo $mhs['email']; ?></li>
                        <li><?php echo $mhs['jurusan']; ?></li>
                    </ul>
                <?php endforeach; ?>
        </div>
    </div>
</div>