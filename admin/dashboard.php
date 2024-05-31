<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        .logout {
            position: fixed;
            bottom: 10px;
            width: 100px;
            padding: 10px;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        button {
            width: 100%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3>Dashboard</h3>
        <ul>
            <li><a href="#users">View Users</a></li>
            <li><a href="#option2">Option 2</a></li>
            <li><a href="#option3">Option 3</a></li>
        </ul>
        <div class="logout">
            <a href="../login_form.php" style="text-decoration: none;">
                <button>Log Out</button>
            </a>
        </div>
    </div>
    <div class="content">
        <h2 id="users">Users</h2>
        <table>
        <table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <!-- Example rows (to be dynamically generated from your PHP backend) -->
    <tr>
        <td>1</td>
        <td>JohnDoe</td>
        <td>johndoe@example.com</td>
        <td><a href="user_profile.php?id=1"><button>View Profile</button></a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>JaneDoe</td>
        <td>janedoe@example.com</td>
        <td><a href="user_profile.php?id=2"><button>View Profile</button></a></td>
    </tr>
    <!-- Add more rows here based on actual data -->
</table>

        <h2 id="option2">Option 2</h2>
        <p>Content for option 2...</p>

       
