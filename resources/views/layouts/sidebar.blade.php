
@php
    $menuItems = [['icon' => 'fas fa-tachometer-alt', 'text' => 'Dashboard', 'route' => '/admin'],
     ['icon' => 'fas fa-box-open', 'text' => 'Product', 'route' => '/admin/product'],
     ['icon' => 'fas fa-shopping-cart', 'text' => 'Order', 'route' => '/admin/order'],
     ['icon' => 'fas fa-chart-line', 'text' => 'Report', 'route' => '/admin/report']];
@endphp


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @foreach ($menuItems as $item)
                    <li class="nav-item">
                        <a href="{{ url($item['route']) }}"
                            class="nav-link {{ request()->is($item['route']) ? 'active' : '' }}">
                            <i class="{{ $item['icon'] }} nav-icon"></i>
                            <p>{{ $item['text'] }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
