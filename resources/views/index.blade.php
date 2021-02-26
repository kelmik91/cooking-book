<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <header class="header">

            <div class="logo">
                <h1 style="color: #00e0e0">Книга рецептов</h1>
            </div>

            <div class="nav">
                <a href="/welcome" class="link__nav">
                    Welcome page
                </a>
                <a href="/welcome" class="link__nav">
                    Welcome page
                </a>
            </div>
        </header>
            
        <main class="content">
            <h2>Product</h2>

            <div class="items">
                <a href="#">
                    <div class="item">
                        <b>item1</b>
                        <img src="https://via.placeholder.com/150" alt="item_img">
                        <p>description</p>
                    </div>
                </a>
                <a href="#">
                    <div class="item">
                        <b>item1</b>
                        <img src="https://via.placeholder.com/150" alt="item_img">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, consequatur? </p>
                    </div>
                </a>
                <a href="#">
                    <div class="item">
                        <b>item1</b>
                        <img src="https://via.placeholder.com/150" alt="item_img">
                        <p>description</p>
                    </div>
                </a>
                <a href="#">
                    <div class="item">
                        <b>item1</b>
                        <img src="https://via.placeholder.com/150" alt="item_img">
                        <p>description</p>
                    </div>
                </a>
            </div>

        </main>
            

        
    </body>
</html>
