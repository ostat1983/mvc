<!doctype html>
<html>
<head>

  



    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css" />    
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
    
    <?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>



<!--
<li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
-->
<?php
    define("SITENAME",     "Yusuf");
    $nav = array("."=>".","Ana Sayfa"=>URL."index","Hakkımızda"=>URL."hakkimizda", "Z.Defteri"=>URL."zdefteri","Bireyler"=>URL."bireyler","Resim"=>URL."resim","Profil"=>URL."profil");
?>

<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
           
      <a class="navbar-brand" href="index"><?php echo SITENAME ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
<?php
           


foreach($nav as $x => $x_value) {
    echo '<li onclick="urlal()"><a href="'.$x_value.'">'.$x.'</a></li>' ;
}             
?> 
     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sign"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="<?php echo URL; ?>login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

</head>
<body>

<?php Session::init(); ?>

