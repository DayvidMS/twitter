@extends('layouts.main')
@section('content')
<div class="topo-publicacoes w-clearfix">
    <div class="div-perfil">
        <p class="nome-perfil">{{ $users->name }}</p>


        <form action="/logout" method="POST">
            @csrf
            <a href="/logout" class="botao-sair w-inline-block"
               onclick="event.preventDefault();
                            this.closest('form').submit();"
            >
                Sair
            </a>
        </form>
    </div>
    <div class="div-feed">
        <div class="container-publicacoes">
            <div class="bloco-publicacao">
                <div class="w-form">
                    <form action="/twittar" method="POST">
                        @csrf
                        <textarea placeholder="Texto da Publicação" maxlength="5000" id="twitt" name="twitt" class="texto-publicar w-input">
                        </textarea>
                        <input type="submit" value="Publicar" data-wait="Please wait..." class="botao-publicar w-button">
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
            <p class="feed">Feed</p>
            @foreach($twitter as $twitters)

            <div class="div-publicacao-feed">
                <a href="/usuario/{{$twitters->user_id}}" style="text-decoration: none;font-family: 'Nunito', sans-serif">{{$twitters->name}}</a>
                <p class="texto-publicacao">{{ $twitters->twitterText }}</p>
                <div class="div-comentario-existente">
                    <p class="nome-perfil-comentario">Usuario</p>
                    <p class="comentario">Comentario do twitterd</p>
                    <div class="w-form">
                        <form id="comentario" name="comentario" data-name="comentario" class="w-clearfix" method="POST" action="/twittar/comentario">
                            @csrf
                            <input type="hidden" name="userComentario" value="{{$users->id}}">
                            <input type="hidden" name="twitterComentado" value="{{$twitters->id}}">
                            <textarea placeholder="..." maxlength="5000" id="comentario" name="comentario" class="textarea w-input">
                            </textarea>
                            <input type="submit" value="Comentar" data-wait="Please wait..." class="submit-button w-button"></form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
