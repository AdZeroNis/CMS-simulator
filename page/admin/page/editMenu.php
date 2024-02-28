
<?php include '../../../php/editMenu.php';?>
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
    <div class="row" style="padding: 42px;">
      <form method="post">
        <input type="text" name="title" placeholder="عنوان" class="form-control" style="background-color: #76b2ff;" value="<?php echo $menu['title'] ;?>"><br>
        <input type="number" name="sort" placeholder="الویت بندی" class="form-control" style="background-color: #76b2ff;"value="<?php echo $menu['sort'] ;?>" >
        <div class="form-check"><br>
         <input class="form-check-input" value="1" type="radio" name="rd" id="rd" <?php if ($menu['status']==1) {?> checked <?php } ?> >
        <label class="form-check-label" for="rd" style="margin-right: 30px;"> فعال </label>
        </div>
         <div class="form-check">
           <input class="form-check-input" value="0" type="radio" name="rd" id="rd" <?php if ($menu['status']==0) {?> checked <?php } ?>>
            <label class="form-check-label" for="rd" style="margin-right: 30px;">غیر فعال</label>
         </div><br>
         <input type="submit" value="ثبت" name="Record" class="btn btn-primary" >
         <a href="menu.php" class="btn btn-danger">بازگشت</a>
      </form>
      <br><br>
    </div>
</div>
</body>
<script src="../../js/jquery-3.5.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</html>