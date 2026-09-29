@extends('layouts.app', ['title' => 'Crear cuenta'])

@section('content')
<main class="auth-shell">
    <section class="auth-intro">
        <a class="brand" href="{{ route('home') }}"><span class="brand-mark">CF</span> CouchFind</a>
        <div class="intro-copy">
            <p class="eyebrow">Tu próxima etapa empieza aquí</p>
            <h1>Haz que cada sesión <em>cuente.</em></h1>
            <p>Una vista clara para planificar mejor, acompañar a tus atletas y hacer crecer tu negocio.</p>
        </div>
        <div class="intro-note"><span>●</span> Menos administración. Más coaching.</div>
    </section>
    <section class="auth-panel">
        <div class="auth-form-wrap">
            <p class="eyebrow">Empieza hoy</p>
            <h2>Crea tu cuenta</h2>
            <p class="muted">Tu centro de control en menos de un minuto.</p>
            @if ($errors->any())
                <div class="form-error">{{ $errors->first() }}</div>
            @endif
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <label for="name">Nombre completo</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Alex García" required autofocus>
                <label for="email">Correo electrónico</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="tu@correo.com" required>
                <label for="password">Contraseña</label>
                <input id="password" name="password" type="password" placeholder="Mínimo 8 caracteres" required>
                <label for="password_confirmation">Confirmar contraseña</label>
                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite tu contraseña" required>
                <button class="button button-dark" type="submit">Crear mi cuenta <span>↗</span></button>
            </form>
            <p class="switch-auth">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
        </div>
    </section>
</main>
@endsection