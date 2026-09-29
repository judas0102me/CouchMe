@extends('layouts.app', ['title' => 'Rutinas'])

@section('content')
<div class="dashboard-shell">
    <aside class="sidebar">
        <a class="brand" href="{{ route('dashboard') }}"><span class="brand-mark">CF</span> CouchFind</a>
        <nav class="side-nav">
            <a href="{{ route('dashboard') }}"><span>◈</span> Resumen</a>
            <a href="{{ route('dashboard.clientes') }}"><span>◎</span> Mis clientes <small>12</small></a>
            <a class="active" href="{{ route('dashboard.rutinas') }}"><span>◫</span> Rutinas</a>
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
                <p class="eyebrow">Programa</p>
                <h1>Rutinas</h1>
            </div>
            <button class="button button-dark small-btn" type="button">+ Nueva rutina</button>
        </header>

        <section class="module-stats">
            <article class="module-stat">
                <span class="label">Activas</span>
                <strong>18</strong>
            </article>
            <article class="module-stat">
                <span class="label">Completas</span>
                <strong>36</strong>
            </article>
            <article class="module-stat">
                <span class="label">Promedio</span>
                <strong>4.8</strong>
            </article>
        </section>

        <section class="module-grid">
            <article class="panel">
                <div class="panel-heading">
                    <div>
                        <p class="eyebrow">Plan</p>
                        <h3>Rutinas del mes</h3>
                    </div>
                </div>
                <div class="panel-list" style="margin-top:20px;">
                    <div class="routine-card">
                        <div class="meta">
                            <span class="avatar-pill" style="background:#e7f8d8; color:#497f38;">F</span>
                            <div>
                                <strong>Fuerza · Tren inferior</strong>
                                <small>4 semanas · 3 días/semana</small>
                            </div>
                        </div>
                        <span class="status-badge">Activa</span>
                    </div>
                    <div class="routine-card">
                        <div class="meta">
                            <span class="avatar-pill" style="background:#ffe7c7; color:var(--orange);">M</span>
                            <div>
                                <strong>Movilidad y core</strong>
                                <small>2 semanas · 2 días/semana</small>
                            </div>
                        </div>
                        <span class="status-badge orange">Revisión</span>
                    </div>
                    <div class="routine-card">
                        <div class="meta">
                            <span class="avatar-pill" style="background:#dfeafc; color:#5677bc;">P</span>
                            <div>
                                <strong>Planificación mensual</strong>
                                <small>1 semana · 1 sesión</small>
                            </div>
                        </div>
                        <span class="status-badge blue">Lista</span>
                    </div>
                </div>
            </article>

            <article class="panel">
                <div class="panel-heading">
                    <div>
                        <p class="eyebrow">Acciones</p>
                        <h3>Checklist</h3>
                    </div>
                </div>
                <div class="settings-list" style="margin-top:20px;">
                    <div class="settings-card">
                        <div>
                            <span class="label">Evaluación inicial</span>
                            <strong>Completada</strong>
                        </div>
                        <div class="toggle"></div>
                    </div>
                    <div class="settings-card">
                        <div>
                            <span class="label">Objetivos claros</span>
                            <strong>Pendiente</strong>
                        </div>
                        <div class="toggle" style="background:var(--line);"></div>
                    </div>
                </div>
            </article>
        </section>
    </main>
</div>
@endsection
