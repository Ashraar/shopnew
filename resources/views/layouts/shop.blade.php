<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Online Store</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .main {
            flex: 1;
        }

        .header {
            background: linear-gradient(90deg, #6B4F4F, #D9CBAE);
        }

        .header-logo {
            height: 60px;
            transition: transform 0.3s ease;
        }

        .header-logo:hover {
            transform: scale(1.1);
        }

        .nav-link {
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #FFD700; /* Gold color */
        }

        .footer {
            background: #4B3C2A; /* Dark brown */
        }

        .footer-link {
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #FFD700; /* Gold color */
        }

        .social-icons a {
            margin: 0 10px;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

<!-- Header -->
<header class="header shadow-lg">
    <div class="container mx-auto flex justify-between items-center py-4 px-8">
        <img src="images/WhatsApp Image 2024-09-28 at 3.47.38 PM.jpeg" alt="Logo" class="header-logo" />
        <nav>
            <ul class="flex space-x-6">
                <li>
                    <a href="/" class="nav-link text-white text-lg">Home</a>
                </li>
                <li>
                    <a href="/shop" class="nav-link text-white text-lg">Products</a>
                </li>
                <li>
                    <a href="/cart" class="nav-link text-white text-lg">Cart</a>
                </li>
                <li>
                    <a href="/checkout" class="nav-link text-white text-lg">Checkout</a>
                </li>

                <li>
                    <a href="{{ route('order.history') }}" class="nav-link text-white text-lg">My Orders</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Content -->
<div class="main">
    {{$slot}}
</div>

<!-- Footer -->
<footer class="footer text-white py-8">
    <div class="container mx-auto flex justify-between items-center px-8">
        <ul class="flex space-x-4">
            <li>
                <a href="#" class="footer-link">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="footer-link">Terms of Service</a>
            </li>
            <li>
                <a href="#" class="footer-link">Contact Us</a>
            </li>
        </ul>
        <div class="social-icons">
            <a href="#" class="footer-link">Facebook</a>
            <a href="#" class="footer-link">Twitter</a>
            <a href="#" class="footer-link">Instagram</a>
            <a href="#" class="footer-link">LinkedIn</a>
        </div>
        <p class="text-sm">&copy; 2024 Coffee Shop Online Store</p>
    </div>
</footer>

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

</body>

</html>
