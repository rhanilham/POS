<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
    <style>
        body {
            background-color: #f2f2f2;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 0;
        }
        main {
            padding: 20px;
            text-align: center;
            margin-bottom: 50px; /* Atur jarak antara tabel dan footer */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Transaction Page</h1>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Your transaction rows go here -->
                <tr>
                    <td>123456</td>
                    <td>Delicious Burger</td>
                    <td>2</td>
                    <td>$20.00</td>
                    <td>2024-02-28</td>
                </tr>
                <tr>
                    <td>789012</td>
                    <td>Refreshing Lemonade</td>
                    <td>1</td>
                    <td>$15.99</td>
                    <td>2024-02-28</td>
                </tr>
                <tr>
                    <td>345678</td>
                    <td>Homemade Cookies</td>
                    <td>3</td>
                    <td>$30.00</td>
                    <td>2024-02-28</td>
                </tr>
                <tr>
                    <td>901234</td>
                    <td>Spicy Chicken Wings</td>
                    <td>1</td>
                    <td>$10.50</td>
                    <td>2024-02-28</td>
                </tr>
                <!-- Add more transaction rows as needed -->
                <tr>
                    <td>567890</td>
                    <td>Iced Caramel Macchiato</td>
                    <td>2</td>
                    <td>$25.00</td>
                    <td>2024-02-28</td>
                </tr>
                <tr>
                    <td>234567</td>
                    <td>All-Purpose Cleaner</td>
                    <td>1</td>
                    <td>$5.99</td>
                    <td>2024-02-28</td>
                </tr>
                <tr>
                    <td>890123</td>
                    <td>Laundry Detergent</td>
                    <td>4</td>
                    <td>$40.00</td>
                    <td>2024-02-28</td>
                </tr>
                <tr>
                    <td>456789</td>
                    <td>Hand Soap</td>
                    <td>1</td>
                    <td>$12.99</td>
                    <td>2024-02-28</td>
                </tr>
                <tr>
                    <td>012345</td>
                    <td>Air Freshener</td>
                    <td>2</td>
                    <td>$18.00</td>
                    <td>2024-02-28</td>
                </tr>
                <tr>
                    <td>678901</td>
                    <td>Dish Soap</td>
                    <td>3</td>
                    <td>$35.00</td>
                    <td>2024-02-28</td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2024 Rhanilham. All rights reserved.</p>
    </footer>
</body>
</html>
