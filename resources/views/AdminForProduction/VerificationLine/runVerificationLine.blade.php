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
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" onClick="history.back()"> <img style="height: 32px
        " src="{{ asset('assets/img/factor-logo-piso.png')}}"> </a>
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
                    <h1 class="mt-4">Verification Line </h1>

                    <ol class="breadcrumb mb-4">

                    </ol>
                    <div class="card mb-2">
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ route('saveVerification') }}">
                                @csrf
                                <div class="col-md-3">
                                    <label for="validationDefault01" class="form-label"> <strong> QA
                                            name </strong> </label>
                                    <input type="text" class="form-control" id="validationDefault01"
                                        value="{{ auth()->user()->name }}" readonly>
                                </div>

                                <div class="col-md-3">
                                    <label for="validationDefault02" class="form-label"> <strong> Last name
                                        </strong> </label>
                                    <input type="text" class="form-control" id="validationDefault02"
                                        value="{{ auth()->user()->last_name }}" readonly>
                                </div>

                                <div class="col-md-2">
                                    <label for="validationDefault04" class="form-label"> <strong> Shift
                                        </strong> </label>
                                    <select class="form-select" id="validationDefault04" name="shift" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="1"> First Shift</option>
                                        <option value="2"> Second Shift</option>
                                        <option value="3"> Third Shift</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label for="validationDefault02" class="form-label"> <strong> Line number
                                        </strong> </label>
                                    <input type="text" name="line_number" class="form-control" id="validationDefault02"
                                        value="" placeholder="Line" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="validationDefault02" class="form-label"> <strong> Date </strong>
                                    </label>
                                    <?php $fcha = date("Y-m-d");?>
                                    <input type="date" class="form-control" value="<?php echo $fcha;?>"
                                        placeholder="Fecha del despacho" name="date" required
                                        title="Ingresa una fecha valida">
                                </div>


                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Item</th>
                                                <th>Code (SKU)</th>
                                                <th>Recipe name</th>
                                                <th>Ingredient</th>
                                                <th>Ingredient</th>
                                                <th>Temperature</th>
                                                <th> Weight
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($ingredientsRecipe as $key => $line)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{ $line->recipe->recipe_code }}</td>
                                                <td>{{ $line->recipe->recipe_name }} </td>
                                                <td>{{$line->ingredient_recipe_name}}</td>

                                                <td>
                                                    <!-- ID DEL USUARIO -->
                                                    <input type="hidden"
                                                        class="form-control p-3 mb-2 bg-light text-dark"
                                                        name="user_id[]" value="{{ $line->id }}" readonly>
                                                    <!-- ID DE LA RECETA -->
                                                    <input type="hidden"
                                                        class="form-control p-3 mb-2 bg-light text-dark"
                                                        name="lines_checks_name_recipe_id[]"
                                                        value="{{ $line->ingredient_recipe_id }} " readonly>
                                                    <!-- ID DEL INGREDIENTE DE LA RECETA -->
                                                    <input type="hidden"
                                                        class="form-control p-3 mb-2 bg-light text-dark" id="id"
                                                        value="{{ $line->id }}"
                                                        name="lines_checks_ingredient_recipe_id[]" readonly>

                                                    <input class="form-check-input justify-content-md-end"
                                                        type="checkbox" name="available_ingredient[]"
                                                        id="flexCheckIndeterminate" value="{{ $line->id }}">
                                                    <label class="form-check-label" for="flexCheckIndeterminate">

                                                    </label>

                                                </td>

                                                <td>
                                                    <input type="text" class="form-control col-md-3"
                                                        id="validationDefault02" value="" placeholder="Insert data "
                                                        name="temperature[]" required>
                                                </td>

                                                <td>
                                                    <input type=" text" class="form-control col-md-3"
                                                        id="validationDefault02" value="" placeholder="Insert data "
                                                        name="weight[]" required>
                                                </td>
                                            </tr>


                                            @endforeach
                                        </tbody>


                                    </table>

                                </div>


                                <div class="input-group ">
                                    <span class="input-group-text ">Comment</span>
                                    <textarea class="form-control" name="comment" aria-label="With textarea"></textarea>
                                </div>


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
                        <div class="text-muted">Copyright &copy; Designed by <a class="app-link"
                                href="https://ypprogrammer.com/" target="_blank"> <img style="width: 100px;"
                                    src="{{asset('assets/img/YP_logo_negro.png')}}" alt="Yefferson Perez developer "
                                    srcset=""></a>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>