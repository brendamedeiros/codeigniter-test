<h2>Login</h2>
<?php if($error==1){ ?>
	<p> Your user/password did not match.</p>
<?php } ?>

<form action="<?=base_url()?>users/login" method="post">
	<p>Username: <input type="text" name="username" /></p>
	<p>Password: <input type="password" name="password" /></p>
	
	<p>User Type:
		<select name="user_type">
			<option value="" selected="selected">--</option>
			<option valie="admin">Admin</option>
			<option valie="author">Author</option>
			<option valie="user">User</option>
		</select>
		
	<p><input type="submit" value="Login" /></p>
</form>