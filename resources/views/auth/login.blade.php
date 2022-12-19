@extends('layouts.app')

@section('content')    
    <div class="container">

                    <form method="POST" action="{{ route('login') }}">
                        <div id="email-input" class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="correo electrónico">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="pass-input" class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>


                        <div>
                            <div class="col-md-8 offset-md-4">
                                <button id="login-button" type="submit" class="btn btn-dark">
                                    {{ __('Entrar') }}
                                </button>
                            </div>


                            <div class="col-md-8 offset-md-4">
                                <a href="{{ route('auth.google') }}" >
                                    <button id="google-button"  type="button" class="btn btn-dark">
                                        <img src="https://madeby.google.com/static/images/google_g_logo.svg" width="19"/>
                                        <span>Iniciar sesión con Google</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>


















                    

    </div>
                    
@endsection
