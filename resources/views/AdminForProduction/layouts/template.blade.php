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
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">


    <div id="layoutSidenav_nav">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a style="display:none" class=" dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown"
                href="#" role="button" aria-expanded="false"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"> <img
                    style="height: 32px " src="assets/img/factor-logo-piso.png" alt="user profile"></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div style="display:none" class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                        aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                            class="fas fa-search"></i></button>

                </div>

            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <strong style="color: white; font-size:22px"> @php date_default_timezone_set('America/Chicago'); echo
                    date("
                    F
                    j,
                    Y,
                    g:i a"); @endphp </strong>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
            </li>
            </ul>
        </nav>
    </div>
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


                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-circle-check"></i></div>
                            Verification line
                        </a>

                        <div class="sb-sidenav-menu-heading"></div>

                        <a class="nav-link" href="{{ route('recipies') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-circle-check"></i></div>
                            Recipes
                        </a>

                        <div class="sb-sidenav-menu-heading"></div>

                        <a class="nav-link" href=" {{ route('reportsline') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Reports
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small"> Copyright &copy; Designed by <a class="app-link"
                            href="https://ypprogrammer.com/" target="_blank"> <img style="width: 100px;"
                                src="assets/img/YP_logo_blanco.png" alt="Yefferson Perez developer " srcset=""></a>
                    </div>

                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">



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
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>


</body>

</html>
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
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
    </script>
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
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>


</body>

</html>