
<form method="post" action="{{route('authors.store')}}">

    @csrf
    <label for="name">First name:</label><br>
    <input type="text" id="name" name="name" value="John"><br>
    <label for="surname">First name:</label><br>
    <input type="text" id="surname" name="surname" value="John"><br>
    <label for="age">age:</label><br>
    <input type="text" id="age" name="age" value="20"><br><br>
    <input type="submit" value="Submit">
  </form> 