<!-- Sidebar -->
<style>
    .main-sidebar {
        background-color: hsl(225, 24%, 27%) !important;
    }
</style>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('admin.profile.show') }}"
                class="d-block">{{ auth()->user()->first_name . auth()->user()->last_name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>



            <li class="nav-item">
                <a href="{{ route('admin.biodata.show') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Biodata</p>
                </a>
            </li>



            <li class="nav-item">
                <a href="{{ route('admin.project.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-briefcase"></i>
                    <p>Project</p>
                </a>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
