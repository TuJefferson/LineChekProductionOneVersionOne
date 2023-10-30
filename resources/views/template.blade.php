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

@yield('css')

<body class="sb-nav-fixed">

    @include('AdminForProduction.layouts.header')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('AdminForProduction.layouts.sildelvar')
        </div>
        <div id="layoutSidenav_content">
            <main>


                @yield("content")

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
    @yield('js')
</body>

</html>