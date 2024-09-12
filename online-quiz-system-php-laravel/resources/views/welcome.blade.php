<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NAHS Learning Quiz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                line-height: 1.6;
                color: #333;
                background-color: #f4f4f4;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }

            .header {
                background-color: #333;
                color: #fff;
                padding: 1rem;
                text-align: center;
            }

            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 2rem 0;
            }

            .card {
                background-color: #fff;
                padding: 1.5rem;
                margin-bottom: 1rem;
                border-radius: 4px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }

            .card h2 {
                margin-top: 0;
            }

            .card p {
                margin-bottom: 1rem;
            }

            .card a {
                color: #3498db;
                text-decoration: none;
            }

            .card a:hover {
                text-decoration: underline;
            }

            .footer {
                background-color: #333;
                color: #fff;
                padding: 1rem;
                text-align: center;
                margin-top: 2rem;
            }

            @media (min-width: 768px) {
                .content {
                    flex-direction: row;
                    justify-content: space-between;
                }

                .card {
                    flex: 1;
                    margin: 0 1rem;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>NAHS Learning Quiz</h1>
            </div>

            <div class="content">
                <div class="card">
                    <h2>Documentation</h2>
                    <p>Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.</p>
                    <a href="https://laravel.com/docs">Read the Docs</a>
                </div>

                <div class="card">
                    <h2>Laracasts</h2>
                    <p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.</p>
                    <a href="https://laracasts.com">Visit Laracasts</a>
                </div>

                <div class="card">
                    <h2>Laravel News</h2>
                    <p>Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.</p>
                    <a href="https://laravel-news.com/">Read Laravel News</a>
                </div>
            </div>

            <div class="footer">
                <p>&copy; {{ date('Y') }} NAHS Learning Quiz. All rights reserved.</p>
                <p>Powered by Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
            </div>
        </div>
    </body>
</html>