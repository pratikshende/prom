<?php
	//ToDo :: maybe we can put this variable somwhere in the common function
	$installation_root = Configure::read("installation_root");
?>
<form target="" method="post" action="<?php echo $installation_root; ?>/login/create">
Username : <input type="text" name="data[User][username]"/>
Password : <input type="text" name="data[User][password]"/>
Type     : <select name="data[User][type]">
				<option value="0">Super Admin</option>
				<option value="1">Service Center</option>
				<option value="2">Customer</option>
			</select>
<input type="submit" name="Login" value="Login"/>
</form>