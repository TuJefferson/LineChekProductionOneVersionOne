<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="images/png" sizes="16x16" href="{{ asset('assets/img/logo-factor.jpg') }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Line Runing Production One</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <head>
        <!-- Otros elementos del encabezado -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" onClick="history.back()"> <img style="height: 32px
    " src="{{ asset('assets/img/factor-logo-piso.png') }}"> </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <strong style="color: white; "> @php date_default_timezone_set('America/Chicago'); echo
                    date("
                    F
                    j,
                    Y,
                    g:i a"); @endphp </strong>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div style="display: none;" class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="{{ route('verificationline') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-circle-check"></i></div>
                            Verification line
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="{{ route('recipies') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-kitchen-set"></i></div>
                            Recipes
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="{{ route('reportsline') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Reports
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Add Ingredient recipe </h1>
                    <ol class="breadcrumb mb-4">
                    </ol>

                    <input type="hidden" class="form-control p-3 mb-2 bg-light text-dark" id="id"
                        value="{{ $recipe->id }} " readonly>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-7">
                                    <label class="form-label"> <strong> Recipe name
                                        </strong> </label>
                                    <input type="text" class="form-control p-3 mb-2 bg-light text-dark"
                                        value="{{ $recipe->recipe_name }} " readonly>
                                </div>
                                <div class=" col-sm">
                                    <label class="form-label"> <strong> Code
                                            (SKU)
                                        </strong> </label>
                                    <input type="text" class="form-control p-3 mb-2 bg-light text-dark"
                                        value=" {{ $recipe->recipe_code }} " readonly>
                                </div>
                            </div>
                            <div class=" row g-3">
                                <div class="col-sm-7">
                                    <label class="form-label"> <strong> Week
                                        </strong> </label>
                                    <input type="text" class="form-control p-3 mb-2 bg-light text-dark"
                                        value="{{ $recipe->week }} " readonly>
                                </div>
                                <div class="col-sm">
                                    <label class="form-label"> <strong> Create at

                                        </strong> </label>
                                    <input type="text" class="form-control p-3 mb-2 bg-light text-dark"
                                        value=" {{ $recipe->updated_at }} " readonly>
                                </div>
                            </div>

                            <div class=" row g-3">
                                <h3>Ingredients for the recipe:</h3>
                                @forelse ($ingredientsRecipe as $key => $ingredient)
                                <div class="col-sm-7">
                                    <label class="form-label"> <strong> Item
                                        </strong> </label>
                                    <input type="text" class="form-control p-3 mb-2 bg-light text-dark"
                                        value="{{$key+1}} " readonly>
                                </div>
                                <div class="col-sm">
                                    <label class="form-label"> <strong> Ingredient

                                        </strong> </label>
                                    <input type="text" class="form-control p-3 mb-2 bg-light text-dark"
                                        value=" {{ $ingredient->ingredient_recipe_name }} " readonly>
                                </div>
                                @empty
                                <div class="col-sm">

                                    <input type="text" class="form-control p-3 mb-2 bg-light text-dark"
                                        value=" No ingredients assigned to this recipe yet " readonly>
                                </div>
                                @endforelse
                            </div>






                            <form id="myForm">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Ingredient name</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td id="recordsContainer">
                                        </td>

                                        <td>
                                            <button id="addRecordBtn" type="button" class="btn btn-secondary">Add
                                                more</button>
                                        </td>
                                    </tr>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="nav-link" href="{{ route('ingredientsAndRecipes') }}"> <button
                                            class=" btn btn-dark" type="button">Back</button> </a>
                                    <button class="btn btn-dark" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Designed by <a class="app-link"
                                href="https://ypprogrammer.com/" target="_blank"> <img style="width: 100px;"
                                    src="{{ asset('assets/img/YP_logo_negro.png') }}" alt="Yefferson Perez developer "
                                    srcset=""></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {

        // nuevo input
        var recordCount = 0; // Contador de registros
        // Función para agregar un registro
        function addRecord() {
            var recordHtml = '<div class="record">' + '<br>' +
                '<input type="text" class="form-control" name="ingredient_recipe_name[]" id="ingredient_recipe_name[]" placeholder="Insert ingredient name ' +
                (recordCount + 1) + '">' +
                '<br>' + '<button class="deleteRecordBtn btn btn-danger">Delete </button>' +
                '</div>';
            $('#recordsContainer').append(recordHtml);
            recordCount++;
        }
        // Manejador de evento para el botón de agregar registro
        $('#addRecordBtn').click(function() {
            addRecord();
        });

        $('#recordsContainer').on('click', '.deleteRecordBtn', function() {
            $(this).closest('.record').remove(); // Eliminar el registro más cercano al botón
        });
    });
    // nuevo input

    // envio formulario
    $('#myForm').on('click', 'button[type="submit"]', function(event) {

        event.preventDefault(); // Evitar el envío del formulario por defecto

        // Obtener los valores de los registros
        var records = $('input[name="ingredient_recipe_name[]"]').map(function() {
            return $(this).val();
        }).get();

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        var id = $('#id').val();

        // Realizar la solicitud AJAX al controlador
        $.post('{{ route("saveIngredient") }}', {
                id: id,
                _token: csrfToken,
                ingredient_recipe_name: records
            })
            .done(function(response) {
                // Manejar la respuesta del controlador si es necesario
                console.log(response);
                window.location.href = '{{ route("ingredientsAndRecipes") }}';
            })
            .fail(function(error) {
                // Manejar el error si ocurre
                console.log(error);
            });
    });
    // envio formulario
    </script>


</body>

</html>