<form target="" method="post" action="/prom/login/create">
Username : <input type="text" name="data[User][username]"/>
Password : <input type="text" name="data[User][password]"/>
Type     : <select name="data[User][type]">
				<option value="0">Super Admin</option>
				<option value="1">Service Center</option>
				<option value="2">Customer</option>
			</select>
<input type="submit" name="Login" value="Login"/>
</form>