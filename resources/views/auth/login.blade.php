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

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>


        <section class="text-center text-lg-start">
            <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
            </style>

            <!-- Jumbotron -->
            <div class="container py-4">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                            <div class="card-body p-5 shadow-5 text-center">
                                <h2 class="fw-bold mb-5">Log in </h2>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">

                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end"><strong>{{ __('ID number ') }}</strong></label>

                                        <div class="col-md-6">
                                            <input id="email" type="text"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">
                                            <strong>{{ __('Password') }}</strong></label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" class="btn btn-dark">
                                            {{ __('Login') }}
                                        </button>

                                    </div>
                                    <br>
                                    <div>
                                        <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                                                class="text-secondary"><strong>Register</strong> </a>
                                        </p>
                                    </div>

                                </form>
                                <br>
                                <div class="text-center">

                                    <div class="text-muted">Copyright 2023© Designed by <a class="app-link"
                                            href="https://ypprogrammer.com/" target="_blank"> <img style="width: 100px;"
                                                src="assets/img/YP_logo_negro.png" alt="Yefferson Perez developer "
                                                srcset=""></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img src="assets/img/logo-factor.jpg" class="w-100 rounded-4 shadow-4" alt="" />
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </section>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>