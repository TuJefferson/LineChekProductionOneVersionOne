  @extends('template')

  @section('content')



  <div class="container-fluid px-4">

      <style>
      .reboteIn_abajo {

          font-family: Arial;


      }

      /* Asignamos las animaciones */

      .reboteIn_abajo {

          animation: reboteIn_abajo 3s;
          background: #00000030;

      }



      /* Creamos la animación ReboteIn desde Abajo (con keyframes) */

      @keyframes reboteIn_abajo {

          0% {
              opacity: 0;
              transform: translateX(100vw);
          }

          50% {

              transform: translateX(-30px);
              opacity: 1;
          }

          70% {

              transform: translateX(10px);

          }

      }
      </style>
      <br>
      <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration reboteIn_abajo" role="alert">
          <div class="inner">
              <div class="app-card-body p-3 p-lg-4">
                  <h3 class="mb-3">Welcome, {{ auth()->user()->name }} {{ auth()->user()->last_name }} ! </h3>
                  <div class="row gx-5 gy-3">
                      <div class="col-12 col-lg-9">

                          <div>The line verification system for production one has five components.
                              <br>
                              <br>
                              In the software documentation you have information that conceptually details each module
                              and how to use them.
                              <br>
                              <br>
                              Your opinions are important, so if you think that any other functionality is required,
                              please mention that it can be improved.

                          </div>
                      </div>
                      <!--//col-->
                      <div class="col-12 col-lg-3">

                          <a href="https://ypprogrammer.com/" target="_blank" rel="noopener noreferrer"><button
                                  type="button" class="btn btn-dark"><i class="fa-brands fa-readme"></i>
                                  Read documentation
                              </button> </a>

                      </div>
                      <!--//col-->
                  </div>
                  <!--//row-->
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <!--//app-card-body-->

          </div>
          <!--//inner-->
      </div>
      <h1 class="mt-4">Dashboard</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Main data</li>
      </ol>
      <div class="row">
          <div class="col-xl-6 col-md-6">
              <div class="card  mb-4">

                  <div class="card-footer d-flex ">
                      <div class="d-grid gap-2 d-md-flex ">
                          <h2>Recipes created successfully: <span class="badge bg-secondary"> {{($recipes)}}</span>
                          </h2>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-6 col-md-6">
              <div class="card  mb-4">

                  <div class="card-footer d-flex ">
                      <div class="d-grid gap-2 d-md-flex ">
                          <h2>Subrecipes created successfully: <span class="badge bg-secondary">
                                  {{($ingredients)}}</span>
                          </h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <div class="row">
          <div class="col-xl-3 col-md-6">
              <div class="card  mb-4">
                  <div class="card-body">Records processed by the first shift</div>
                  <div class="card-footer d-flex  justify-content-md-end">
                      <div class="d-grid gap-2 d-md-flex ">
                          <button class="btn btn-dark" type="button"> {{($firstShift)}}</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6">
              <div class="card  mb-4">
                  <div class="card-body">Records processed by the second shift</div>
                  <div class="card-footer d-flex  justify-content-md-end">
                      <div class="d-grid gap-2 d-md-flex ">
                          <button class="btn btn-dark" type="button">{{($secondShift)}}</button>
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
                          <button class="btn btn-dark" type="button">{{($thirdShift)}}</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6">
              <div class="card  mb-4">
                  <div class="card-body">Records processed successfully</div>
                  <div class="card-footer d-flex  justify-content-md-end">
                      <div class="d-grid gap-2 d-md-flex ">
                          <button class="btn btn-dark" type="button"> {{($allShift)}}</button>
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
                          <a href="{{ route('verificationline') }} "><button type="button" class="btn btn-dark">Run
                                  Test</button> </a>
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
                          <a href="{{ route('recipies') }} "><button type="button" class="btn btn-dark">Add new
                              </button> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>


  </div>

  @endsection