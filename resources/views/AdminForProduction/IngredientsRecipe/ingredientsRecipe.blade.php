 @extends('template')

 @section('content')

 <div class="container-fluid px-4">
     <h1 class="mt-4">Recipies and ingredients</h1>
     <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">All recipies</li>
     </ol>

     <div class="card mb-4">
         <div class="card-header">
             <i class="fas fa-table me-1"></i>
             DataTable Example
         </div>
         <div class="card-body  ">

             <table id="datatablesSimple" style=" text-align: center;">

                 <thead>
                     <tr>
                         <th>Item</th>
                         <th>Code recipe</th>
                         <th>Recipe name</th>
                         <th>Add Ingredients</th>
                         <th>Detail</th>
                         <th>Actions</th>
                     </tr>
                 </thead>
                 <tfoot>
                     <tr>
                         <th>Item</th>
                         <th>Code recipe</th>
                         <th>Recipe name</th>
                         <th>Add Ingredients</th>
                         <th>Detail</th>
                         <th>Actions</th>
                     </tr>
                 </tfoot>

                 <tbody>
                     @foreach($recipes as $key => $recipe)

                     <tr>
                         <td>{{$key+1}}</td>
                         <td>{{ $recipe->recipe_code }}</td>
                         <td>{{ $recipe->recipe_name }}</td>
                         <td> <a href=" {{ route('addingredient',$recipe->id )}}"><button type="button"
                                     class="btn btn-dark">
                                     <i class="fa-solid fa-plus"></i> </button>
                             </a>
                         </td>
                         <td class="t">
                             <a href="{{ route('detailIngredient',$recipe->id )}} "><button type=" button"
                                     class="btn btn-dark">Detail
                                     recipe

                                     <i class="fa-solid fa-clipboard"></i> </button>
                             </a>
                         </td class="t">
                         <div class="d-grid gap-2 d-md-block t">
                             <td><a href="{{ route('editIngredientRecipie',$recipe->id )}}">
                                     <button class="btn btn-success" type="button"><i
                                             class="fa-regular fa-pen-to-square"></i></button> </a>

                                 <!--// DELETE BUTTON <a href=""> <button class="btn btn-danger" type="button"><i
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





 @endsection