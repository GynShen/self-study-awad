<x-header data="User Login" />

{{ $errors }} {{--  Method 1 --}}

@if ($errors->any()){{--  Method 2 --}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/login" method="post">
    @csrf
    <input type="text" name="username" id="username" placeholder="Enter Username" /><br>
    <span style="color: red;">@error('username') {{ $message }} @enderror</span><br>{{--  Method 3 --}}
    <input type="password" name="password" id="password" placeholder="Enter Password" /><br>
    <span style="color: red;">@error('password') {{ $message }} @enderror</span><br>
    <button type="submit">Login</button>
</form>
