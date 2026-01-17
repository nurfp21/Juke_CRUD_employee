<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"
 href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><h4>Edit Employee</h4></span>
  </div>
</nav>

<form method="post" action="<?= base_url('index.php/employee/update/'.$employee['id']) ?>">

    <div class="mb-2">
        <label>Nama</label>
        <input class="form-control" name="name"
               value="<?= $employee['name'] ?>" required>
    </div>

    <div class="mb-2">
        <label>Email</label>
        <input class="form-control" name="email" type="email"
               value="<?= $employee['email'] ?>" required>
    </div>

    <div class="mb-2">
        <label>Position</label>
        <input class="form-control" name="position"
               value="<?= $employee['position'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Salary</label>
        <input class="form-control" name="salary" type="number"
               value="<?= $employee['salary'] ?>" required>
    </div>

    <button class="btn btn-success">Update</button>
    <a href="<?= base_url('index.php/employee') ?>" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>
