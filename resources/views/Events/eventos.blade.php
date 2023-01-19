@extends('Layouts.layout')
{{-- pegando o titulo da pagina --}}
@section('title',"Eventos")

@section('content')

  @foreach ($events as $event)
    <p> {{$event->id}} - {{$event->Title}} | {{$event->description}} </p>
    @endforeach
@endsection
