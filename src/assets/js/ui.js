document.addEventListener('DOMContentLoaded', function() {
  // nav menu
  const menus = document.querySelectorAll('.sidenav');
  M.Sidenav.init(menus, {edge: 'right'});

  const slider = document.querySelectorAll('.slider');
  M.Slider.init(slider, {
  	indicators: true,
  	duration: 500,
  	interval: 4000,
  });

  const photos = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(photos);

  const inputSelect = document.querySelectorAll('select');
  M.FormSelect.init(inputSelect);

  const modals = document.querySelectorAll('.modal');
  M.Modal.init(modals);

  const elemsCollapsible = document.querySelector('.collapsible');
  M.Collapsible.init(elemsCollapsible);

  let searchBox = document.getElementById('search-box');
  let searchOpen = document.getElementById('search-open');
  let searchClose = document.getElementById('search-close');

  /* searchOpen.addEventListener('click', (e) => {
    e.preventDefault();
    searchBox.style.display = 'block';
  });

  searchClose.addEventListener('click', (e) => {
    e.preventDefault();
    searchBox.style.display = 'none';
  }); **/

  
});