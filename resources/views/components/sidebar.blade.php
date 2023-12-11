<aside style="height: 100vh;" class="d-flex justify-content-center p-4 position-absolute d-none d-md-block" id="sidebar">
  <div class="sidebar">

    <div class="d-flex justify-content-end d-block d-md-none">
      <iconify-icon icon="uil:times" class="text-white" width="30px" id="icon-close"></iconify-icon>
    </div>

    <header class="d-flex justify-content-center" id="logo-sidebar">
      <img src="{{ asset('assets/img/second-logo.png') }}" alt="" width="200px">
    </header>

    @role('admin')
      <div class="list-group mt-5">
        <a href="/admin/dashboard"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/dashboard') ? 'side-active' : '' }}"
          style="margin-right: 150px;"><iconify-icon icon="radix-icons:dashboard" width="24"></iconify-icon>
          &nbsp;&nbsp;
          Dashboard</a>
        <a href="/admin/news"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/news') ? 'side-active' : '' }} {{ Request::is('admin/news/*') ? 'side-active' : '' }}"
          style="margin-right: 150px;"> <iconify-icon icon="ph:read-cv-logo-bold" width="24"></iconify-icon>
          &nbsp;&nbsp;
          News</a>
        <a href="/admin/division"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/division') ? 'side-active' : '' }} {{ Request::is('admin/division/*') ? 'side-active' : '' }} "
          style="margin-right: 150px;"> <iconify-icon icon="fluent-mdl2:group" width="24"></iconify-icon>
          &nbsp;&nbsp;
          Division</a>
        <a href="{{ route('admin.users') }}"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/users') ? 'side-active' : '' }} {{ Request::is('admin/users/*') ? 'side-active' : '' }} "
          style="margin-right: 150px;"> <iconify-icon icon="ph:user" width="24"></iconify-icon>
          &nbsp;&nbsp;
          Users</a>
        <a href="/admin/gallery"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/gallery') ? 'side-active' : '' }} {{ Request::is('admin/gallery/*') ? 'side-active' : '' }} "
          style="margin-right: 150px;"> <iconify-icon icon="solar:gallery-outline" width="24"></iconify-icon>
          &nbsp;&nbsp;
          Gallery</a>
        <a href="/admin/e-learning"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/e-learning') ? 'side-active' : '' }} {{ Request::is('admin/e-learning/*') ? 'side-active' : '' }}"
          style="margin-right: 150px;"> <iconify-icon icon="carbon:machine-learning-model" width="24"></iconify-icon>
          &nbsp;&nbsp;
          E-Learning</a>
        <a href="/admin/presence/division-1"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/presence') ? 'side-active' : '' }} {{ Request::is('admin/presence/*') ? 'side-active' : '' }}"
          style="margin-right: 150px;"> <iconify-icon icon="lucide:check-circle" width="24"></iconify-icon>
          &nbsp;&nbsp;
          Presence</a>
      </div>
    @endrole

    @if (Auth::user()->hasPermissionTo('admin-division') || Auth::user()->hasRole('user'))
      <div class="list-group mt-5">
        <a href="/dashboard"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('dashboard') ? 'side-active' : '' }}"
          style="margin-right: 150px;"><iconify-icon icon="radix-icons:dashboard" width="24"></iconify-icon>
          &nbsp;&nbsp;
          Dashboard</a>
        <a href="/users"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('users') ? 'side-active' : '' }} {{ Request::is('users/*') ? 'side-active' : '' }} "
          style="margin-right: 150px;"> <iconify-icon icon="ph:user" width="24"></iconify-icon>
          &nbsp;&nbsp;
          Users</a>
        <a href="/e-learning"
          class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('e-learning') ? 'side-active' : '' }} {{ Request::is('e-learning/*') ? 'side-active' : '' }} {{ Request::is('admin/e-learning/*') ? 'side-active' : '' }}"
          style="margin-right: 150px;"> <iconify-icon icon="carbon:machine-learning-model"
            width="24"></iconify-icon>
          &nbsp;&nbsp;
          E-Learning</a>
        @if (Auth::user()->hasPermissionTo('admin-division'))
          <a href="/presence/division-{{ Auth::user()->division_id }}"
            class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('presence') ? 'side-active' : '' }} {{ Request::is('presence/*') ? 'side-active' : '' }} {{ Request::is('admin/presence/*') ? 'side-active' : '' }}"
            style="margin-right: 150px;"> <iconify-icon icon="lucide:check-circle" width="24"></iconify-icon>
            &nbsp;&nbsp;
            Presence</a>
        @endif

      </div>
    @endif
</aside>
