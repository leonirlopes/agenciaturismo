@extends('site.layouts.app')

@section('content-site')
<div class="content">
    <div class="container">
        <h1>Recuperação de Senha</h1>
        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-mail</label>

                <div>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Enviar link de recuperação de Senha
                    </button>
                </div>
            </div>
        </form>   
    </div>
</div>
@endsection
