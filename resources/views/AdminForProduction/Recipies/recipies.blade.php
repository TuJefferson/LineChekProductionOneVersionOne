 @extends('template')

 @section('content')

 <div class="container-fluid px-4">
     <h1 class="mt-4">Recipies</h1>
     <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">All recipies</li>
     </ol>





     <div class="">
         <div class="card  mb-4">
             <div class="card-body">Press here for add new recipe</div>
             <div class="card-footer d-flex  justify-content-md-end">
                 <div class="d-grid gap-2 d-md-flex ">

                     <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                         data-bs-target="#staticBackdrop">New
                         recipe <i class="fa-solid fa-plus"></i> </button>

                 </div>
             </div>
         </div>
     </div>


     <div class="card mb-4">
         <div class="card-header">
             <i class="fas fa-table me-1"></i>
             All repices
         </div>
         <div class="card-body">

             <table id="datatablesSimple" style=" text-align: center;">
                 <thead>
                     <tr>
                         <th>Item</th>
                         <th>Code recipe</th>
                         <th>Recipe name</th>
                         <th>Detail recipe</th>
                         <th>Actions</th>
                     </tr>
                 </thead>
                 <tfoot>
                     <tr>
                         <th>Item</th>
                         <th>Code recipe</th>
                         <th>Recipe name</th>
                         <th>Detail recipe</th>
                         <th>Actions</th>
                     </tr>
                 </tfoot>
                 <tbody>
                     @foreach($recipes as $key => $recipe)

                     <tr>
                         <td>{{$key+1}}</td>
                         <td>{{ $recipe->recipe_code }}</td>
                         <td>{{ $recipe->recipe_name }}</td>

                         <td>

                             <a href="{{ route('detailRecipe',$recipe->id )}} "><button type=" button"
                                     class="btn btn-dark">Detail
                                     recipe

                                     <i class="fa-solid fa-clipboard"></i> </button>
                             </a>
                         </td>
                         <div class="d-grid gap-2 d-md-block">
                             <td><a href="{{ route('editRecipie',$recipe->id )}}">
                                     <button class="btn btn-success" type="button"><i
                                             class="fa-regular fa-pen-to-square"></i></button> </a>

                                 <!--//delete  <a href="{{ route('recipeDestroy',$recipe->id )}}"> <button
                                         class="btn btn-danger" type="button"><i
                                             class="fa-solid fa-trash-can"></i></button> </a> -->
                             </td>

                         </div>

                     </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
 </div>



 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header ">
                 <h2 class="modal-title" id="staticBackdropLabel"><img style="width: 40px;"
                         src="assets/img/logo-factor.jpg" alt="Yefferson Perez developer " srcset=""> Add new recipe
                 </h2>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <div class="card mb-2">
                     <div class="card-body">
                         <form class="row g-3" method="POST" action="{{ route('addrecipies') }}">
                             @csrf
                             <div class="row g-3">
                                 <div class="mb-3">
                                     <label for="validationDefault01" class="form-label">
                                         <strong> Recipe name
                                         </strong> </label>
                                     <input type="text" name='recipe_name' placeholder="Insert recipe name"
                                         class="form-control" id="validationDefault01" required>
                                 </div>
                                 <div class="col-sm">
                                     <label for="validationDefault02" class="form-label">
                                         <strong> Code
                                             (SKU)
                                         </strong> </label>
                                     <input type="text" name='recipe_code' class="form-control" id="validationDefault02"
                                         placeholder="Insert code " required>
                                 </div>
                                 <div class="col-sm">
                                     <label for="validationDefault02" class="form-label">
                                         <strong> Date </strong>
                                     </label>
                                     <?php $fcha = date("Y-m-d");?>
                                     <input type="date" class="form-control" value="<?php echo $fcha;?>">
                                 </div>

                                 <div class="col-sm">
                                     <label for="validationDefault02" class="form-label">
                                         <strong> Week </strong>

                                         </strong> </label>
                                     <input type="text" name='week' class="form-control" id="validationDefault02"
                                         placeholder="Insert week " required>
                                 </div>



                             </div>

                             <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                 <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                 <button class="btn btn-dark" type="submit">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="modal-footer d-flex justify-content-center">
                 <p> Copyright &copy; Designed by <a class="app-link" href="https://ypprogrammer.com/" target="_blank">
                         <img style="width: 100px;" src="assets/img/YP_logo_negro.png" alt="Yefferson Perez developer "
                             srcset=""></a></p>
             </div>
         </div>
     </div>
 </div>

 @endsection