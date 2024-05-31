<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <form action="register_result.php" method="post">
        <h1 class="mb-3">Register</h1>
        <div class="mb-3">
            <label for="id" class="form-label">User name:</label>
            <input type="text" name="id" id="id" class="form-control" size="30" maxlength="100" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <div class="input-group">
                <input type="password" name="pwd" id="password" class="form-control" size="30" maxlength="100" required>
                <button type="button" class="btn btn-outline-secondary" id="togglePassword" onclick="togglePasswordVisibility()">Show</button>
            </div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control" size="30" maxlength="100" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" size="30" maxlength="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <p class="mt-3">Already have an account? <a href="login_form.php">Login here</a></p>
</div>

<!-- Include Bootstrap JavaScript and custom script for toggling password visibility -->
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
