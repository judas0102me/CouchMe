@extends('layouts.app', ['title' => 'Iniciar sesión'])

@section('content')
<main class="auth-shell">
    <section class="auth-intro">
        <a class="brand" href="{{ route('home') }}"><span class="brand-mark">CF</span> CouchFind</a>
        <div class="intro-copy">
            <p class="eyebrow">Tu espacio de entrenamiento</p>
            <h1>Entrena con intención. <em>Crece con datos.</em></h1>
            <p>Organiza tus clientes, sus rutinas y el progreso que convierte el esfuerzo en resultados.</p>
        </div>
        <div class="intro-note"><span>●</span> Plataforma para coaches que dejan huella</div>
    </section>
    <section class="auth-panel">
        <div class="auth-form-wrap">
            <p class="eyebrow">Bienvenido de nuevo</p>
            <h2>Inicia sesión</h2>
            <p class="muted">Accede a tu centro de control.</p>
            @if ($errors->any())
                <div class="form-error">{{ $errors->first() }}</div>
            @endif
            <form method="POST" action="{{ route('login.store') }}">
                @csrf
                <label for="email">Correo electrónico</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="tu@correo.com" required autofocus>
                <label for="password">Contraseña</label>
                <input id="password" name="password" type="password" placeholder="••••••••" required>
                <label class="check-row"><input type="checkbox" name="remember"> <span>Recordarme</span></label>
                <button class="button button-dark" type="submit">Entrar al dashboard <span>↗</span></button>
            </form>
            <p class="switch-auth">¿Aún no tienes cuenta? <a href="{{ route('register') }}">Regístrate gratis</a></p>
        </div>
    </section>
</main>
@endsection