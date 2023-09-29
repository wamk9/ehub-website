<div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="{{ route('admin.dashboard') }}" class="nav_logo">
          <i class="bx bx-layer nav_logo-icon"></i>
          <span class="nav_logo-name">{{env('APP_NAME')}}</span>
        </a>
        <div class="nav_list">
            @foreach ($navLinks as $nav)
                <x-sidebar-nav
                    :link="$nav['link']"
                    :icon="$nav['icon']"
                    :name="$nav['name']"
                    :active="$nav['active']"
                />
            @endforeach
        </div>
      </div>
      <a href="{{ route('admin.logout') }}" class="nav_link">
        <i class="bx bx-log-out nav_icon"></i>
        <span class="nav_name">Logout</span>
      </a>
    </nav>
  </div>
