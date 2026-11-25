
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Products - Cosmetic Beauty</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #fff0f5;
            font-family: 'Poppins', sans-serif;
            color: #805565;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #c56d91;
            font-family: 'Playfair Display', serif;
            margin: 40px 0 15px;
            font-size: 40px;
        }

        .description {
            text-align: center;
            margin-bottom: 35px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            max-width: 1100px;
            margin: auto;
        }

        .product-card {
            background: white;
            padding: 18px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(197, 109, 145, 0.15);
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-7px);
        }

        .product-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 15px;
        }

        .product-card h2 {
            color: #c56d91;
            font-size: 19px;
            margin: 15px 0 8px;
        }

        .product-card p {
            font-size: 13px;
            color: #a47787;
        }

        .price {
            display: block;
            color: #bd7895;
            font-weight: 600;
            margin: 12px;
        }

        .product-card button {
            background: #e9a9c2;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        .product-card button:hover {
            background: #c56d91;
        }
        
        /* NAVIGATION */
        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 18px;
            margin-top: 10px;
        }

        .navbar a {
            text-decoration: none;
            color: #bd7895;
            background: #fff7fa;

            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;

            padding: 13px 25px;
            border: 1px solid #f2c6d8;
            border-radius: 30px;

            box-shadow: 0 4px 10px rgba(197, 109, 145, 0.12);

            transition: all 0.3s ease;
        }

        /* HOVER EFFECT */
        .navbar a:hover {
            background: #e9a9c2;
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(197, 109, 145, 0.2);
        }

        /* MOBILE RESPONSIVE */
        @media (max-width: 600px) {
            h1 {
                margin-top: 100px;
            }

            p {
                font-size: 12px;
                letter-spacing: 1px;
            }

            .navbar {
                gap: 10px;
            }

            .navbar a {
                font-size: 11px;
                padding: 10px 17px;
            }
        }
    </style>
</head>

<body>

    <h1>Our Beauty Products ♡</h1>

    <p class="description">
        Discover your beauty favorites with Cosmetic Beauty.
    </p>

    <div class="products">

        <!-- PRODUCT 1 -->
        <div class="product-card">
            <img src="{{ asset('cosmeticbeauty/public/lipstick.png') }}" alt="Lipstick">
            <h2>Pink Lipstick</h2>
            <p>Beautiful shades for your lovely lips.</p>
            <span class="price">₱199</span>
            <button>View Product</button>
        </div>

        <!-- PRODUCT 2 -->
        <div class="product-card">
            <img src="{{ asset('cosmeticbeauty/public/foundation.png') }}" alt="Foundation">
            <h2>Liquid Foundation</h2>
            <p>For a smooth and flawless-looking finish.</p>
            <span class="price">₱299</span>
            <button>View Product</button>
        </div>

        <!-- PRODUCT 3 -->
        <div class="product-card">
            <img src="{{ asset('cosmeticbeauty/public/blsh.png') }}" alt="Blush">
            <h2>Pink Blush</h2>
            <p>Add a lovely touch of color to your cheeks.</p>
            <span class="price">₱149</span>
            <button>View Product</button>
        </div>

        <!-- PRODUCT 4 -->
        <div class="product-card">
            <img src="{{ asset('cosmeticbeauty/public/skincare.png') }}" alt="Skincare">
            <h2>Skincare Set</h2>
            <p>Your daily beauty care essentials.</p>
            <span class="price">₱399</span>
            <button>View Product</button>
        </div>

    </div>
        <nav class="navbar">
            <a href="{{ route('index') }}">HOME</a>
            <a href="{{ route('about') }}">ABOUT</a>
            <a href="{{ route('contact') }}">CONTACT</a>
            <a href="{{ route('products') }}">PRODUCTS</a>
        </nav>

</body>
</html>
