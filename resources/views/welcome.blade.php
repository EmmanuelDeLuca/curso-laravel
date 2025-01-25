<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
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
    </body>
</html>
