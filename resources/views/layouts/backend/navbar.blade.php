<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <div class="user-name">
        @auth
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Profile icon and username -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-user-circle"></i>
                        {{ auth()->user()->name }}
                    </a>
                </li>
                <div class="dropdown-menu">
                    <a href="">Profile</a>
                    <a href="javascript:;" onclick="logout()">Logout</a>
                </div>
            </ul>
        @endauth
    </div>
</nav>
