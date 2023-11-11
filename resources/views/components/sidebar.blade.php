<aside style="height: 100vh;" class="d-flex justify-content-center p-4 position-absolute" class="margin-right: 100px;">
  <div class="sidebar">
    <header class="d-flex justify-content-center">
      <img src="{{ asset('assets/img/second-logo.png') }}" alt="" width="200px">
    </header>

    <div class="list-group mt-5">
      <a href="/admin/dashboard"
        class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/dashboard') ? 'side-active' : '' }}"
        style="margin-right: 150px;"><iconify-icon icon="radix-icons:dashboard" width="24"></iconify-icon>
        &nbsp;&nbsp;
        Dashboard</a>
      <a href="/admin/news"
        class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/news') ? 'side-active' : '' }}"
        style="margin-right: 150px;"> <iconify-icon icon="ph:read-cv-logo-bold" width="24"></iconify-icon>
        &nbsp;&nbsp;
        News</a>
      <a href="/admin/division"
        class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/division') ? 'side-active' : '' }}"
        style="margin-right: 150px;"> <iconify-icon icon="fluent-mdl2:group" width="24"></iconify-icon>
        &nbsp;&nbsp;
        Division</a>
      <a href="/admin/user"
        class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/user') ? 'side-active' : '' }}"
        style="margin-right: 150px;"> <iconify-icon icon="ph:user" width="24"></iconify-icon>
        &nbsp;&nbsp;
        User</a>
      <a href="/admin/gallery"
        class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/gallery') ? 'side-active' : '' }}"
        style="margin-right: 150px;"> <iconify-icon icon="solar:gallery-outline" width="24"></iconify-icon>
        &nbsp;&nbsp;
        Gallery</a>
      <a href="/admin/e-learning"
        class="list-item text-white border-0 py-3 px-3 text-decoration-none d-flex align-items-center text-white w-100 mb-2 {{ Request::is('admin/e-learning') ? 'side-active' : '' }}"
        style="margin-right: 150px;"> <iconify-icon icon="carbon:machine-learning-model" width="24"></iconify-icon>
        &nbsp;&nbsp;
        E-Learning</a>
    </div>
</aside>
