@extends('layouts.app', ['title' => 'Ajustes'])

@section('content')
<div class="dashboard-shell">
    <aside class="sidebar">
        <a class="brand" href="{{ route('dashboard') }}"><span class="brand-mark">CF</span> CouchFind</a>
        <nav class="side-nav">
            <a href="{{ route('dashboard') }}"><span>◈</span> Resumen</a>
            <a href="{{ route('dashboard.clientes') }}"><span>◎</span> Mis clientes <small>12</small></a>
            <a href="{{ route('dashboard.rutinas') }}"><span>◫</span> Rutinas</a>
            <a href="{{ route('dashboard.calendario') }}"><span>◷</span> Calendario</a>
        </nav>
        <div class="sidebar-bottom">
            <a class="active" href="{{ route('dashboard.ajustes') }}"><span>⚙</span> Ajustes</a>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit"><span>↪</span> Cerrar sesión</button></form>
        </div>
    </aside>

    <main class="dashboard-main module-main">
        <header class="module-header">
            <div>
                <p class="eyebrow">Configuración</p>
                <h1>Ajustes</h1>
            </div>
        </header>

        <section class="module-grid">
            <article class="panel">
                <div class="panel-heading">
                    <div>
                        <p class="eyebrow">Perfil</p>
                        <h3>Cuenta del coach</h3>
                    </div>
                </div>
                <div class="settings-list" style="margin-top:20px;">
                    <div class="settings-card">
                        <div>
                            <span class="label">Nombre</span>
                            <strong>{{ auth()->user()->name }}</strong>
                        </div>
                        <div class="toggle"></div>
                    </div>
                    <div class="settings-card">
                        <div>
                            <span class="label">Email</span>
                            <strong>{{ auth()->user()->email }}</strong>
                        </div>
                        <div class="toggle"></div>
                    </div>
                </div>
            </article>

            <article class="panel">
                <div class="panel-heading">
                    <div>
                        <p class="eyebrow">Preferencias</p>
                        <h3>Notificaciones</h3>
                    </div>
                </div>
                <div class="settings-list" style="margin-top:20px;">
                    <div class="settings-card">
                        <div>
                            <span class="label">Recordatorios</span>
                            <strong>Activado</strong>
                        </div>
                        <div class="toggle"></div>
                    </div>
                    <div class="settings-card">
                        <div>
                            <span class="label">Resumen semanal</span>
                            <strong>Manual</strong>
                        </div>
                        <div class="toggle" style="background:var(--line);"></div>
                    </div>
                </div>
            </article>
        </section>
    </main>
</div>
@endsection
