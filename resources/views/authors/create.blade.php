@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Autoriaus create'as</div>

               <div class="card-body">
                <form method="post" action="{{route('authors.store')}}">
                    @csrf

                    <div class="form-group">
                        <label>First name:</label>
                        <input type="text" name="name"  class="form-control">
                        <small class="form-text text-muted">Autoriaus vardas.</small>
                    </div>

                    <div class="form-group">
                        <label>Last name:</label>
                        <input type="text" name="surname"  class="form-control">
                        <small class="form-text text-muted">Autoriaus pavardė.</small>
                    </div>

                    <div class="form-group">
                        <label>Age:</label>
                        <input type="text" name="age"  class="form-control">
                        <small class="form-text text-muted">Amžius.</small>
                    </div>

                    <input type="submit" value="Submit">
                </form> 
               </div>
           </div>
       </div>
   </div>
</div>
@endsection




         



