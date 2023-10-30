<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="images/png" sizes="16x16" href="{{ asset('assets/img/logo-factor.jpg') }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Line Runing Production One (Reports verification line)</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ route('dashboard') }}"> <img style="height: 32px
        " src="assets/img/factor-logo-piso.png"> </a>
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
                    <li class="dropdown-item"> User: <strong> {{ auth()->user()->name }}
                            {{ auth()->user()->last_name }} </strong>
                    </li>
                    <li class="dropdown-item"> User ID: <strong> {{ auth()->user()->email }}
                        </strong>
                    </li>
                    <li>
                    <li class="dropdown-item"> Status: <strong> ONLINE </strong>
                        <div class="spinner-grow spinner-grow-sm" role="status">
                            <span class="sr-only">...</span>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img
                                src="{{ asset('assets/img/logo-factor.jpg') }}" style="width: 24px;" alt="Fator"
                                srcset="">
                        </a>

                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
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

                        <a class="nav-link" href="{{ route('ingredientsAndRecipes') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-carrot"></i></div>
                            Subrecipes
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-lines"></i></div>
                            Reports
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('reportsRecipies') }} ">Reports recipes</a>
                                <a class="nav-link" href="layout-{{ route('reportsRecipiesAndIngredients') }}">Reports
                                    subrecipes </a>
                                <a class="nav-link" href="{{ route('reportsVerificationLIne') }}">Reports line check
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small"> Copyright &copy; Designed by <a class="app-link"
                            href="https://ypprogrammer.com/" target="_blank"> <img style="width: 160px;"
                                src="assets/img/YP_logo_blanco.png" alt="Yefferson Perez developer " srcset=""></a>
                    </div>

                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Reports verification line </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">All data processed in the verification line module</li>
                    </ol>


                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Recipe module data
                        </div>
                        <div class="card-body">

                            <table id="datatable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>QA Name</th>
                                        <th>QA Last Name </th>
                                        <th>Date</th>
                                        <th>Shift</th>
                                        <th>Line number </th>
                                        <th>Ricipe code SQU </th>
                                        <th>Ricipe name</th>
                                        <th>Sub recipe </th>
                                        <th>Ingredient availability </th>
                                        <th>Temperature</th>
                                        <th>Weight</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Item</th>
                                        <th>QA Name</th>
                                        <th>QA Last Name </th>
                                        <th>Date</th>
                                        <th>Shift</th>
                                        <th>Line number </th>
                                        <th>Ricipe code SQU </th>
                                        <th>Ricipe name</th>
                                        <th>Sub recipe </th>
                                        <th>Ingredient availability </th>
                                        <th>Temperature</th>
                                        <th>Weight</th>


                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($lineCheck as $key => $check)

                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>{{ $check->user->name }}</td>
                                        <td>{{ $check->user->last_name }}</td>
                                        <td>{{ $check->date }}</td>
                                        <td> @switch($check->available_ingredient)
                                            @case('1')
                                            <span class="status">First Shift</span>
                                            @break

                                            @case('2')
                                            <span class="status">Second Shift</span>
                                            @break

                                            @case('3')
                                            <span class="status"> Third Shift</span>
                                            @break

                                            @default
                                            <span class="status"></span>
                                            @endswitch
                                        </td>
                                        <td>{{ $check->line_number }}</td>
                                        <td>{{ $check->recipe->recipe_code }}</td>
                                        <td>{{ $check->recipe->recipe_name }}</td>
                                        <td>{{ $check->ingredientsRecipe->ingredient_recipe_name }}</td>

                                        @if($check->available_ingredient == '1')
                                        <td>Available</td>
                                        @else
                                        <td>No available</td>
                                        @endif
                                        <td>{{ $check->temperature }}</td>
                                        <td>{{ $check->weight }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="assets/js/datatables-simple-demo.js"></script>
    <script type="text/javascript" src="    https://code.jquery.com/jquery-3.7.0.js
    "></script>
    <script type="text/javascript" src="    https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js
    "></script>
    <script type="text/javascript" src="    https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js
    "></script>
    <script type="text/javascript" src="    https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js
    "></script>
    <script type="text/javascript" src="    https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
    "></script>
    <script type="text/javascript" src="    https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
    "></script>
    <script type="text/javascript" src="    https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js
    "></script>
    <script type="text/javascript" src="    https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js
    "></script>





    <script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>

    @include('sweetalert::alert')

</body>

</html>