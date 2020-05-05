<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }} {{ auth()->user()->lastname }}</a>
        </div>
    </div>
    @include('panel.layouts.sidebar-menu')
</div>
<!-- /.sidebar -->
