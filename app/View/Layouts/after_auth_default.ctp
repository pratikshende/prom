<?php
  //ToDo :: maybe we can put this variable somwhere in the common function
  $installation_root = $config["installation_root"];
  $site_title = $config["site_title"];
?> 
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo $site_title; ?></title>

  <?php echo $this->Html->css('foundation.css',array('media' => 'all')); ?>
  <?php echo $this->Html->css('redmond/jquery-ui-1.10.3.custom.min.css')?>
  <?php 
    foreach ($css as $file) {
      echo $this->Html->css($file,array('media' => 'screen'));
    }
  ?>
  <?php echo $this->Html->css('jquery.masterblaster.css',array('media' => 'screen')); ?>
</head>
<body>

	<?php echo $this->fetch('content'); ?>

  <?php echo $this->Html->script('jquery-1.9.1.js')?>
  <?php echo $this->Html->script('jquery-ui-1.10.3.custom.js')?>
  <?php echo $this->Html->script('vendor/custom.modernizr.js')?>
  <?php echo $this->Html->script('underscore.js'); ?>
  <?php echo $this->Html->script('backbone.js'); ?>
  <?php echo $this->Html->script('foundation.min.js'); ?>
  <?php echo $this->Html->script('foundation/foundation.js'); ?>
  <?php echo $this->Html->script('foundation/foundation.abide.js'); ?>
  <?php echo $this->Html->script('foundation/foundation.reveal.js'); ?>
  <?php echo $this->Html->script('foundation/foundation.topbar.js'); ?>
  <?php echo $this->Html->script('foundation/foundation.dropdown.js'); ?>
  
  <?php foreach ($js as $file) {
     echo $this->Html->script($file);
   }
  ?> 

  <input type="hidden" id="_t" value="<?php echo $token; ?>"/>

</body>
</html>