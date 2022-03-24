@extends("templates.init")

@section("titulo", "CADASTRAR-SE")

@section("formulario")
<form method="GET" action="">
    <div>
        <p></p>
        <input type="text" class="form-control" placeholder="Usuário" style="max-width: 50%;" />
    </div>

    <div>
        <p></p>
        <input type="password" class="form-control" placeholder="Senha" style="max-width: 50%;" />
    </div>

    <div>
        <p></p>
        <input type="password" class="form-control" placeholder="Confirmar Senha" style="max-width: 50%;" />
    </div>

    <div>
        <button type="button" class="btn btn-primary">
            Cadastrar
        </button>
    </div>

    <div>
        Já possui uma conta?
        <a href="#" class="link-warning">Entrar</a>
    </div>
</form>
@endsection