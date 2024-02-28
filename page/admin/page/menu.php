
<?php include '../../../php/menu.php';?>
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
    <a class="nav-link active" href="../page/menu.php">منو</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../page/blog.php">وبلاگ</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../page/comment.php">نویسندگان</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    </div>
    <div class="row" style="padding: 42px;">
      <form method="post">
        <input type="text" name="title" placeholder="عنوان" class="form-control" style="background-color: #76b2ff;"><br>
        <input type="number" name="sort" placeholder="الویت بندی" class="form-control" style="background-color: #76b2ff;" >
        <div class="form-check"><br>
         <input class="form-check-input" value="1" type="radio" name="rd" id="rd" checked>
        <label class="form-check-label" for="rd" style="margin-right: 30px;"> فعال </label>
        </div>
         <div class="form-check">
           <input class="form-check-input" value="0" type="radio" name="rd" id="rd" checked>
            <label class="form-check-label" for="rd" style="margin-right: 30px;">غیر فعال</label>
         </div><br>
         <input type="submit" value="ثبت" name="Record" class="btn btn-primary" >
      </form>
      <br><br>
      <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">عنوان</th>
      <th scope="col">الویت بندی</th>
      <th scope="col">وضعیت</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($menus as $menu) { ?>
      <tr>
      <th scope="row"><?php echo $num++ ;?></th>
      <td><?php echo $menu['title'] ;?></td>
      <td><?php echo $menu['sort'] ;?></td>
      <td><?php if($menu['status']==1){ ?> <span class="btn btn-success">فعال</span> <?php }else{ ?> <span class="btn btn-danger">غیر فعال</span> <?php } ?></td>
      <td>
        <a href="editMenu.php ?id=<?php echo $menu['id'] ;?> " class="btn btn-warning">ویرایش</a>
        <a href="../../../php/deletemenu.php ?id=<?php echo $menu['id'] ;?>" class="btn btn-danger">حذف</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
</div>
</body>
<script src="../../js/jquery-3.5.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</html>