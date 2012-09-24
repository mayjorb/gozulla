(function ($) {
Drupal.behaviors.clear_location = {
  attach: function(context) {
    $('#edit-circle-location.form-text', context).once(function(){  
      this.defaultValue = this.value;
      $(this).click(function(){
        if(this.value == this.defaultValue){
          $(this).val("");
        }
        return false;
      });
      $(this).blur(function(){
        if(this.value == ""){
          $(this).val(this.defaultValue);
        }
      });
    });
  }
}
})(jQuery);

(function ($) {
Drupal.behaviors.clear_distance = {
  attach: function(context) {
    $('#edit-circle-value.form-text', context).once(function(){  
      this.defaultValue = this.value;
      $(this).click(function(){
        if(this.value == this.defaultValue){
          $(this).val("");
        }
        return false;
      });
      $(this).blur(function(){
        if(this.value == ""){
          $(this).val(this.defaultValue);
        }
      });
    });
  }
}
})(jQuery);


(function ($){
$(document).ready(function() {
  if (location.search) {
    // views links
    $('a#shops-link').attr('href',
    $('a#shops-link').attr('href')+location.search);
    $('a#lodging-link').attr('href',
    $('a#lodging-link').attr('href')+location.search);
    $('a#deals-link').attr('href',
    $('a#deals-link').attr('href')+location.search);
    // main menu links
    $('#block-system-main-menu ul li.menu-item-896 a').attr('href',
    $('#block-system-main-menu ul li.menu-item-896 a').attr('href')+location.search);
    $('#block-system-main-menu ul li.menu-item-897 a').attr('href',
    $('#block-system-main-menu ul li.menu-item-897 a').attr('href')+location.search);
    $('#block-system-main-menu ul li.menu-item-895 a').attr('href',
    $('#block-system-main-menu ul li.menu-item-895 a').attr('href')+location.search);
    $('#block-system-main-menu ul li.menu-item-898 a').attr('href',
    $('#block-system-main-menu ul li.menu-item-898 a').attr('href')+location.search);
    $('#block-system-main-menu ul li.menu-item-892 a').attr('href',
    $('#block-system-main-menu ul li.menu-item-892 a').attr('href')+location.search);
    $('#block-system-main-menu ul li.menu-item-893 a').attr('href',
    $('#block-system-main-menu ul li.menu-item-893 a').attr('href')+location.search);
    $('#block-system-main-menu ul li.menu-item-891 a').attr('href',
    $('#block-system-main-menu ul li.menu-item-891 a').attr('href')+location.search);
  }

  $(document.getElementById('findme-link').href = location.href.substring(0,location.href.indexOf('?')));

});
 
})(jQuery);