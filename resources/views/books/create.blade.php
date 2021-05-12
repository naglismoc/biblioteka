
<form method="post" action="{{route('books.store')}}">

    @csrf
    <label for="title">Book title:</label><br>
    <input type="text" id="title" name="title" value=""><br>
    <label for="pages">Pages</label><br>
    <input type="text" id="pages" name="pages" value=""><br>

    <label for="cars">Pasirinkite autoriu:</label>
    <select name="author_id">
      @foreach ($authors as $author)
        <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
      @endforeach
    </select> 
    <input type="submit" value="Submit">
  </form> 