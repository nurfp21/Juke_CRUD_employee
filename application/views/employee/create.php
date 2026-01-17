<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"
 href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><h4>Tambah Employee</h4></span>
  </div>
</nav>

<form method="post" action="<?= base_url('index.php/employee/store') ?>">
    <input class="form-control mb-2" name="name" placeholder="Nama" required>
    <input class="form-control mb-2" name="email" type="email" placeholder="Email" required>
    <input class="form-control mb-2" name="position" type="position" placeholder="Position" required>
    <input class="form-control mb-2" name="salary" type="number" placeholder="Salary" required>
    <button class="btn btn-success">Simpan</button>
    <a href="<?= base_url('index.php/employee') ?>" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>
