<h1> LOGIN </h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="UserName" placeholder="username">
    <br>
    <br>
    <input type="password" name="Password" placeholder="password">
    <br>
    <br>
    <button type="submit"> Login</button>
</form>