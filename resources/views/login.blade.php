@extends('layout')

@section('title', 'Pagina Inicial')

@section('content')
    <div class="container-fluid auth-container">
        <div class="row w-100">
            <div class="col-md-6 d-flex flex-column justify-content-center px-5">
                <h2 class="fw-bold">Fazer login!</h2>
                <p class="text-secondary fw-bold mt-3">
                    Acesse já a sua conta para poder organizar e gerir seus funcionarios!
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-center ">
                <div class="auth-box bg-dark">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3 text-end">
                            <small class="text-secondary fw-bold">ainda não possui conta?  
                                <a href="{{ route('cadastro') }}" class="link-small">Cadastro</a>
                            </small>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-green">CRIAR NOVA CONTA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection