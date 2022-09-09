<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fufufu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <style>
    h2{
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
  </style>
  <body>
  <?php 
$db = new PDO("mysql:host=localhost;dbname=hospital", 'root', '');
$query = $db->query('select * from user');

?>

<div class="container">
<a href="admin.php" class="btn btn-outline-secondary">Kembali</a>
<div class="d-grid gap-2 col-2 mx-auto">
  <img src="https://static.wikia.nocookie.net/projectsekai/images/2/24/Stamp0425.png" alt="" class="text-center" width="110" height="100">
<h2 class="text-center">Data User</h2> 
<a href="tambah.php" class="btn btn-outline-primary mb-3">Insert</a>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<table class="table table-dark table-borderless container text-center">
  <thead>
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    while ($data = $query->fetch()):?>
    <tr>


        <td><?= $data['username']?></td>

        <td><?= $data['password']?></td>

        <td><?= $data['role']?></td>

        <td>
        <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-light"> Update </a>

        <a href="prodelete.php?id=<?= $data['id']; ?>" class="btn btn-danger"> Delete </a>
        </td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>
</div>
</div>
  </body>
</html>
