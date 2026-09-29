@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="dashboard-shell">
    <aside class="sidebar">
        <a class="brand" href="{{ route('dashboard') }}"><span class="brand-mark">CF</span> CouchFind</a>
        <nav class="side-nav">
            <a class="active" href="{{ route('dashboard') }}"><span>◈</span> Resumen</a>
            <a href="{{ route('dashboard.clientes') }}"><span>◎</span> Mis clientes <small>12</small></a>
            <a href="{{ route('dashboard.rutinas') }}"><span>◫</span> Rutinas</a>
            <a href="{{ route('dashboard.calendario') }}"><span>◷</span> Calendario</a>
        </nav>
        <div class="sidebar-bottom"><a href="{{ route('dashboard.ajustes') }}"><span>⚙</span> Ajustes</a><form method="POST" action="{{ route('logout') }}">@csrf<button type="submit"><span>↪</span> Cerrar sesión</button></form></div>
    </aside>
    <main class="dashboard-main">
        <header class="dashboard-header"><div><p class="eyebrow">Lunes, 7 de septiembre de 2026</p><h1>Buenos días, {{ Str::of(auth()->user()->name)->explode(' ')->first() }} <span>✦</span></h1></div><div class="profile"><span class="avatar">{{ Str::of(auth()->user()->name)->substr(0, 1)->upper() }}</span><div><strong>{{ auth()->user()->name }}</strong><small>Coach principal</small></div><span class="chevron">⌄</span></div></header>
        <section class="welcome-banner"><div><p class="eyebrow">Tu semana en movimiento</p><h2>El progreso se construye <em>sesión a sesión.</em></h2><p>Ya tienes todo listo para acompañar a tus atletas.</p></div><div class="banner-stat"><strong>84%</strong><span>de adherencia<br>esta semana</span></div></section>
        <section class="stat-grid"><article><span class="stat-icon green">◎</span><div><small>Clientes activos</small><strong>12</strong><span class="trend">↗ 8.2% <i>vs. mes anterior</i></span></div></article><article><span class="stat-icon orange">◷</span><div><small>Sesiones esta semana</small><strong>28</strong><span class="trend">↗ 12.5% <i>vs. semana anterior</i></span></div></article><article><span class="stat-icon blue">◫</span><div><small>Rutinas completadas</small><strong>36</strong><span class="trend">↗ 4.7% <i>vs. semana anterior</i></span></div></article></section>
        <section class="dashboard-grid"><article class="panel activity"><div class="panel-heading"><div><p class="eyebrow">Rendimiento</p><h3>Actividad semanal</h3></div><select><option>Esta semana</option><option>Este mes</option></select></div><div class="chart"><div class="chart-labels"><span>40</span><span>30</span><span>20</span><span>10</span><span>0</span></div><div class="bars"><div><i style="height:55%"></i><span>Lun</span></div><div><i style="height:75%"></i><span>Mar</span></div><div><i style="height:48%"></i><span>Mié</span></div><div><i style="height:90%"></i><span>Jue</span></div><div><i style="height:68%"></i><span>Vie</span></div><div><i style="height:42%"></i><span>Sáb</span></div><div><i style="height:20%"></i><span>Dom</span></div></div></div></article><article class="panel sessions"><div class="panel-heading"><div><p class="eyebrow">Agenda</p><h3>Próximas sesiones</h3></div><a href="#calendario">Ver todas ↗</a></div><div class="session"><span class="session-time">09:00</span><span class="session-dot green-dot"></span><div><strong>Fuerza · Tren inferior</strong><small>Mariana López</small></div><span class="session-arrow">↗</span></div><div class="session"><span class="session-time">11:30</span><span class="session-dot orange-dot"></span><div><strong>Movilidad y core</strong><small>Diego Ramírez</small></div><span class="session-arrow">↗</span></div><div class="session"><span class="session-time">17:00</span><span class="session-dot blue-dot"></span><div><strong>Planificación mensual</strong><small>Sofía Torres</small></div><span class="session-arrow">↗</span></div></article></section>
    </main>
</div>
@endsection