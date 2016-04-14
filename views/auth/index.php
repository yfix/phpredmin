<form class="form" action="<?=$this->router->url?>/auth/index/" method="POST">
    <legend>Login</legend>
    <input type="text" placeholder="User" name="user"/>
	<br />
    <input type="password" placeholder="Password" name="pswd">
	<br />
    <input type="submit" class="btn" value="GO"/>
</form>
