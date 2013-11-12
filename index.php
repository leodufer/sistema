<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Gestion</title>
	<?php include('includes/recursos.php'); ?>
</head>
<body>
<header>
<?php include('includes/header.php'); ?>

</header>
<section>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <!--Sidebar content-->
      <?php include('includes/aside.php'); ?>
    </div>
    <div class="span10">
      <!--Body content-->
      	<div class="alert alert-info">
          <h4><?=$page?></h4>
        </div>
      		<?php 
           include('content/'.$page.'_view.php'); 
           ?>
    	
    </div>
  </div>
</div>
</section>
<footer>

</footer>
</body>
</html>