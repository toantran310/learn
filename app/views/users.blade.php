@extends('layout')

@section('content')
@foreach($users as $user)
<p>{{ $user->email }}</p>
<p>{{ $user->name }}</p>
@endforeach
@stop