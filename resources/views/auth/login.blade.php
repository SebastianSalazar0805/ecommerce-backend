@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Logo UNAB con tamaño original -->
    <div class="mb-4 text-left">
        <img src="https://pasaporte.unab.edu.co/upload/surveys/993455/images/LOGO%20UNAB-MINEDUCACION_v%20-%204.png" 
             alt="UNAB" 
             style="height: 60px;"> <!-- Tamaño original aumentado -->
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 p-0"> <!-- Ancho original col-md-8 -->
            
            <!-- Encabezado con tamaños originales -->
            <div class="py-3 text-center" style="background-color: #f2a900; border-radius: 8px 8px 0 0;">
                <div class="d-flex justify-content-center align-items-center gap-3">
                    <a href="#" class="text-white text-decoration-none fw-bold" style="font-size: 1.1rem;">Iniciar sesión</a>
                    <span style="color: white; font-size: 1.2rem;">-</span>
                    <a href="#" class="text-white text-decoration-none" style="font-size: 1.1rem;">Registrarse</a>
                </div>
            </div>

            <!-- Card del formulario con tamaños originales -->
            <div class="card shadow-sm" style="border: none; border-radius: 0 0 8px 8px;">
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label" style="font-size: 1rem;">{{ __('Correo Electrónico') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                   style="border-radius: 5px; padding: 12px; border: 1px solid #ddd; font-size: 1rem;">

                            @error('email')
                                <span class="invalid-feedback" role="alert" style="font-size: 0.9rem;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label" style="font-size: 1rem;">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="current-password"
                                   style="border-radius: 5px; padding: 12px; border: 1px solid #ddd; font-size: 1rem;">

                            @error('password')
                                <span class="invalid-feedback" role="alert" style="font-size: 0.9rem;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="transform: scale(1.2);">
                                <label class="form-check-label" for="remember" style="font-size: 1rem;">
                                    {{ __('Mantener sesión activa') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="text-decoration-none" href="{{ route('password.request') }}" style="color: #f2a900; font-size: 1rem;">
                                    {{ __('¿Olvidó su contraseña?') }}
                                </a>
                            @endif
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn py-3" style="background-color: #f2a900; color: white; border: none; border-radius: 5px; font-size: 1.1rem; font-weight: bold;">
                                {{ __('Iniciar Sesión') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        padding-top: 30px;
    }
    .container {
        max-width: 800px;
    }
    .form-label {
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
        display: block;
    }
    .form-control:focus {
        border-color: #f2a900;
        box-shadow: 0 0 0 0.3rem rgba(242, 169, 0, 0.25);
    }
    .card {
        border: none;
    }
    .btn:hover {
        background-color: #e69500 !important;
        transform: scale(1.02);
        transition: all 0.2s;
    }
</style>
@endsection