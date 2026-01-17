<!DOCTYPE html>
<html>
<head>
<title>Employee CRUD</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><h3>Data Employee</h3></span>
    <a href="<?= base_url('index.php/employee/create') ?>" class="btn btn-primary mb-3">Tambah</a>
  </div>
</nav>


<table class="table table-bordered">
<tr>
    <th>ID</th><th>Nama</th><th>Email</th><th>Positon</th><th>Salary</th><th>Aksi</th>
</tr>
<?php foreach ($employees as $e): ?>
<tr>
    <td><?= $e['id'] ?></td>
    <td><?= $e['name'] ?></td>
    <td><?= $e['email'] ?></td>
    <td><?= $e['position'] ?></td>
    <td><?= $e['salary'] ?></td>
    <td>
        <a href="<?= base_url('index.php/employee/edit/'.$e['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="<?= base_url('index.php/employee/delete/'.$e['id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>
