<?php
	//ToDo :: maybe we can put this variable somwhere in the common function
	$installation_root = $config["installation_root"];
	$site_title = $config["site_title"];	
?>
<form target="" method="post" action="<?php echo $installation_root; ?>/login">
Username : <input type="username" name="data[User][username]"/>
Password : <input type="password" name="data[User][password]"/>
<input type="submit" name="Login" value="Login"/>
</form>