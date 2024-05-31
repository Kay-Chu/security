<?php
// Assuming you have a database connection and user information already
$userId = $_POST['user_id'];
$newRole = $_POST['new_role'];

// Update the user's role
if ($newRole == 'admin') {
    echo "User with ID $userId has been promoted to admin.";
} else {
    echo "Error: Invalid new role.";
}

// Redirect the user back to the admin dashboard or display a success message
header("Location: dashboard.php");
exit;
?>