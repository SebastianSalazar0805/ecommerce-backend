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
                    <a href="{{ route('register') }}" class="text-white text-decoration-none" style="font-size: 1.1rem;">Registrarse</a>
                </div>
            </div>

            <!-- Card del contenido -->
            <div class="card shadow-sm" style="border: none; border-radius: 0 0 8px 8px;">
                <div class="card-body p-4 text-center">
                    <h2 class="mb-4" style="color: #333; font-size: 1.5rem;">{{ __('Verifica tu dirección de correo electrónico') }}</h2>

                    @if (session('resent'))
                        <div class="alert alert-success mb-4" role="alert" style="font-size: 1rem;">
                            {{ __('Se ha enviado un nuevo enlace de verificación a tu correo electrónico.') }}
                        </div>
                    @endif

                    <p class="mb-4" style="font-size: 1rem;">
                        {{ __('Antes de continuar, por favor revisa tu correo electrónico para el enlace de verificación.') }}
                    </p>
                    
                    <p class="mb-4" style="font-size: 1rem;">
                        {{ __('Si no recibiste el correo electrónico') }},
                    </p>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0" style="color: #f2a900; font-size: 1rem; font-weight: bold;">
                            {{ __('haz clic aquí para solicitar otro') }}
                        </button>.
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
    .card {
        border: none;
    }
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
        padding: 12px;
        border-radius: 5px;
    }
    .btn-link:hover {
        text-decoration: underline;
    }
</style>
@endsection