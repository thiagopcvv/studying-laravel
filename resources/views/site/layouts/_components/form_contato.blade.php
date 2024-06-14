{{ $slot }}

<form action={{ route('site.salvar') }} method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="borda-{{ $class }}">
    @if ($errors->has('nome'))
        <a style="font-weight: bold; color: rgb(212, 27, 27)"> *{{ $errors->first('nome') }}</a>
    @endif
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="borda-{{ $class }}">
    @if ($errors->has('telefone'))
        <a style="font-weight: bold; color: rgb(212, 27, 27)"> *{{ $errors->first('telefone') }}</a>
    @endif
    <br>
    <input name="email" type="text" placeholder="E-mail" class="borda-{{ $class }}">
    @if ($errors->has('email'))
        <a style="font-weight: bold; color: rgb(212, 27, 27)"> *{{ $errors->first('email') }}</a>
    @endif
    <br>
    <select name="motivo_contatos_id" class="borda-{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos as $key => $motivo)
            <option value="{{ $motivo->id }}">{{ $motivo->motivo }}</option>
        @endforeach
    </select>
    @if ($errors->has('motivo_contatos_id'))
        <a style="font-weight: bold; color: rgb(212, 27, 27)"> *{{ $errors->first('motivo_contatos_id') }}</a>
    @endif
    <br>
    <textarea name="mensagem" class="borda-{{ $class }}" placeholder="Preencha aqui a sua mensagem"></textarea>
    @if ($errors->has('mensagem'))
        <a style="font-weight: bold; color: rgb(212, 27, 27)"> *{{ $errors->first('mensagem') }}</a>
    @endif
    <br>
    <button type="submit" class="borda-{{ $class }}">ENVIAR</button>

</form>
