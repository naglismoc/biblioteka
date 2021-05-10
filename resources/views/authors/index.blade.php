<h1>autoriu index page</h1>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
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
      </tr>
    @endforeach
</table>
  