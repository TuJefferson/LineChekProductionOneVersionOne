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


    <style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #f6d365;



        /* Chrome 10-25, Safari 5.1-6 */


        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right bottom, #9E9E9E, rgb(29 30 30));
    }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>


        <section class="vh-100" style="background-color: #f4f5f7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-white"
                                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="{{ asset('assets/img/factor-logo-piso.png') }}" alt="Avatar"
                                        class="img-fluid my-5" style="width: 175px;" />

                                    <i class="far fa-edit mb-5"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6>Recipe information</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">

                                                <h6>Name</h6>
                                                <p class="text-muted">{{ $recipe->recipe_name }}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Code (SKU) </h6>
                                                <p class="text-muted">{{ $recipe->recipe_code }}</p>
                                            </div>
                                        </div>

                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Week</h6>
                                                <p class="text-muted">{{ $recipe->week }}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Create at </h6>
                                                <p class="text-muted">{{ $recipe->created_at }}</p>
                                            </div>
                                        </div>
                                        <hr class="mt-0 mb-4">

                                        <div class="d-flex justify-content-start">


                                        </div>
                                    </div>
                                    <div class="card-body p-4">
                                        <h6>Ingredients</h6>
                                        <hr class="mt-0 mb-4">


                                        <div class="row pt-1">
                                            @forelse ($ingredientsRecipe as $key => $ingredient)
                                            <div class="col-6 mb-3">

                                                <h6>Item</h6>
                                                <p class="text-muted">{{$key+1}}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>ingredient name </h6>
                                                <p class="text-muted">{{ $ingredient->ingredient_recipe_name }}</p>
                                            </div>
                                            @empty

                                            <div class="card-body">
                                                <h5 class="card-title">No ingredients assigned to this recipe yet</h5>
                                                <p class="card-text"></p>
                                                <a href=" {{ route('addingredient',$recipe->id )}}"><button
                                                        type="button" class="btn btn-dark">
                                                        <i class="fa-solid fa-plus"></i> Press her for add
                                                        ingredients</button>
                                                </a>

                                            </div>
                                            <h4></h4>


                                            @endforelse
                                        </div>

                                        <hr class="mt-0 mb-4">


                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button onClick="history.back()" class=" btn btn-dark"
                                                type="submit">Back</button>
                                        </div>


                                        <div class="d-flex justify-content-start">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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