<?php include '../../../php/writer.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>ADMIN</title>
</head>
<body>
<div class="container">
    <div class="row">
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link " href="../page/menu.php">منو</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../page/blog.php">وبلاگ</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active" href="../page/comment.php">نویسندگان</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    </div>
    <div class="row" style="padding: 42px;">
      <form method="post">
        <input type="text" name="name" placeholder="نام و نام خانوادگی" class="form-control" style="background-color: #76b2ff;"><br>
         <input type="submit" value="افزودن" name="Record" class="btn btn-primary" >
      </form>
      <br><br>
      <table class="table table-striped table-dark"><br>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">نام و نام خانوادگی</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($writers as $writer) { ?>
      <tr>
      <th scope="row"><?php echo $num++ ;?></th>
      <td><?php echo $writer['name'] ;?></td>
      <td>
        <a href="editwriter.php ?id=<?php echo $writer['id'] ;?> " class="btn btn-warning">ویرایش</a>
        <a href="../../../php/deleteWriter.php ?id=<?php echo $writer['id'] ;?>" class="btn btn-danger">حذف</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
<script src="../../js/jquery-3.5.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</html>