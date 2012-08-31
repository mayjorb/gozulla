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
    // view links
    $('a#shops-link').attr('href',
    $('a#shops-link').attr('href')+location.search);
    $('a#lodging-link').attr('href',
    $('a#lodging-link').attr('href')+location.search);
    $('a#deals-link').attr('href',
    $('a#deals-link').attr('href')+location.search);
    // main menu links
    $('#menu-896-1 a.sf-depth-1').attr('href',
    $('#menu-896-1 a.sf-depth-1').attr('href')+location.search);
    $('#menu-897-1 a.sf-depth-1').attr('href',
    $('#menu-897-1 a.sf-depth-1').attr('href')+location.search);
    $('#menu-895-1 a.sf-depth-1').attr('href',
    $('#menu-895-1 a.sf-depth-1').attr('href')+location.search);
    $('#menu-898-1 a.sf-depth-1').attr('href',
    $('#menu-898-1 a.sf-depth-1').attr('href')+location.search);
    $('#menu-892-1 a.sf-depth-1').attr('href',
    $('#menu-892-1 a.sf-depth-1').attr('href')+location.search);
    $('#menu-893-1 a.sf-depth-1').attr('href',
    $('#menu-893-1 a.sf-depth-1').attr('href')+location.search);
    $('#menu-891-1 a.sf-depth-1').attr('href',
    $('#menu-891-1 a.sf-depth-1').attr('href')+location.search);
    // sports menu links
    $('#block-menu-menu-sport-links ul li.menu-item-1252 a').attr('href',
    $('#block-menu-menu-sport-links ul li.menu-item-1252 a').attr('href')+location.search);
    $('#block-menu-menu-sport-links ul li.menu-item-1254 a').attr('href',
    $('#block-menu-menu-sport-links ul li.menu-item-1254 a').attr('href')+location.search);
    $('#block-menu-menu-sport-links ul li.menu-item-1253 a').attr('href',
    $('#block-menu-menu-sport-links ul li.menu-item-1253 a').attr('href')+location.search);
    $('#block-menu-menu-sport-links ul li.menu-item-1255 a').attr('href',
    $('#block-menu-menu-sport-links ul li.menu-item-1255 a').attr('href')+location.search);
    $('#block-menu-menu-sport-links ul li.menu-item-1250 a').attr('href',
    $('#block-menu-menu-sport-links ul li.menu-item-1250 a').attr('href')+location.search);
    $('#block-menu-menu-sport-links ul li.menu-item-1251 a').attr('href',
    $('#block-menu-menu-sport-links ul li.menu-item-1251 a').attr('href')+location.search);
    $('#block-menu-menu-sport-links ul li.menu-item-1249 a').attr('href',
    $('#block-menu-menu-sport-links ul li.menu-item-1249 a').attr('href')+location.search);
  }
});
})(jQuery);
