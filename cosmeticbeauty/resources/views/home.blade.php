<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cosmetic Beauty</title>
 <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- CSS DESIGN -->
    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(
                135deg,
                #fff0f5,
                #fce1eb,
                #fff8f0
            );
            color: #805565;
            text-align: center;
            padding: 30px 15px;
        }

        /* MAIN HEADING */
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.2rem, 6vw, 4rem);
            color: #c56d91;
            margin-top: 150px;
            margin-bottom: 20px;
        }

        h1::before,
        h1::after {
            content: " ♡ ";
            color: #e8a0bb;
        }

        /* PARAGRAPH */
        p {
            display: inline-block;
            font-size: 15px;
            letter-spacing: 2px;
            color: #a47787;
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid #f4cfdd;
            border-radius: 30px;
            padding: 15px 25px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(197, 109, 145, 0.1);
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

    <h1>Welcome to Cosmetic Beauty</h1>
    <p>Where beauty meets its owner.</p>

        <nav class="navbar">
            <a href="{{ route('index') }}">HOME</a>
            <a href="{{ route('about') }}">ABOUT</a>
            <a href="{{ route('contact') }}">CONTACT</a>
            <a href="{{ route('products') }}">PRODUCTS</a>
        </nav>
    

</body>
</html>