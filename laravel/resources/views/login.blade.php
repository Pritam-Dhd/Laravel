<h1>User Login</h1>

<form action="form" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter username">
    <br><br>
    <input type="password" name="password" placeholder="Enter password">
    <br><br>
    <button type="submit">Login</button>
</form>