<x-header data="Sign Up"/>

<form action="/signUp" method="post">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" required /><br><br>

    <label for="email">Email:</label><br>
    <input type="text" name="email" id="email" required /><br><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password" required /><br><br>

    <label for="confirm_password">Confirm Password:</label><br>
    <input type="password" name="confirm_password" id="confirm_password" required /><br><br>

    <input type="hidden" name="is_admin" id="is_admin" value="0" /><br><br>

    <button type="submit">Sign Up</button>
</form>
