<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby and Kid Products</title>
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
        .product-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .product-item {
            background-color: #fff;
            width: 200px;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .product-item:hover {
            transform: translateY(-5px);
        }
        .product-item h2 {
            color: #333;
            margin-top: 0;
        }
        .product-item p {
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
    <h1>Baby and Kid Products</h1>
    <main>
        <div class="product-container">
            <div class="product-item">
                <h2>Baby Diapers</h2>
                <p>Soft and absorbent diapers for your baby's comfort.</p>
                <p>Price: $24.99</p>
            </div>
            <div class="product-item">
                <h2>Children's Books</h2>
                <p>Colorful and educational books to stimulate your child's imagination.</p>
                <p>Price: $12.99</p>
            </div>
            <div class="product-item">
                <h2>Kids' Toys</h2>
                <p>Fun and safe toys for endless hours of playtime.</p>
                <p>Price: $19.99</p>
            </div>
            <div class="product-item">
                <h2>Baby Food</h2>
                <p>Nutritious and delicious baby food options for your little one.</p>
                <p>Price: $5.99</p>
            </div>
            <div class="product-item">
                <h2>Kids' Clothing</h2>
                <p>Adorable and comfortable clothing for your growing child.</p>
                <p>Price: $14.99</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Rhanilham. All rights reserved.</p>
    </footer>
</body>
</html>
