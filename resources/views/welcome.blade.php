<!doctype html>
<html lang="en">

<head>
    <title>Admin Line Check Production One</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="images/png" sizes="16x16" href="{{ asset('assets/img/logo-factor.jpg') }}">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="d-flex h-100 text-center text-bg-dark">
    <header>
        <!-- place navbar here -->
    </header>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <br><br><br><br><br><br><br>
        <main class="px-3">
            <style>
            body {
                font-family: sans-serif;

            }

            .contenedor {
                margin: auto;
                display: table;
            }

            h1 {
                position: relative;
                float: left;
                background: #212529;
                color: #FFFFFF;
                font-size: 6.5em;
            }

            h1 span {
                position: absolute;
                right: 0;
                width: 0;
                background: #212529;
                border-left: 1px solid #000;
                animation: escribir 5s steps(30) infinite alternate;
            }

            @keyframes escribir {
                from {
                    width: 100%
                }

                to {
                    width: 0
                }
            }
            </style>
            <div class="contenedor">
                <h1>F&nbsp;A&nbsp;C&nbsp;T&nbsp;O&nbsp;R&nbsp;__<span>&#160;</span></h1>
            </div>
            <br>
            <p class="lead">
            <h2>Control system for production one</h2>
            </p>
            <p class="lead">
            <div class="d-grid gap-2 d-md-block">
                <a href="{{ route('login') }} "> <button class="btn btn-lg btn-light fw-bold border-white bg-white"
                        type="button">Login </button>
                </a>
                &nbsp;
                <a href="{{ route('register') }} "> <button class="btn btn-lg btn-light fw-bold border-white bg-white"
                        type="button">Register </button>
                </a>



            </div>

            </p>
        </main>
        <br><br><br><br><br><br>
        <footer class="mt-auto text-white-50">
            <p> Copyright &copy; Designed by 2023 <a class="app-link" href="https://ypprogrammer.com/" target="_blank">
                    <img style="width: 200px;" src="assets/img/YP_logo_blanco.png" alt="Yefferson Perez developer "
                        srcset=""></a></p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>