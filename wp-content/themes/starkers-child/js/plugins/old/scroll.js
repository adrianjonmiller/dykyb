// jQuery Plugin Boilerplate
// A boilerplate for jumpstarting jQuery plugins development
// version 1.1, May 14th, 2011
// by Stefan Gabos

(function($) {

    $.scroll = function(element, options) {

      var defaults = {
          foo: 'bar',
          onFoo: function() {}
      }

      var plugin = this;

      plugin.settings = {}

      var $element = $(element),
           element = element;

      plugin.init = function() {
        plugin.settings = $.extend({}, defaults, options);

        $element.on('click', function(e){
          e.preventDefault();
          var target = $(e.target).attr("href");
          if(target) {
            var slug = [];
            slug = target.split('/');
            var target_id = "#" + slug[slug.length-2];
            var offset = $(target_id).offset();
            $('html, body').animate({
              scrollTop: offset.top
            }, 1000);
             window.history.pushState("object or string", "Title", target_id);
             $element.children('li').removeClass('current-menu-item');
             $(e.target).parent('li').addClass('current-menu-item');
          }
          var test = $('#page').data('view').urls();
        });
      }

      plugin.foo_public_method = function() {
          // code goes here
      }

      var foo_private_method = function() {
          // code goes here
      }

      plugin.init();

    }

  $.fn.scroll = function(options) {

    return this.each(function() {
      if (undefined == $(this).data('scroll')) {
        var plugin = new $.scroll(this, options);
        $(this).data('scroll', plugin);
      }
    });

  }

})(jQuery);
// Usage

// $(document).ready(function() {

//     // attach the plugin to an element
//     $('#element').scroll({'foo': 'bar'});

//     // call a public method
//     $('#element').data('scroll').foo_public_method();

//     // get the value of a property
//     $('#element').data('scroll').settings.foo;

// });