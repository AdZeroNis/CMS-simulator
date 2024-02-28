<?php include '../../../php/editblog.php';?>
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
      <input type="text" name="title" placeholder="عنوان" value="<?php echo  $blogs['title']; ?>" class="form-control" style="background-color: #76b2ff;">
<input type="text" name="image" placeholder="تصویر" value="<?php echo  $blogs['image'] ; ?>" class="form-control" style="background-color: #76b2ff;">
<textarea  rows="4" cols="50" name="content" placeholder="متن  را  وارد  کنید..." style="background-color: #76b2ff;"><?php echo  $blogs['content'] ; ?></textarea><br>

      <select name="writer" class="form-control"  style="background-color: #76b2ff;">
       <?php foreach($writers as $writer){?> 
        
             <option value="<?php echo $writer['id']; ?>"  <?php if ($blogs['writer']==$writer['id']){?>selected<?php }?>><?php echo $writer['name']; ?></option>

        <?php } ?>
      </select><br>
      <input type="submit" value="ویرایش" name="Record" class="btn btn-primary" >
      <a href="blog.php" class="btn btn-danger" style="margin-bottom: 13px;">بازگشت</a>
      </form>
    </div>
    </div>
</div>
</body>
<script src="../../js/jquery-3.5.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</html>