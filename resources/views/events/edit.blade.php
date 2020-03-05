@extends('layouts/app')

@section('content')
<h1>Modifier l'évènement  #{{$event->id }} </h1>


<form action="{{ route('events.update',$event) }}" method="post">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	
	@include('events/_form',['messageButton'=>"Modifier l'évènement"])
	
</form>

<p><a href="{{ route('home') }}">Annuler</a></p>
@stop