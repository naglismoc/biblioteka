
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