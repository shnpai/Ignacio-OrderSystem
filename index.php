<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order System</title>
</head>
<body>
    <h1>Menu</h1>
    <table border="1">
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>
<br><br>
    <form action="handleForm.php" method="post">
        <label for="order">Select an Order:</label>
        <select name="order" id="order">
            <option value="50">Burger</option>
            <option value="75">Fries</option>
            <option value="150">Steak</option>
        </select>
        <br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="0">
        <br><br>
        <label for="cash">Cash:</label>
        <input type="number" name="cash" id="cash" min="0">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
