@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">PAVADINIMAS</div>

               <div class="card-body">
                <form method="post" action="{{route('books.store')}}">
                  @csrf

                  <div class="form-group">
                    <label>Book title:</label>
                    <input type="text" name="title"  class="form-control">
                    <small class="form-text text-muted">Knygos pavadinimas.</small>
                  </div>

                  <div class="form-group">
                    <label>Pages:</label>
                    <input type="text" name="pages"  class="form-control">
                    <small class="form-text text-muted">Knygos puslapiai.</small>
                  </div>

                  <div class="form-group">
                    <label>Pasirinkite autoriu:</label>
                    <select name="author_id" class="form-control">
                      @foreach ($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                      @endforeach
                    </select> 
                    <small class="form-text text-muted">Turimi autoriai.</small>
                  </div>

            
                 
                  <input type="submit" value="Submit">
                </form> 
               </div>
           </div>
       </div>
   </div>
</div>
@endsection



