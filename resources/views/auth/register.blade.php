@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Logo UNAB -->
    <div class="mb-4 text-left">
        <img src="https://pasaporte.unab.edu.co/upload/surveys/993455/images/LOGO%20UNAB-MINEDUCACION_v%20-%204.png" 
             alt="UNAB" 
             style="height: 60px;">
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 p-0">
            
            <!-- Encabezado con fondo naranja -->
            <div class="py-3 text-center" style="background-color: #f2a900; border-radius: 8px 8px 0 0;">
                <div class="d-flex justify-content-center align-items-center gap-3">
                    <a href="{{ route('login') }}" class="text-white text-decoration-none" style="font-size: 1.1rem;">Iniciar sesión</a>
                    <span style="color: white; font-size: 1.2rem;">-</span>
                    <a href="#" class="text-white text-decoration-none fw-bold" style="font-size: 1.1rem;">Registrarse</a>
                </div>
            </div>

            <!-- Card del formulario -->
            <div class="card shadow-sm" style="border: none; border-radius: 0 0 8px 8px;">
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label" style="font-size: 1rem;">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                   style="border-radius: 5px; padding: 12px; border: 1px solid #ddd; font-size: 1rem;">

                            @error('name')
                                <span class="invalid-feedback" role="alert" style="font-size: 0.9rem;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label" style="font-size: 1rem;">{{ __('Correo Electrónico') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email"
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
                                   name="password" required autocomplete="new-password"
                                   style="border-radius: 5px; padding: 12px; border: 1px solid #ddd; font-size: 1rem;">

                            @error('password')
                                <span class="invalid-feedback" role="alert" style="font-size: 0.9rem;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="form-label" style="font-size: 1rem;">{{ __('Confirmar Contraseña') }}</label>
                            <input id="password-confirm" type="password" class="form-control" 
                                   name="password_confirmation" required autocomplete="new-password"
                                   style="border-radius: 5px; padding: 12px; border: 1px solid #ddd; font-size: 1rem;">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn py-3" style="background-color: #f2a900; color: white; border: none; border-radius: 5px; font-size: 1.1rem; font-weight: bold;">
                                {{ __('Registrarse') }}
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