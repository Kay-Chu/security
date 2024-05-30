<html>
<head>
<title>Login Result</title>
</head>
<body>
<?php

$conn = new mysqli("localhost", "root", "", "test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["id"];
$pwd = $_POST["pwd"];
$role = $_POST["role"];

if ($role === "admin") {
    $stmt = $conn->prepare("SELECT password FROM admin WHERE admin_id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($pwd === $row['password']) {
            header("Location: ./admin/dashboard.php");
            exit;
        } else {
            echo "<h2>Password incorrect, authentication failed.</h2>";
        }
    } else {
        echo "<h2>Admin ID does not exist.</h2>";
    }
} else {
    $stmt = $conn->prepare("SELECT salt, hash FROM userhash WHERE user_id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $salt = $row['salt'];
        $hash = $row['hash'];
        $pwdhash = hash("sha512", $salt . $pwd);

        if ($hash === $pwdhash) {
            header("Location: ./user/dashboard.php");
            exit;
        } else {
            echo "<h2>Password incorrect, authentication failed.</h2>";
        }
    } else {
        echo "<h2>User ID does not exist.</h2>";
    }
}

mysqli_close($conn);
?>
</body>
</html>
