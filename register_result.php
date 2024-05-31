<html>
<head>
<title>Register Result</title>
</head>
<body>

<?php


//$conn = new mysqli("security-mysql.mysql.database.azure.com", "admin1", "R7sn7ZgAbOzFDXMJYl", "test");
// $conn = mysqli_init();
// $conn->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
// $conn->ssl_set(NULL, "./microsoft_certificate.pem", "./ca.pem", NULL, NULL);
// $conn->real_connect("security-mysql.mysql.database.azure.com", "admin1", "R7sn7ZgAbOzFDXMJYl", "test");


// if ($conn->connect_error) 
// {
//     die("Connection failed: ". $conn->connect_error);
// } 
$conn = mysqli_init();
$conn->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
$conn->ssl_set(NULL, "./microsoft_certificate.pem", "./ca.pem", NULL, NULL);

if (!$conn->real_connect("security-mysql.mysql.database.azure.com", "admin1", "R7sn7ZgAbOzFDXMJYl", "test")) {
    $errMsg = "Connection failed: " . $conn->connect_error;
    echo "<h3>$errMsg</h3>";
    exit;
}


$id = $_POST["id"]; 
$pwd = $_POST["pwd"];
$name = $_POST["name"];
$email = $_POST["email"];


$allDataCorrect = true;
$errMsg = "";
  
if (empty($id) || empty($pwd) || empty($name) || empty($email)) {
    $allDataCorrect = false;
    $errMsg = "Please fill in all the required fields.";
}

if ($allDataCorrect) {
    $search_sql = $conn->prepare("SELECT * FROM userhash WHERE user_id = ?");
    $search_sql->bind_param("s", $id); 
    $search_sql->execute();
    $search_result = $search_sql->get_result();

    if ($search_result->num_rows > 0) {
        echo "<h2>The user name is already registered. Please use a different user name.</h2>";
    } else {
        $salt = generateSalt(16);
        $pwdhash = hash("sha512", $salt . $pwd);

        $insert_sql = $conn->prepare("INSERT INTO userhash (user_id, hash, salt, name, email) VALUES (?, ?, ?, ?, ?)");
        $insert_sql->bind_param("sssss", $id, $pwdhash, $salt, $name, $email);

        if ($insert_sql->execute()) {
            echo "<h2>Registration Successful!</h2>";
        } else {
            $allDataCorrect = false;
            $errMsg = "An error occurred during registration. Please try again later.";
        }
    }
}

if (!$allDataCorrect) {
    echo "<h3>$errMsg</h3>";
}

$conn->close();


function generateSalt($length) {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    return substr(str_shuffle($chars), 0, $length);
}
?>
<a href="register_form.php">Go back to register page</a>
<br><br>
<a href="login_form.php">Go to login page</a>
</body>
</html>