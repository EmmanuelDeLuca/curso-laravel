@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
        <h1>Conhecendo blade</h1>

        @if ($nome == "Ivar")
            <p>O nome dele é {{$nome}} e ele tem {{$idade}}</p>
        @elseif($nome == "Emmanuel")
            <p>O nome dele é {{$nome}} e ele tem {{$idade}}</p>
        @else
            <p>Não tem usuário</p>
        @endif

        <h2>Estrutura for</h2>
        @for($i = 0; $i < count($arrNumerico); $i++ )
            <p>{{$arrNumerico[$i]}} - {{$i}}</p>
            
        
        @endfor

        @foreach($arrNomes as $nome)
            <p>{{$nome}} {{$loop -> index}}</p>
        @endforeach

@endsection