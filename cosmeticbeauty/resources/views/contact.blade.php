
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Our Business - Cosmetic Beauty</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #fff0f5, #fce1eb, #fff8f0);
            font-family: 'Poppins', sans-serif;
            color: #805565;
            padding: 20px;
        }

        /* NAVIGATION */
        .navbar {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            background: #fff7fa;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(197, 109, 145, 0.12);
        }

        .navbar a {
            text-decoration: none;
            color: #bd7895;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;
            padding: 10px 18px;
            border-radius: 25px;
            transition: 0.3s;
        }

        .navbar a:hover {
            background: #e9a9c2;
            color: white;
        }

        /* MAIN CONTAINER */
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 35px;
            background: #fffafc;
            border: 2px solid #f5d1df;
            border-radius: 25px;
            box-shadow: 0 8px 25px rgba(197, 109, 145, 0.12);
        }

        h1 {
            font-family: 'Playfair Display', serif;
            text-align: center;
            font-size: 40px;
            color: #c56d91;
            margin-bottom: 15px;
        }

        .subtitle {
            text-align: center;
            margin-bottom: 30px;
            color: #a47787;
        }

        /* BUSINESS IMAGE */
        .business-image {
            width: 100%;
            max-height: 350px;
            object-fit: cover;
            border-radius: 20px;
            margin-bottom: 30px;
            border: 3px solid #f4cfdd;
        }

        /* INFORMATION CARDS */
        .info-card {
            background: #fff0f5;
            border: 1px solid #f4cfdd;
            border-radius: 18px;
            padding: 22px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .info-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 5px 15px rgba(197, 109, 145, 0.12);
        }

        h2 {
            color: #c56d91;
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            margin-bottom: 12px;
        }

        .info-card p {
            font-size: 14px;
            line-height: 1.9;
            color: #805565;
            text-align: justify;
        }

        .info-card ul {
            padding-left: 25px;
            font-size: 14px;
            line-height: 2;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #bd7895;
            font-size: 12px;
        }

        /* MOBILE RESPONSIVE */
        @media (max-width: 600px) {
            .navbar {
                gap: 5px;
                padding: 12px;
            }

            .navbar a {
                font-size: 10px;
                padding: 8px;
            }

            .container {
                padding: 20px;
            }

            h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <nav class="navbar">
        <a href="{{ route('index') }}">HOME</a>
        <a href="{{ route('about') }}">ABOUT</a>
        <a href="{{ route('contact') }}">CONTACT</a>
        <a href="{{ route('products') }}">PRODUCTS</a>
    </nav>

    <div class="container">

        <h1>Our Business ♡</h1>

        <p class="subtitle">
            Where beauty meets its owner.
        </p>

        <!-- BUSINESS IMAGE -->
        <img
            src="{{ asset('images/cosmetic-beauty.jpg') }}"
            alt="Cosmetic Beauty Products"
            class="business-image"
        >

        <!-- BUSINESS NAME -->
        <div class="info-card">
            <h2>♡ Business Name</h2>
            <p>
                Cosmetic Beauty
            </p>
        </div>

        <!-- BACKGROUND -->
        <div class="info-card">
            <h2>♡ Company Background</h2>
            <p>
                Cosmetic Beauty is a beauty-focused business that
                aims to provide cosmetic products for individuals
                who love makeup and skincare. Our business was
                created to inspire confidence, self-expression,
                and self-care. We believe that everyone has their
                own unique beauty and deserves to feel confident
                and beautiful every day.
            </p>
        </div>

        <!-- VISION -->
        <div class="info-card">
            <h2>♡ Vision Statement</h2>
            <p>
                To become a trusted and recognized beauty business
                that inspires people to embrace their natural beauty,
                build confidence, and express themselves through
                quality cosmetic products.
            </p>
        </div>

        <!-- MISSION -->
        <div class="info-card">
            <h2>♡ Mission Statement</h2>
            <p>
                Our mission is to offer beauty products that help
                customers feel confident, beautiful, and comfortable
                in their own skin. We aim to provide a welcoming
                shopping experience while encouraging self-love
                and personal care.
            </p>
        </div>

        <!-- BUSINESS GOALS -->
        <div class="info-card">
            <h2>♡ Business Goals and Objectives</h2>
            <ul>
                <li>Provide quality and affordable cosmetic products.</li>
                <li>Build trust and good relationships with customers.</li>
                <li>Promote confidence and self-expression.</li>
                <li>Expand our product selection to meet customer needs.</li>
                <li>Grow Cosmetic Beauty into a successful beauty business.</li>
            </ul>
        </div>

    </div>

    <footer>
        ♡ Cosmetic Beauty | Where beauty meets its owner ♡
    </footer>

</body>
</html>
