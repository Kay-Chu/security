<html>
<head>
<title>Login Form</title>
</head>
<body>
<form action="login_result.php" method="post">
<h1>Login</h1>
User name: <input name="id" type="text" size="30" maxlength="100"><br><br>
Password: <input name="pwd" type="text" size="30"><br><br>
Role: <select name="role">
    <option value="user">User</option>
    <option value="admin">Admin</option>
</select><br><br>
<input name="submit" type="submit" value="submit">
</form>

<p>Don't have an account? <a href="register_form.php">Register here</a></p>
</body>
</html>
