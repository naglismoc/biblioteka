@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">PAVADINIMAS</div>

               <div class="card-body">
                  <form method="post" action="{{route('books.update',$book)}}">
                    @csrf
                    <label for="title">title:</label><br>
                    <input type="text" id="title" name="title" value="{{$book->title}}"><br>
                    <label for="pages">pages:</label><br>
                    <input type="text" id="pages" name="pages" value="{{$book->pages}}"><br>
                    <label for="cars">Pasirinkite autoriu:</label>
                    <select name="author_id">
                      @foreach ($authors as $author)
                      {{($book->author_id == $author->id) ? $selected = "selected" : $selected = "" }}
                        <option value="{{$author->id}}" {{$selected}} > {{$author->name}} {{$author->surname}}</option>
                      @endforeach
                    </select> 
                  
                    <input type="submit" value="Submit">
                  </form> 
               </div>
           </div>
       </div>
   </div>
</div>
@endsection


