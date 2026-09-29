@extends('layouts.app', ['title' => 'Calendario'])

@section('content')
<div class="dashboard-shell">
    <aside class="sidebar">
        <a class="brand" href="{{ route('dashboard') }}"><span class="brand-mark">CF</span> CouchFind</a>
        <nav class="side-nav">
            <a href="{{ route('dashboard') }}"><span>◈</span> Resumen</a>
            <a href="{{ route('dashboard.clientes') }}"><span>◎</span> Mis clientes <small>12</small></a>
            <a href="{{ route('dashboard.rutinas') }}"><span>◫</span> Rutinas</a>
            <a class="active" href="{{ route('dashboard.calendario') }}"><span>◷</span> Calendario</a>
        </nav>
        <div class="sidebar-bottom">
            <a href="{{ route('dashboard.ajustes') }}"><span>⚙</span> Ajustes</a>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit"><span>↪</span> Cerrar sesión</button></form>
        </div>
    </aside>

    <main class="dashboard-main module-main">
        <header class="module-header">
            <div>
                <p class="eyebrow">Agenda</p>
                <h1>Calendario</h1>
            </div>
            <button class="button button-dark small-btn" type="button">+ Agendar</button>
        </header>

        <section class="panel">
            <div class="panel-heading">
                <div>
                    <p class="eyebrow">Semana</p>
                    <h3>Septiembre 2026</h3>
                </div>
            </div>

            <div class="calendar-grid" style="margin-top:20px;">
                <div class="day-card"><strong>Lun</strong><div class="event green">Fuerza</div><div class="event blue">Check-in</div></div>
                <div class="day-card"><strong>Mar</strong><div class="event orange">Movilidad</div></div>
                <div class="day-card"><strong>Mié</strong><div class="event green">Circuito</div><div class="event blue">Revisión</div></div>
                <div class="day-card"><strong>Jue</strong><div class="event orange">Core</div></div>
                <div class="day-card"><strong>Vie</strong><div class="event green">Hip thrust</div></div>
                <div class="day-card"><strong>Sáb</strong><div class="event blue">Clase</div></div>
                <div class="day-card"><strong>Dom</strong></div>
            </div>
        </section>
    </main>
</div>
@endsection
