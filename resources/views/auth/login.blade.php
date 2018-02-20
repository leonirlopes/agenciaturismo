@extends('site.layouts.app')

@section('content-site')
<div class="content">
    <div class="container">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h1>LOGIN</h1>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div>
                <label for="email" class="control-label">E-Mail</label>
                    <input id="email" type="email" class="form-control" placeholder="Digite seu e-mail..." name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Senha</label>

                <div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Insira a senha..." required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Entrar
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Esqueceu sua senha?
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
