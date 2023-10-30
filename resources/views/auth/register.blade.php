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
                                <h2 class="fw-bold mb-5">Registration Info</h2>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">


                                        <div class="col-md-6 mb-4">


                                            <div class="form-outline">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <label class="form-label" for="form3Example1"><strong>First
                                                        name</strong></label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <div class="form-outline">
                                                    <input id="last_name" type="text"
                                                        class="form-control @error('last_name') is-invalid @enderror"
                                                        name="last_name" value="{{ old('last_name') }}" required
                                                        autocomplete="last_name" autofocus>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <label class="form-label" for="form3Example1"><strong>Last
                                                            name</strong></label>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <div class="form-outline">
                                            <div class="form-outline">
                                                <input id="email" type="text"
                                                    class="form-control @error('id_number') is-invalid @enderror"
                                                    name="email" value="{{ old('id_number') }}" required
                                                    autocomplete="id_number" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <label class="form-label" for="form3Example1"><strong>ID number
                                                    </strong></label>
                                            </div>

                                        </div>
                                        <label class="form-label" for="form3Example3"> </label>
                                    </div>

                                    <!-- Password input -->


                                    <div class="form-outline mb-4">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label class="form-label" for="form3Example4"><strong>Password</strong></label>
                                    </div>



                                    <div class="form-outline mb-4">


                                        <div class="">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <label class="form-label" for="form3Example4"><strong>Confirm Password
                                            </strong></label>
                                    </div>

                                    <!-- Submit button -->

                                    <button class="btn btn-dark btn-block mb-4" type="sumit"> Register</button>

                                    <br>
                                    <div>
                                        <p class="mb-0">You have an account <a href="{{ route('login') }}"
                                                class="text-secondary"><strong>Login </strong> </a>
                                        </p>
                                    </div>

                                </form>
                                <div class="text-center">
                                    <br>
                                    <div class="text-muted">Copyright © Designed by <a class="app-link"
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