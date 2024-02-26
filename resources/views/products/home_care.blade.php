<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Care Products</title>
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
    <h1>Home Care Products</h1>
    <main>
        <div class="product-container">
            <div class="product-item">
                <h2>All-Purpose Cleaner</h2>
                <p>A powerful cleaner that tackles dirt and grime on multiple surfaces.</p>
                <p>Price: $4.99</p>
            </div>
            <div class="product-item">
                <h2>Laundry Detergent</h2>
                <p>An effective detergent that removes stains and leaves clothes fresh and clean.</p>
                <p>Price: $7.49</p>
            </div>
            <div class="product-item">
                <h2>Hand Soap</h2>
                <p>Gentle hand soap with moisturizing properties to keep hands soft and clean.</p>
                <p>Price: $2.99</p>
            </div>
            <div class="product-item">
                <h2>Air Freshener</h2>
                <p>Eliminates odors and leaves a fresh scent in the air for a pleasant atmosphere.</p>
                <p>Price: $3.99</p>
            </div>
            <div class="product-item">
                <h2>Dish Soap</h2>
                <p>Effective dish soap that cuts through grease and leaves dishes sparkling clean.</p>
                <p>Price: $1.99</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Rhanilham. All rights reserved.</p>
    </footer>
</body>
</html>
