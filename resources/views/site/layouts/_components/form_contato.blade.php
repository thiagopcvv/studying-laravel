{{ $slot }}

<form action={{ route('site.salvar') }} method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="borda-{{ $class }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="borda-{{ $class }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="borda-{{ $class }}">
    <br>
    <select name="motivo_contatos_id" class="borda-{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos as $key => $motivo)
            <option value="{{ $motivo->id }}">{{ $motivo->motivo }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="borda-{{ $class }}" placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="borda-{{ $class }}">ENVIAR</button>
    <pre style="background: rgb(196, 100, 100)">
        {{ print_r($errors) }}
    </pre>
</form>
