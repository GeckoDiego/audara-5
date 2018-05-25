// Auto update sidenav
$(document).ready(function(){
  var sidenav = $(".sidenav-vertical");
  var collapsed = $(".dbcollapsed");
  var expanded = $(".demo-brand");
  if( $(sidenav).width() != 70 ){
    $(expanded).removeClass('d-none');
    $(collapsed).addClass('d-none'); 
  }else{
    $(expanded).addClass('d-none');
      $(collapsed).removeClass('d-none');
  }
  $(sidenav).on('mouseover', function(){      
      $(expanded).removeClass('d-none');
      $(collapsed).addClass('d-none');
  });
  $(sidenav).on('mouseout', function(event){
      $(expanded).addClass('d-none');
      $(collapsed).removeClass('d-none');
      if( $(this).width() == 250 ){
        $(expanded).removeClass('d-none');
        $(collapsed).addClass('d-none');        
        if( $("html").attr('class') == "default-style layout-collapsed" ){
          $(expanded).addClass('d-none');
          $(collapsed).removeClass('d-none');
        }        
      }
  });
});
// Auto update layout
(function() {
  window.layoutHelpers.setAutoUpdate(true);  
})();

// Collapse menu
(function() {
  if ($('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
    return;
  }

  try {
    window.layoutHelpers.setCollapsed(      
      localStorage.getItem('layoutCollapsed') === 'true',
      false
    );
  } catch (e) {}
})();

$(function() {
  // Initialize sidenav
  $('#layout-sidenav').each(function() {
    new SideNav(this, {
      orientation: $(this).hasClass('sidenav-horizontal') ? 'horizontal' : 'vertical'
    });
  });

  // Initialize sidenav togglers
  $('body').on('click', '.layout-sidenav-toggle', function(e) {
    e.preventDefault();
    window.layoutHelpers.toggleCollapsed();
    if (!window.layoutHelpers.isSmallScreen()) {
      try { 
        localStorage.setItem('layoutCollapsed', String(window.layoutHelpers.isCollapsed()));        
      } catch (e) {
      }
    }
  });

  if ($('html').attr('dir') === 'rtl') {
    $('#layout-navbar .dropdown-menu').toggleClass('dropdown-menu-right');
  }
});
