<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mini Tokopedia')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Mini Tokopedia</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('categories') }}">Categories</a></li>
                    <li><a href="{{ route('products') }}">Products</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2024 Mini Tokopedia</p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
