<h1>autoriu index page</h1>

<style>

  </style>

  


  <table>
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
  