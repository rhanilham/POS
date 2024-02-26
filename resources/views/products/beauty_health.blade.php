<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty and Health Products</title>
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
    <h1>Beauty and Health Products</h1>
    <main>
        <div class="product-container">
            <div class="product-item">
                <h2>Moisturizing Cream</h2>
                <p>An ultra-hydrating cream that keeps your skin soft and supple all day long.</p>
                <p>Price: $12.99</p>
            </div>
            <div class="product-item">
                <h2>Refreshing Facial Cleanser</h2>
                <p>A gentle cleanser that removes dirt and impurities without stripping the skin's natural moisture.</p>
                <p>Price: $9.99</p>
            </div>
            <div class="product-item">
                <h2>Anti-Aging Serum</h2>
                <p>A powerful serum that reduces the appearance of fine lines and wrinkles, leaving your skin youthful and radiant.</p>
                <p>Price: $24.99</p>
            </div>
            <div class="product-item">
                <h2>Nourishing Hair Mask</h2>
                <p>An intensive treatment that deeply nourishes and revitalizes dry and damaged hair.</p>
                <p>Price: $15.99</p>
            </div>
            <div class="product-item">
                <h2>Essential Oil Blend</h2>
                <p>A calming blend of essential oils that promotes relaxation and soothes the senses.</p>
                <p>Price: $18.99</p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Rhanilham. All rights reserved.</p>
    </footer>
</body>
</html>
