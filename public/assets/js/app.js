var iconMenu = document.getElementById('icon-hamburger');
  var iconClose = document.getElementById('icon-close');
  var sidebar = document.getElementById('sidebar');

  iconMenu.addEventListener('click', function() {
    sidebar.classList.remove('d-none');
    alert('ok')
  });

  iconClose.addEventListener('click', function() {
    sidebar.classList.add('d-none');
  });

