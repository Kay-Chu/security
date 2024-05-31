<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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
        <h3>User Dashboard</h3>
        <ul>
            <li><a href="#stocks">Manage Stocks</a></li>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#settings">Settings</a></li>
        </ul>
        <div class="logout">
            <a href="../login_form.php" style="text-decoration: none;">
                <button>Log Out</button>
            </a>
        </div>
    </div>
    <div class="content">
        <h2 id="stocks">Stock Management</h2>
        <table>
            <tr>
                <th>Stock ID</th>
                <th>Type</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
            <!-- Example rows (to be dynamically generated from your PHP backend) -->
            <tr>
                <td>101</td>
                <td>Widgets</td>
                <td>50</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <tr>
                <td>102</td>
                <td>Gadgets</td>
                <td>30</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <!-- Add more rows here based on actual data -->
        </table>

        <h2 id="profile">Profile</h2>
        <p>Profile details here...</p>

        <h2 id="settings">Settings</h2>
        <p>Settings configuration here...</p>
    </div>
    
</body>
</html>
