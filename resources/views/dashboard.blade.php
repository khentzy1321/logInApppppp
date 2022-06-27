@extends('base')

@section('content')

<h1> This Is The Dashboard</h1>

<p>
    <strong>Welcome {{auth()->user()->name}} Just take A look around</strong>
</p>

@endsection