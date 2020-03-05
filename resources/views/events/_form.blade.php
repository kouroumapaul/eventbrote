<div class="form-group ">
	<label for="title" class="label-control sr-only">Titre</label>
	<input id="title" class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}" type="text" name="title" placeholder="Titre de l'évènement" value="{{ old('title')?? $event->title }}">

	{!! $errors->first('title','<span class="text-muted invalid-feedback">:message</span>') !!}
</div>

<div class="form-group">
	<label for="description" class="label-control sr-only ">Description</label>
	<textarea id="description" class="form-control {{ $errors->has('description') ? 'is-invalid':'' }}" name="description"  cols="30" rows="10" placeholder="Description de l'évènement" >{{ old('description')?? $event->description }}</textarea>

	{!! $errors->first('description','<span class="text-muted invalid-feedback">:message</span>') !!}
</div>

<div class="form-group">
	<input class="btn btn-primary btn-block" type="submit" value="{{$messageButton}}">	
</div>