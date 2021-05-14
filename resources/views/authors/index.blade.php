
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Autoriai</div>
               <div class="card-body">
                  <table class="table">
                    <tr>
                      <th>name</th>
                      <th>surname</th>
                      <th>age</th>
                      <th>edit</th>
                      <th>delete</th>
                    </tr>
                    @foreach ($authors as $author)
                    <tr>
                        <td>{{$author->name}}</td>
                        <td>{{$author->surname}}</td>
                        {{-- <td>{!!"<b>labas</b>"!!}</td> --}}
                        <td>{{$author->age}}</td>
                        <td>
                          <a href="{{route('authors.edit',$author)}}">edit</a>
                        </td>
                        <td>
                          <form action="{{route('authors.destroy',$author)}}" method="post">
                            @csrf
                            <button type="submit">trinti</button>
                          </form>
                      </td>
                      </tr>
                    @endforeach
                </table>

               </div>
           </div>
       </div>
   </div>
</div>
@endsection


