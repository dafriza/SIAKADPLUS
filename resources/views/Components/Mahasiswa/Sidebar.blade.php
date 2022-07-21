<nav class="sidebar">
    <div class="sidebar-header">
        <a href="/mahasiswa/dasbor" class="sidebar-brand">
            SIAKAD<span>+</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="/mahasiswa/dasbor" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Course</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#dataTable" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="book-open"></i>
                    <span class="link-title">Course List</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="dataTable">
                    <ul class="nav sub-menu">
                        @foreach ($count_course as $val)
                        <li class="nav-item">
                            <a href="/mahasiswa/learn/{{$val->id_course}}" class="nav-link">
                                {{$val->title}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Profile</li>
            <li class="nav-item">
                <a href="/mahasiswa/profile" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">My Profile</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="{{ asset('#') }}" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted">Sidebar:</h6>
        <div class="form-group border-bottom">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                        value="sidebar-light" checked>
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                        value="sidebar-dark">
                    Dark
                </label>
            </div>
        </div>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Theme:</h6>
            <a class="theme-item active" href="{{ asset('../demo_1/dashboard-one.html') }}">
                <img src="{{ asset('../assets/images/screenshots/light.jpg') }}" alt="light theme">
            </a>
            <h6 class="text-muted mb-2">Dark Theme:</h6>
            <a class="theme-item" href="{{ asset('../demo_2/dashboard-one.html') }}">
                <img src="{{ asset('../assets/images/screenshots/dark.jpg') }}" alt="light theme">
            </a>
        </div>
    </div>
</nav>
