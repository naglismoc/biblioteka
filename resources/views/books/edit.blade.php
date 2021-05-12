
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