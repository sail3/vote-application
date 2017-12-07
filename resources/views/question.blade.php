@extends('layout')

@section('content')
<div class="row">
  <form action="/response" method="get">
    <div class="col-md-12">
      @foreach($questions as $question)
      <div class="form-group">
        <h3>{{ $question[1] }}</h3>
        <p>{{ $question[2] }}</p>
        <input class="form-control" type="text" name="{{ $question[0] }}" value="">
      </div>
      @endforeach
      <div class="form-group">
        <button type="submit" class="btn btn-info" name="button">Enviar respuesta</button>
      </div>
    </div>
  </form>
</div>
@endsection
