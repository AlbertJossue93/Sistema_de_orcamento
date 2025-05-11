@extends('layouts.app')
@section('tittle', 'login')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
            <div class="card shadow p-4">

<h4 class="text-center mb-4"> Login </h4>


@if (session('error'))
<div class="alert alert-danger">{{session('error')}}</div>

@endif
<form method="POST" action="{{route('login')}">
    @csrf
    <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection

</form>
</div>

