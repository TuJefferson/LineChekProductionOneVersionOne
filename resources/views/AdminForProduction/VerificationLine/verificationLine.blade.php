 @extends('template')

 @section('content')

 <div class="container-fluid px-4">
     <h1 class="mt-4">Verification line</h1>
     <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">It has a table with the data, which you can filter by code or
             recipe name </li>
     </ol>








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

                             <a href="{{ route('detailIngredient',$recipe->id )}} "><button type=" button"
                                     class="btn btn-dark">Detail
                                     recipe

                                     <i class="fa-solid fa-clipboard"></i> </button>
                             </a>
                         </td>

                         <div class="d-grid gap-2 d-md-block">
                             <td><a href="{{ route('runverificationline',$recipe->id )}}">
                                     <button class="btn btn-dark" type="button">Start check </button> </a>

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





 @endsection