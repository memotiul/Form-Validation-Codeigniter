<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <title>Assignment</title>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        *{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
}
body {
  background: url(//subtlepatterns.com/patterns/scribble_light.png);
  font-family: Calluna, Arial, sans-serif;
  min-height: 1000px;
}
#wrap{
  width: 90%;
  max-width: 1100px;
  margin: 50px auto;
}
.columns_2 figure{
   width:49%;
   margin-right:1%;
}

#columns figure:hover{
  -webkit-transform: scale(1.1);
  -moz-transform:scale(1.1);
  transform: scale(1.1);

}
#columns:hover figure:not(:hover) {
  opacity: 0.4;
}
div#columns figure {
  display: inline-block;
  background: #FEFEFE;
  border: 2px solid #FAFAFA;
  box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
  margin: 0 0px 15px;
  -webkit-column-break-inside: avoid;
  -moz-column-break-inside: avoid;
  column-break-inside: avoid;
  padding: 15px;
  padding-bottom: 5px;
  background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
  opacity: 1;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

div#columns figure img {
  width: 100%;
  border-bottom: 1px solid #ccc;
  padding-bottom: 15px;
  margin-bottom: 5px;
}

div#columns figure figcaption {
  font-size: .9rem;
  color: #444;
  line-height: 1.5;
  height:60px;
  font-weight:600;
  text-overflow:ellipsis;
}

a.button{
  padding:10px;
  background:salmon;
  margin:10px;
  display:block;
  text-align:center;
  color:#fff;
  transition:all 1s linear;
  text-decoration:none;
  text-shadow:1px 1px 3px rgba(0,0,0,0.3);
  border-radius:3px;
  border-bottom:3px solid #ff6536;
  box-shadow:1px 1px 3px rgba(0,0,0,0.3);
}
a.button:hover{
  background:#ff6536;
  border-bottom:3px solid salmon;
  color:#f1f2f3;
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
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Assignment</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Welcome'); ?>/create">Add New School</a>
                    </li>
            </ul>
        </div>
    </div>
</nav>
<?php
  foreach($records as $row):
?>
<div id="wrap">
<div class="alignRow">
<div class="imageColumn">
<div id="columns" class="columns_4">
  <figure>
  <img src="<?= "public/".$row->img ?>" >
  <figcaption><?=$row->name?></figcaption>
    <span class="price"><?=$row->address?></span>
    <a class="button"><?=$row->city?></a>
  </figure>
</div>
</div>
</div>
</div>
      <?php
     endforeach;
    ?>

</html>