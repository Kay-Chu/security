<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JohnDoe's Profile</title>
    <style>
        /* You can add your own custom styles here */
    </style>
</head>
<body>
    <h1>JohnDoe's Profile</h1>
    <h2>User Details</h2>
    <p>ID: 1</p>
    <p>Username: JohnDoe</p>
    <p>Email: johndoe@example.com</p>

    <h2>Stock Trading History</h2>
    <table>
        <tr>
            <th>Transaction ID</th>
            <th>Stock Symbol</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Date</th>
        </tr>
        <tr>
            <td>1</td>
            <td>AAPL</td>
            <td>100</td>
            <td>120.50</td>
            <td>2023-04-15</td>
        </tr>
        <tr>
            <td>2</td>
            <td>MSFT</td>
            <td>50</td>
            <td>300.00</td>
            <td>2023-05-01</td>
        </tr>
        <tr>
            <td>3</td>
            <td>AMZN</td>
            <td>75</td>
            <td>2500.75</td>
            <td>2023-03-20</td>
        </tr>
    </table>

    <h2>Change Role</h2>
    <form action="update_user_role.php" method="post">
        <input type="hidden" name="user_id" value="1">
        <input type="hidden" name="new_role" value="admin">
        <button type="submit">Promote to Admin</button>
    </form>
</body>
</html>