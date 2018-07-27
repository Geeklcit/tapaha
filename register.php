
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>
<form method="post" action="Register.php">
    <div class="input-group">
        <label>prenom</label>
        <input type="text" name="prenom" value="">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="register_btn">Register</button>
    </div>
    <p>
        Deja membere <a href="login.php">Se logger</a>
    </p>
</form>
</body>
</html>