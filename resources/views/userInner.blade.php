<x-header data=Users />

<h3>This is a list of Users</h3>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
    </tr>
    @foreach ($users as $user)
        <tr>
            {{-- <td>{{ $user['id'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td> --}}
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td
        </tr>
    @endforeach
</table>

<span>
    {{ $users->links() }}
</span>

<style>
    .w-5 {
        display: none
    }
</style>
