<h1>User Edit</h1>

<form action="/edit" method="post">
    @csrf
    <input type="hidden" name="name" placeholder="Enter name" value="{{$data[0]['name']}} ">
    <br><br>
    <input type="number" name="age" placeholder="Enter age" value="{{$data[0]['age']}}">
    <br><br>
    <button type="submit">Update</button>
</form>