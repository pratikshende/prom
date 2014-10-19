<?php
	//ToDo :: maybe we can put this variable somwhere in the common function
	$installation_root = Configure::read("installation_root");
?>
<form target="" method="post" action="<?php $installation_root; ?>/login">
Username : <input type="username" name="data[User][username]"/>
Password : <input type="password" name="data[User][password]"/>
<input type="submit" name="Login" value="Login"/>
</form>