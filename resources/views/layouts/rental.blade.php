<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Rental Camera</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>.danger{color:#b64438}.field-error{color:#b64438;font-size:11px}.table-actions{white-space:nowrap}.nav-item{text-decoration:none}.sidebar form{margin:0}.auth-card .alert{margin-top:12px}.setup-link{color:#655ce0}</style>
</head>
<body>
<div class="app-shell">
    <aside class="sidebar">
        <a class="logo" href="/"><span class="brand-mark small">RC</span><span>Rental<span class="logo-light">Camera</span></span></a>
        <div class="side-label">MENU UTAMA</div>
        @foreach(['dashboard'=>'Dashboard','rentals'=>'Transaksi sewa','equipment'=>'Peralatan','customers'=>'Pelanggan','more'=>'Fitur tugas lainnya'] as $key=>$label)
            <a class="nav-item {{ $page===$key?'active':'' }}" href="/?page={{ $key }}">{{ ['dashboard'=>'▦','rentals'=>'▣','equipment'=>'◉','customers'=>'♙','more'=>'⚙'][$key] }} <span>{{ $label }}</span></a>
        @endforeach
        <div class="side-bottom">
            <div class="profile"><div class="avatar">{{ strtoupper(substr($user->name,0,1)) }}</div><div><strong>{{ $user->name }}</strong><small>{{ ucfirst($user->role) }}</small></div></div>
            <form method="post" action="/logout">@csrf<button class="logout">Keluar ↗</button></form>
        </div>
    </aside>
    <main class="main">
        <header class="topbar"><div><span class="muted">Rental Camera</span><span class="crumb"> / {{ ucfirst($page) }}</span></div><div class="top-user"><span class="online"></span>{{ $user->name }}</div></header>
        <section class="content">
            @if(session('success'))
                <div class="success">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="alert"><strong>Periksa kembali isian:</strong><ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
            @endif
            @yield('content')
        </section>
    </main>
</div>
</body>
</html>
