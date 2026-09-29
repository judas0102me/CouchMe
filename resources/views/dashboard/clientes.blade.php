@extends('layouts.app', ['title' => 'Mis clientes'])

@section('content')
<div class="dashboard-shell">
    <aside class="sidebar">
        <a class="brand" href="{{ route('dashboard') }}"><span class="brand-mark">CF</span> CouchFind</a>
        <nav class="side-nav">
            <a href="{{ route('dashboard') }}"><span>◈</span> Resumen</a>
            <a class="active" href="{{ route('dashboard.clientes') }}"><span>◎</span> Mis clientes <small>12</small></a>
            <a href="{{ route('dashboard.rutinas') }}"><span>◫</span> Rutinas</a>
            <a href="{{ route('dashboard.calendario') }}"><span>◷</span> Calendario</a>
        </nav>
        <div class="sidebar-bottom">
            <a href="{{ route('dashboard.ajustes') }}"><span>⚙</span> Ajustes</a>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit"><span>↪</span> Cerrar sesión</button></form>
        </div>
    </aside>

    <main class="dashboard-main module-main">
        <header class="module-header">
            <div>
                <p class="eyebrow">Clientes</p>
                <h1>Mis clientes</h1>
            </div>
            <button class="button button-dark small-btn" type="button">+ Nuevo cliente</button>
        </header>

        <section class="module-stats">
            <article class="module-stat">
                <span class="label">Activos</span>
                <strong>12</strong>
            </article>
            <article class="module-stat">
                <span class="label">En seguimiento</span>
                <strong>4</strong>
            </article>
            <article class="module-stat">
                <span class="label">Meta mensual</span>
                <strong>92%</strong>
            </article>
        </section>

        <section class="module-grid">
            <article class="panel">
                <div class="panel-heading">
                    <div>
                        <p class="eyebrow">Lista</p>
                        <h3>Clientes activos</h3>
                    </div>
                </div>
                <div class="panel-list" style="margin-top:20px;">
                    <div class="client-card">
                        <div class="person">
                            <span class="avatar-pill">M</span>
                            <div>
                                <strong>Mariana López</strong>
                                <small>Entrenamiento de fuerza</small>
                            </div>
                        </div>
                        <span class="status-badge">En progreso</span>
                    </div>
                    <div class="client-card">
                        <div class="person">
                            <span class="avatar-pill" style="background:#ffe7c7; color:var(--orange);">D</span>
                            <div>
                                <strong>Diego Ramírez</strong>
                                <small>Movilidad y core</small>
                            </div>
                        </div>
                        <span class="status-badge orange">Pendiente</span>
                    </div>
                    <div class="client-card">
                        <div class="person">
                            <span class="avatar-pill" style="background:#dfeafc; color:#5677bc;">S</span>
                            <div>
                                <strong>Sofía Torres</strong>
                                <small>Planificación mensual</small>
                            </div>
                        </div>
                        <span class="status-badge blue">Listo</span>
                    </div>
                </div>
            </article>

            <article class="panel">
                <div class="panel-heading">
                    <div>
                        <p class="eyebrow">Seguimiento</p>
                        <h3>Resumen del mes</h3>
                    </div>
                </div>
                <div class="panel-list" style="margin-top:20px;">
                    <div class="settings-card">
                        <div>
                            <span class="label">Asistencia</span>
                            <strong>86%</strong>
                        </div>
                        <div class="toggle"></div>
                    </div>
                    <div class="settings-card">
                        <div>
                            <span class="label">Completitud</span>
                            <strong>74%</strong>
                        </div>
                        <div class="toggle"></div>
                    </div>
                </div>
            </article>
        </section>
    </main>
</div>
@endsection
