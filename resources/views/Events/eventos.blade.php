@extends('Layouts.layout')
{{-- pegando o titulo da pagina --}}
@section('title',"Eventos")

@section('content')

  @foreach ($eventos as $event)
    <p> {{$event->title}} | {{$event->descrição}} </p>
    @endforeach
@endsection
