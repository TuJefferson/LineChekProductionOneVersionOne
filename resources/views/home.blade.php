<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="images/png" sizes="16x16" href="{{ asset('assets/img/logo-factor.jpg') }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Line Check Production One</title>
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

                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
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

                        <a class="nav-link" href="{{ route('reportsline') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Reports
                        </a>
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
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Main data</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card  mb-4">
                                <div class="card-body">Records processed by the first shift</div>
                                <div class="card-footer d-flex  justify-content-md-end">
                                    <div class="d-grid gap-2 d-md-flex ">
                                        <button class="btn btn-dark" type="button">2</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card  mb-4">
                                <div class="card-body">Records processed by the second shift</div>
                                <div class="card-footer d-flex  justify-content-md-end">
                                    <div class="d-grid gap-2 d-md-flex ">
                                        <button class="btn btn-dark" type="button">2</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card  mb-4">
                                <div class="card-body">Records processed by the third shift
                                </div>
                                <div class="card-footer d-flex  justify-content-md-end">
                                    <div class="d-grid gap-2 d-md-flex ">
                                        <button class="btn btn-dark" type="button">5</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card  mb-4">
                                <div class="card-body">Records processed successfully</div>
                                <div class="card-footer d-flex  justify-content-md-end">
                                    <div class="d-grid gap-2 d-md-flex ">
                                        <button class="btn btn-dark" type="button">3</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Area Chart Example</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">

                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Chart 1
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Chart 2
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Activities</li>
                    </ol>

                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card  mb-4">
                                <div class="card-body">Process line verification</div>
                                <div class="card-footer d-flex  justify-content-md-end">
                                    <div class="d-grid gap-2 d-md-flex ">
                                        <p class="card-text"> access to the module to filter the recipe and initiate
                                            the.
                                            validation of the line</p>
                                        <a href="{{ route('verificationline') }} "><button type="button"
                                                class="btn btn-dark">Run Test</button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card  mb-4">
                                <div class="card-body">Add new recipe</div>
                                <div class="card-footer d-flex  justify-content-md-end">
                                    <div class="d-grid gap-2 d-md-flex ">
                                        <p class="card-text">Access to the module that allows you to add, edit and
                                            delete
                                            recipes.</p>
                                        <a href="{{ route('recipies') }} "><button type="button"
                                                class="btn btn-dark">Add new </button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>





                <br>

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
</body>

</html>