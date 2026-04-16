<x-header data="Update User" />

<form action="/updateUser" method="post">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" required value="{{ $user->name }}" /><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" required value="{{ $user->email }}" /><br><br>

    <input type="hidden" name="id" id="id" value="{{ $user->id }}" />
    <button type="submit">UpdateUser</button>
</form>
