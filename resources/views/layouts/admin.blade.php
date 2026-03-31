<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel Admin') }}</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Custom Admin CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="admin-wrapper" id="adminWrapper">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                Open Admin
            </div>

            <div class="sidebar-search">
                <input type="text" placeholder="Search...">
            </div>

            <ul class="sidebar-menu">
                <li class="sidebar-menu-item @if(Route::is('dashboard')) active @endif">
                    <a href="{{ route('dashboard') }}" class="sidebar-menu-link">
                        <i class="fa-solid fa-gauge"></i> Dashboard
                    </a>
                </li>
                <li class="sidebar-menu-item @if(Route::is('users.*')) active @endif">
                    <a href="{{ route('users.index') }}" class="sidebar-menu-link">
                        <i class="fa-solid fa-users"></i> Users
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="header-left">
                    <div class="toggle-btn" id="sidebarToggle">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
                <div class="header-right">
                    <div class="user-profile">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Administrator') }}&background=0D8ABC&color=fff"
                            alt="Profile">
                        <span>{{ Auth::user()->name ?? 'Administrator' }}</span>
                        <i class="fa-solid fa-chevron-down" style="margin-left: 10px; font-size: 10px;"></i>
                    </div>

                    <form method="POST" action="{{ route('logout') }}" id="logoutForm" style="display:none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"
                        style="margin-left: 15px; color: #666;">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                </div>
            </header>

            <!-- Page Body -->
            <main>
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="footer">
                <div class="footer-left">
                    {{ config('app.name', 'Laravel') }} &copy; {{ date('Y') }}
                </div>
                <div class="footer-right">
                    Version 1.0.0
                </div>
            </footer>
        </div>
    </div>

    <!-- jQuery & DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Sidebar Toggle Script -->
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });
    </script>
    @stack('scripts')
</body>

</html>