@extends('Layouts.layout')
{{-- pegando o titulo da pagina --}}
@section('title',"Produtos")

@section('content')
  <h1>Tela de produtos</h1>
 {{-- @if ($id != null)      
    <p>O usuário está buscando por: {{ $id }} </p>
  @endif  --}}
  
  @if ($busca != '')      
    <p>O usuário está buscando por: {{ $busca }} </p>
  @endif

@endsection
