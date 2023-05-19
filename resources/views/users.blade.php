<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Laravel</title>
</head>
<body>
    <h1 class="titulo">Ultimas Publicaciones</h1>
    <section>
        @foreach($registros as $registro)
    <div class="item">
            <h1 class="title">{{$registro->username}}</h1>
            <p class="descripcion">{{$registro->lastPost($registro->id)->titulo}}</p>
            <img src="{{asset('uploads').'/'.$registro->lastPost($registro->id)->imagen}}" class="imagen">
            <p class="descripcion">{{$registro->lastPost($registro->id)->descripcion}}</p>
            <h1 class="comentarios">Comentarios:</h1>
            @foreach ($registro->lastPost($registro->id)->comentario as $comentario)
                <h1 class="texto"><strong>{{$comentario->user->username}} </strong>: {{$comentario->texto}} </h1>
                <h1 class="texto1">{{$comentario->created_at->diffForHumans()}}</h1>
                @endforeach
        </div>

    @endforeach

</section>
</body>


