<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Include Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <form action="login_result.php" method="post">
        <h1>Login</h1>
        <div class="mb-3">
            <label for="id" class="form-label">User name:</label>
            <input type="text" name="id" id="id" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <div class="input-group">
                <input type="password" name="pwd" id="password" class="form-control" required>
                <button type="button" class="btn btn-outline-secondary" id="togglePassword" onclick="togglePasswordVisibility()">Show</button>
            </div>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role:</label>
            <select name="role" id="role" class="form-control">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <p class="mt-3">Don't have an account? <a href="register_form.php">Register here</a></p>
</div>
<!-- Bootstrap JavaScript for interactive components -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var toggleButton = document.getElementById('togglePassword');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleButton.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            toggleButton.textContent = 'Show';
        }
    }
</script>
</body>
</html>
