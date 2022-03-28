@extends("templates.main")


@section("formulario")
<form method='POST' class='column'>
    <div class='user form-group col-12'>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" />
    </div>

    <div class='labe-psw form-group col-12'>
            <label for="senha" class='col-7'>Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" />
    </div>

    <div class="form-group">
        <label for="confSenha" class='col-7'>Confirmar Senha</label>
        <input type="password" id="confSenha" name="confSenha" class="form-control" />
    </div>

    <div class='signin form-group col-12'>
        <button type="submit" class="btn btn-success col-12">Criar Conta</button>
    </div>    
</form>
@endsection

@section('mensagem')
    <div class="signup">
        Já possui uma conta? 
        <a href="/login" class="link-primary col-5'">Fazer Login</a>
    </div>
@endsection