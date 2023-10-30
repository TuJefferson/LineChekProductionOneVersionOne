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

                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                      aria-expanded="false" aria-controls="collapseLayouts">
                      <div class="sb-nav-link-icon"><i class="fa-solid fa-file-lines"></i></div>
                      Reports
                      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>
                  <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                      data-bs-parent="#sidenavAccordion">
                      <nav class="sb-sidenav-menu-nested nav">
                          <a class="nav-link" href="{{ route('reportsRecipies') }} ">Reports recipes</a>
                          <a class="nav-link" href="{{ route('reportsRecipiesAndIngredients') }}">Reports subrecipes</a>
                          <a class="nav-link" href="{{ route('reportsVerificationLIne') }}">Reports line check
                          </a>
                      </nav>
                  </div>

              </div>
          </div>
          <div class="sb-sidenav-footer">
              <div class="small"> Copyright &copy; Designed by <a class="app-link" href="https://ypprogrammer.com/"
                      target="_blank"> <img style="width: 160px;" src="assets/img/YP_logo_blanco.png"
                          alt="Yefferson Perez developer " srcset=""></a>
              </div>

          </div>
      </nav>
  </div>