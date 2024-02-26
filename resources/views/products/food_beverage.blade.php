<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food and Beverage Products</title>
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
        }
        .menu-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .menu-item {
            background-color: #fff;
            width: 200px;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .menu-item:hover {
            transform: translateY(-5px);
        }
        .menu-item h2 {
            color: #333;
            margin-top: 0;
        }
        .menu-item p {
            color: #666;
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
    <h1>Food and Beverage Products</h1>
    <main>
        <div class="menu-container">
            <div class="menu-item">
                <h2>Delicious Burger</h2>
                <p>A mouthwatering burger with juicy patty, fresh lettuce, tomatoes, and special sauce.</p>
                <p>Price: $6.99</p>
            </div>
            <div class="menu-item">
                <h2>Refreshing Lemonade</h2>
                <p>A cool and tangy lemonade made with freshly squeezed lemons and a hint of mint.</p>
                <p>Price: $2.99</p>
            </div>
            <div class="menu-item">
                <h2>Homemade Cookies</h2>
                <p>Soft and chewy cookies baked with love, filled with chocolate chips and nuts.</p>
                <p>Price: $4.49</p>
            </div>
            <div class="menu-item">
                <h2>Spicy Chicken Wings</h2>
                <p>Crispy chicken wings marinated in spicy sauce, served with ranch dressing.</p>
                <p>Price: $8.99</p>
            </div>
            <div class="menu-item">
                <h2>Iced Caramel Macchiato</h2>
                <p>A delightful blend of espresso, milk, and caramel syrup, topped with whipped cream.</p>
                <p>Price: $3.49</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Rhanilham. All rights reserved.</p>
    </footer>
</body>
</html>
