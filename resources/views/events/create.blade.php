@extends('layouts/app')

@section('content')
<h1>Creer un évènement</h1>

<form action="{{ route('events.store') }}" method="post">
	{{ csrf_field() }}
	
	@include('events/_form',['messageButton'=>"Creer un évènement"])

</form>

<p><a href="{{ route('home') }}">Annuler</a></p>
@stop