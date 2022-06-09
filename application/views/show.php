<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head>
<style>
* {
   box-sizing: border-box;
}
.imageColumn {
   float: left;
   width: 25%;
   padding: 10px;
}
h1{
   text-align: center;
}
</style>
</head>
<body>
<h1>Images Aligned Side by Side example</h1>
<?php
  foreach($records as $row):
?>
<div class="alignRow">
<div class="imageColumn">
  <figure>
<img src="<?= "public/".$row->img ?>" alt="Snow" style="width:100%">
<figcaption><?=$row->name?></figcaption>
    <span class="price"><?=$row->address?></span>
    <a class="button"><?=$row->city?></a>
      </figure>
</div>
</div>
      <?php
     endforeach;
    ?>
</body>
</html>