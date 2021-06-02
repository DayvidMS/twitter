
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Oct 16 2019 23:46:02 GMT+0000 (UTC)  -->
<html data-wf-page="5da786dd00b10d79c698bf04" data-wf-site="5da766d32783b3459dfbc795">
<head>
    <meta charset="utf-8">
    <title>Publicações</title>
    <meta content="Publicações" property="og:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/desafio.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["PT Sans:400,400italic,700,700italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="img/favicon.ico " rel="shortcut icon" type="image/x-icon">
    <link href="img/webclip.png" rel="apple-touch-icon">
</head>
<body>
<div class="login">
{{--    {{dd($twitter)}}--}}
</div>
<div class="topo-publicacoes w-clearfix">
    <div class="div-perfil">
        <p class="nome-perfil">{{ $users->name }}</p>
        <a href="#" class="botao-seguir w-inline-block">
            <p class="seguir">seguir</p>
        </a>

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
                <a href="/usuario" style="text-decoration: none;font-family: 'Nunito', sans-serif">{{$twitters->name}}</a>
                <p class="texto-publicacao">{{ $twitters->twitterText }}</p>
                <div class="div-comentario-existente">
                    <p class="nome-perfil-comentario">Usuario</p>
                    <p class="comentario">Comentario do twitterd</p>
                    <div class="w-form">
                        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="w-clearfix">
                            <textarea placeholder="..." maxlength="5000" id="field-2" name="field-2" class="textarea w-input"></textarea><input type="submit" value="Comentar" data-wait="Please wait..." class="submit-button w-button"></form>
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
<div class="w-embed">
    <style>
        .w-webflow-badge {display: none !important;}
    </style>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
