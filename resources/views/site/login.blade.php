@extends("templates.main")


@section("formulario")
<form method='POST' class='column'>
    <div class='user form-group col-12'>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" />
    </div>

    <div class='labe-psw form-group col-12'>
        <div class="pass column">
            <label for="nome" class='col-5'>Senha</label>
            <a href="#" class="link-primary col-5'">Esqueceu a senha?</a>

        </div>

        <input type="password" id="nome" name="nome" class="form-control" />
    </div>

    <div class='signin form-group col-12'>
        <button type="submit" class="btn btn-success col-12">Entrar</button>
    </div>    
</form>
@endsection
<!-- 
@section('mensagem')
    <div class="signup">
        Novo aqui? 
        <a href="#" class="link-primary col-5'">Crie uma conta</a>
    </div>
@endsection -->