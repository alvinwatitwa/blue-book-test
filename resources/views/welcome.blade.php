<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header>
        <div class="header-container">
            <div class="header-content">
                <div class="brand">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/00994e5c1d29b5e1f1a44e9d5c3263b0a0264cc08afd5a432b0e648689b8baa4?apiKey=36440029668448b78377e0e215175ca3&"
                        alt="TaskManager Logo" />
                    <div class="brand-name">TaskManager</div>
                </div>
                <nav class="nav-buttons">
                    <a class="nav-login" tabindex="0" role="button" href="{{url('login')}}">Login</a>
                    <a class="nav-start" tabindex="0" role="button" href="{{url('get-started')}}">Get Started</a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="main-content">
            <div class="empty-column"></div>
            <section class="intro-text">
                <div class="intro-content">
                    <h1 class="intro-heading">Simplify Your Workflow with TaskManager</h1>
                    <p class="intro-description">
                        Welcome to TaskManager, your ultimate solution for efficient task management. Designed
                        individuals, TaskManager
                        streamlines your projects, deadlines, and daily to-dos with intuitive features and seamless
                        integration. Boost
                        your productivity, stay organized, and achieve more with less effort. Try TaskManager today and
                        transform the way
                        you work!
                    </p>
                    <div class="cta-button" tabindex="0" role="button">Get Started</div>
                    <footer>©TaskManager 2024</footer>
                </div>
            </section>
            <div class="image-column">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/1a2e10c4bdc7a9aeb0a75ff88a456541f3abb1d6ce513f5186aaf6df6688d2a2?apiKey=36440029668448b78377e0e215175ca3&"
                    alt="TaskManager App Interface" class="main-image" />
            </div>
        </div>
    </main>
</body>

</html>
