<x-header data="Users" />

@if($user == "Alice")
<h2> Hello, {{$user}} </h2>
@elseif($user == "Isla")
<h2> Konnichiwa, {{$user}}</h2>
@elseif($user == "Ali")
<h2> Apa khabar, {{$user}} </h2>
@else
<h2> Unknown User </h2>
@endif

@foreach($users as $user)
<h1> {{$user}} </h1>
@endforeach

@include('userInner')