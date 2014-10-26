<?php
	$installation_root = $config["installation_root"];
?>

<?php
	$message = $this->Session->flash();
	if($message) {
?>

<div class="row">
	<div class="large-3 columns">
		&nbsp;
	</div>

	<div class="large-5 columns">
		<div data-alert="" class="alert-box alert round">
			<?php echo $message; ?>
			<a href="<?php echo "$installation_root/login"?>" class="close">×</a>
		</div>
	</div>

	<div class="large-4 columns">
		&nbsp;
	</div>
</div>

<?php
	}
?>

<div class="row">
  <div class="large-3 columns">
  	&nbsp;
  </div>
  <div class="large-5 columns panel radius padding">
    <?php //ToDo :: this is bad for plugability/modularity ?>
  	<form target="" method="post" action="<?php echo $installation_root; ?>/login">


  		<div class="row">
          <div class="small-3 columns">
            <label for="username" class="right inline">Username</label>
          </div>

          <div class="small-6 columns">
              <input type="text" id="username" name="data[User][username]"/>
          </div>

          <div class="small-3 columns">
              &nbsp;
          </div>
   	   </div>


   	   <div class="row">
          <div class="small-3 columns">
            <label for="password" class="right inline">Password</label>
          </div>

          <div class="small-6 columns">
              <input type="password" id="password" name="data[User][password]"/>
          </div>

          <div class="small-3 columns">
              &nbsp;
          </div>
   	   </div>

      <div class="row">
        &nbsp;
      </div>

   	   <div class="row">
   	   		<div class="small-3 columns">
   	   			&nbsp;
   	   		</div>
	   	   <div class="small-8 columns">
	   	   	<input type="submit" class="small button success" name="Login" value="Login"/>
	   	   	<input type="reset" class="small button alert" name="Reset" value="Reset"/>
	   	   </div>
	   	   <div class="small-1 columns">
   	   		</div>
   	   </div>
	
	</form>
  </div>
  <div class="large-4 columns">
  	&nbsp;
  </div>
</div>