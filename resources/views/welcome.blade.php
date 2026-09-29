@extends('layouts.app', ['title' => 'Inicio'])

@section('content')
<main class="auth-shell">
    <section class="auth-intro">
        <a class="brand" href="{{ route('home') }}"><span class="brand-mark">CF</span> CouchFind</a>

        <div class="intro-copy">
            <p class="eyebrow">La plataforma para coaches online</p>
            <h1>Tu mejor trabajo empieza <em>contigo.</em></h1>
            <p>Planifica, acompaña y haz crecer tu comunidad de atletas desde un solo lugar.</p>

            <div style="display:flex; gap:12px; margin-top:28px; flex-wrap:wrap;">
                <a class="button button-dark" style="width:auto;" href="{{ route('register') }}">
                    Crear mi cuenta <span>↗</span>
                </a>
                <a class="button" style="width:auto; background:#ffffffaa;" href="{{ route('login') }}">
                    Iniciar sesión
                </a>
            </div>
        </div>

        <div class="intro-note"><span>●</span> Menos administración. Más coaching.</div>
    </section>

    <section class="auth-panel">
        <div class="auth-form-wrap">
            <p class="eyebrow">Todo en un vistazo</p>
            <h2>Un dashboard que trabaja a tu ritmo.</h2>
            <p class="muted">
                Clientes, rutinas y sesiones organizados para que puedas concentrarte en lo importante: acompañar a tus atletas.
            </p>

            <div class="panel" style="margin-top:32px; background:var(--deep-green); color:#fff;">
                <p class="eyebrow" style="color:var(--green);">Esta semana</p>
                <h3 style="margin:0 0 20px; font-size:28px; letter-spacing:-.06em;">
                    El progreso se construye sesión a sesión.
                </h3>
                <div style="display:flex; justify-content:space-between; border-top:1px solid #ffffff33; padding-top:16px; color:#bfd0c3; font-size:12px;">
                    <span>Clientes activos</span>
                    <strong style="color:var(--green); font-size:18px;">12</strong>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
