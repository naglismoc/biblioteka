<h1>autoriu index page</h1>

<style>

  </style>

  


  <table>
    <tr>
      <th>title</th>
      <th>pages</th>
      <th>author</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{$book->title}}</td>
        <td>{{$book->pages}}</td>
        <td>{{$book->author->name}} {{$book->author->surname}}</td>
        <td>
          <a href="{{route('books.edit',$book)}}">edit</a>
        </td>
        <td>
          <form action="{{route('books.destroy',$book)}}" method="post">
            @csrf
            <button type="submit">trinti</button>
          </form>
      </td>
      </tr>
    @endforeach
</table>
  