@extends('layout')

@section('content')
<div class="row">
  <form action="/response" method="get">
    <div class="col-md-12">
      @foreach($questions as $index => $question)
      <div class="form-group">
        <h3>{{ $index + 1 }} {{ $question->title }}</h3>
        <p>{{ $question->description }}</p>
        <input class="form-control" type="text" name="{{ $question->id }}" value="">
      </div>
      @endforeach
      <div class="form-group">
        <button type="submit" class="btn btn-info" name="button">Enviar respuesta</button>
      </div>
    </div>
  </form>
</div>
@endsection
