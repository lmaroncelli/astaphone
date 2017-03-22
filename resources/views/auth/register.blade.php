@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <hr>

                         {{-- CAMPI AGGIUNTIVI --}}
                        
                        <div class="form-group{{ $errors->has('indirizzo') ? ' has-error' : '' }}">
                            <label for="indirizzo" class="col-md-4 control-label">Indirizzo</label>

                            <div class="col-md-6">
                                <input id="indirizzo" type="indirizzo" class="form-control" name="indirizzo" value="{{ old('indirizzo') }}">

                                @if ($errors->has('indirizzo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('indirizzo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('citta') ? ' has-error' : '' }}">
                            <label for="citta" class="col-md-4 control-label">Città</label>

                            <div class="col-md-6">
                                <input id="citta" type="citta" class="form-control" name="citta" value="{{ old('citta') }}">

                                @if ($errors->has('citta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('citta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cap') ? ' has-error' : '' }}">
                            <label for="cap" class="col-md-4 control-label">CAP</label>

                            <div class="col-md-6">
                                <input id="cap" type="cap" class="form-control" name="cap" value="{{ old('cap') }}">

                                @if ($errors->has('cap'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cap') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('provincia') ? ' has-error' : '' }}">
                            <label for="provincia" class="col-md-4 control-label">Provincia</label>

                            <div class="col-md-6">
                                <input id="provincia" type="provincia" class="form-control" name="provincia" value="{{ old('provincia') }}">

                                @if ($errors->has('provincia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('provincia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- CAMPI AGGIUNTIVI --}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
