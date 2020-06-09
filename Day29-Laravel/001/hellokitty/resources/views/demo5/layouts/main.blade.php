<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
        }

        header {
            height: 150px;
            background-color: green;
        }

        footer {
            height: 200px;
            background-color: olive;
            clear: both;
        }

        nav {
            background-color: blue;
        }

        nav ul li {
            display: inline-block;
            background-color: purple;
        }



        main #mainpage {
            float: left;
            width: 80%;
            background-color: #0C9A9A;
            height: 500px;
        }

        main aside {
            float: left;
            width: 18%;
            background-color: pink;
            height: 500px;
        }
    </style>
</head>
<body>

@include("demo5.partials.header")

@include("demo5.partials.navigation")
<main>
    <section id="mainpage">
        <h1>Khai báo vị trí để load sub view</h1>
        @yield("content")
    </section>
    @include("demo5.partials.sidebar")
</main>

@include("demo5.partials.footer")

</body>
</html>
