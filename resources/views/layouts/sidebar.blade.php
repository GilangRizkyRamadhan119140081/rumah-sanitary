<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mt-2">
            <a href="/">
                <img style="max-width: 85px " src="{{ url('img/logo_sanitary.png') }}" class="logo">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">
                <img style="max-width:50px" src="{{ url('img/logo_sanitary.png') }}" class="logo">
            </a>
        </div>
        @role('Superadmin')
            @include('layouts.menu.nav-super-admin')
        @endrole
    </aside>
</div>
