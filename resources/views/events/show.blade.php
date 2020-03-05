@extends('layouts/app')

@section('content')
<h1>{{ $event->title }}</h1>

<p>{{ $event->description }}</p>

<a class="btn btn-secondary" href="{{ route('events.edit',$event) }}">Modifier</a>
<form class="inline-block" action="{{ route('events.destroy', $event) }}" method="post" >
	{{ csrf_field() }}
	{{ method_field('DELETE') }}
	<input class="btn btn-danger" type="submit" value="Supprimer">

</form>
<hr>
<p><a href="{{ route('home') }}">Tous les évènements</a></p>
@stop