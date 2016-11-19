@extends('layouts.main')

@section('title')
    CD list
@endsection
@section('navbar')
    This menu from list<br />
    @parent
@endsection

@section('content')
<h1>CD list</h1>

<ul>
    @foreach ($cds as $cd)
           <li> {{ $cd->titel }} </li>
    @endforeach
</ul>

@endsection