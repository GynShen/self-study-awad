<x-header data="Add User" />

<form action="/addUser" method="post">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" placeholder="Enter Name" required /><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" placeholder="Enter Email" required/><br><br>

    <button type="submit">Add User</button>
</form>
