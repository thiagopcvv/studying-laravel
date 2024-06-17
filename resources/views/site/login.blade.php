@extends('site.layouts.basico')



<body>
    @include('site.layouts._partials.topo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina" style="justify-content: center; display:flex;">
            <form action={{ route('site.login') }} method="post">
                @csrf
                <input name="usuario" type="text" placeholder="usuário" class="borda-preta">
                @if ($errors->has('usuario'))
                    <a style="font-weight: bold; color: rgb(212, 27, 27)"> *{{ $errors->first('usuario') }}</a>
                @endif
                <input name="senha" type="password" placeholder="senha" class="borda-preta">
                @if ($errors->has('senha'))
                    <a style="font-weight: bold; color: rgb(212, 27, 27)"> *{{ $errors->first('senha') }}</a>
                @endif
                <button type="submit" class="borda-preta">Acessar</button>
                {{isset($erro) || $erro != '' ? $erro : ''}}
            </form>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="img/facebook.png">
            <img src="img/linkedin.png">
            <img src="img/youtube.png">
        </div>
        <div class="area-contato">
            <h2>Login</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="img/mapa.png">
        </div>
    </div>
</body>

</html>
