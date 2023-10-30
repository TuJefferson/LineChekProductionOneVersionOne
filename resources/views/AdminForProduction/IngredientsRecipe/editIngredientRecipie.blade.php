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
    <link href=" {{ asset('assets/css/styles.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" onClick="history.back()"> <img style="height: 32px
        " src="{{ asset('assets/img/factor-logo-piso.png') }}">
        </a>
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
                    <h1 class="mt-4">Info recipe # {{$recipe-> recipe_name }}
                    </h1>
                    <ol class="breadcrumb mb-4">

                    </ol>
                    <div class="card mb-2">
                        <div class="card-body">

                            <form class="row g-3" method="POST"
                                action="{{ route('updateRecipie', ['id' => $recipe->id]) }}">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-sm-12">
                                        <label for="validationDefault01" class="form-label"> <strong> Recipe name
                                            </strong> </label>
                                        <input type="text" name='recipe_name' placeholder="Insert recipe name"
                                            class="form-control" id="validationDefault01"
                                            value="{{$recipe->recipe_name}}" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="validationDefault02" class="form-label"> <strong> Code
                                                (SKU)
                                            </strong> </label>
                                        <input type="text" name='recipe_code' class="form-control"
                                            id="validationDefault02" value="{{$recipe->recipe_code}}"
                                            placeholder="Insert recipe SKU " required>
                                    </div>


                                    <div class="col-sm-12">
                                        <label for="validationDefault02" class="form-label"> <strong> Week

                                            </strong> </label>
                                        <input type="text" name='week' class="form-control" id="validationDefault02"
                                            value="{{$recipe->week}}" placeholder="Insert recipe week " required>
                                    </div>

                                    <div class="col-sm">
                                        <label for="validationDefault02" class="form-label"> <strong> Create at
                                            </strong>
                                        </label>
                                        <?php $fcha = date("Y-m-d");?>
                                        <input type="date" class="form-control" value="<?php echo $fcha;?>"
                                            placeholder="Fecha del despacho" name="dispach_date[]" required
                                            title="Ingresa una fecha valida">
                                    </div>

                                </div>

                                <hr>




                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button onClick="history.back()" class=" btn btn-dark" type="submit">Back</button>
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
                        <div class="text-muted">Copyright 2023&copy; Designed by <a class="app-link"
                                href="https://ypprogrammer.com/" target="_blank"> <img style="width: 100px;"
                                    src="{{ asset('assets/img/YP_logo_negro.png') }}" alt=" Yefferson Perez
                                    developer " srcset=""></a>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>