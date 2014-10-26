<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo $config["product_name"];?></title>

  <?php 
    echo $this->Html->css('foundation.css',array('media' => 'all'));
    echo $this->Html->css('login.css',array('media' => 'all'));
  ?>

  <?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min.css',array('media' => 'screen')); ?>
  <?php echo $this->Html->css('jquery.masterblaster.css',array('media' => 'screen')); ?>

</head>

<body>
<?php
  $installation_root = $config["installation_root"];
  $product_name = $config["product_name"];
  $service_center_name = $config["service_center_name"];
?>

<div class="background">

<nav class="top-bar">
  <ul class="title-area">
    <li class="name">
      <h1><a href="<?php echo $config["installation_root"]; ?>"><?php echo $service_center_name; ?></a></h1>
    </li>
  </ul>

  <ul class="title-area right">
     <li class="name">
        <h1><a href="<?php echo "$installation_root/home"; ?>"><?php echo $product_name; ?></a></h1>
      </li>
  </ul>
</nav>

<?php echo $this->fetch('content'); ?>

</div>

</body>

</html>
