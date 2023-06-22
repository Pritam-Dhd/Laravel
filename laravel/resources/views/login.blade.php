<h1>User Login</h1>

<form action="form" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter name">
    <br><br>
    <input type="number" name="age" placeholder="Enter age">
    <br><br>
    <button type="submit">Login</button>
</form>