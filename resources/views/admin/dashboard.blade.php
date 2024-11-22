<ul class="sidebar-menu">
    @if(auth()->user()->hasRole('Admin'))
    <!-- Admin menu items -->
    <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
    @endif

    @if(auth()->user()->hasRole('Supervisor'))
    <!-- Supervisor menu items -->
    <li><a href="{{ route('supervisor.dashboard') }}">Supervisor Dashboard</a></li>
    @endif
</ul>