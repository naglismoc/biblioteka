@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Autoriaus redagavimas</div>

               <div class="card-body">
                
                <form method="post" action="{{route('authors.update',$author)}}">
                  @csrf
                  <label for="name">First name:</label><br>
                  <input type="text" id="name" name="name" value="{{$author->name}}"><br>
                  <label for="surname">First name:</label><br>
                  <input type="text" id="surname" name="surname" value="{{$author->surname}}"><br>
                  <label for="age">age:</label><br>
                  <input type="text" id="age" name="age" value="{{$author->age}}"><br><br>
                  <input type="submit" value="Submit">
                </form> 
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
