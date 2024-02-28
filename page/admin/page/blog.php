<?php include '../../../php/blog.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>ADMIN</title>
    <style>
      input,textarea{
        margin-bottom: 15px;
      }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link " href="../page/menu.php">منو</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="../page/blog.php">وبلاگ</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="../page/comment.php">نویسندگان</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    </div>
    <br><br>
    <div class="row">
      <form  method="post">
      <input type="text" name="title" placeholder="عنوان" class="form-control" style="background-color: #76b2ff;">
      <input type="text" name="image" placeholder="تصویر" class="form-control" style="background-color: #76b2ff;">
      <textarea  rows="4" cols="50" name="content" placeholder="متن را وارد کنید..." style="background-color: #76b2ff;"></textarea><br>
      <select name="writer" class="form-control"  style="background-color: #76b2ff;">
       <?php foreach($writers as $writer){?> 
        
             <option value="<?php echo $writer['id']; ?>"><?php echo $writer['name']; ?></option>

        <?php } ?>
      </select><br>
      <input type="submit" value="افزودن" name="Record" class="btn btn-primary" >
      </form>
    </div>
    <div class="row">
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">عنوان</th>
      <th scope="col">تصویر</th>
      <th scope="col">نویسنده</th>
      <th scope="col">تاریخ</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($blogs as $blog) { ?>
      <tr>
      <th scope="row"><?php echo $num++ ;?></th>
      <td> <?php echo $blog['title']; ?></td>
      <td><img src="<?php echo $blog['image']; ?>" height="80px" alt=""></td>
      <td> <?php foreach($writers as $writer){ if ($blog['writer']==$writer['id']){ echo $writer['name'];}} ?></td>
      <td><?php echo jdate('Y/m/d', $blog['date']) ?></td>
      <td>
        <a href="editblog.php ?id=<?php echo $blog['id'] ;?> " class="btn btn-warning">ویرایش</a>
        <a href="../../../php/deletepost.php ?id=<?php echo $blog['id'] ;?>" class="btn btn-danger">حذف</a>
      </td>
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