// jQuery Plugin Boilerplate
// A boilerplate for jumpstarting jQuery plugins development
// version 1.1, May 14th, 2011
// by Stefan Gabos

(function($) {

    $.view = function(element, options) {

      var defaults = {
          urls: ''
      }

      var plugin = this;

      plugin.settings = {}

      var $element = $(element),
           element = element;

      plugin.init = function() {
        plugin.settings = $.extend({}, defaults, options);
        $element.hide();
        
        var urls = plugin.urls();
        
        for(var i=0;i<urls.length-1;i++) {
          $.ajax({
            url: urls[i],
            async: false
          }).done(function( data ) {
            var target = urls[i];
            var target_id = [];
            target_id = target.split('/');
            $element.append($('<div>').attr('class', 'page').attr('id', target_id[target_id.length-2]).attr('data-behavior', 'setPageHeight').append(data));
            DLN.LoadBehavior($element);
          });
        }
        $element.show();

          // code goes here
      }

      plugin.urls = function() {
        return plugin.settings.urls.split(',');
      }

      var foo_private_method = function() {
          // code goes here
      }

      plugin.init();

    }

    $.fn.view = function(options) {

        return this.each(function() {
            if (undefined == $(this).data('view')) {
                var plugin = new $.view(this, options);
                $(this).data('view', plugin);
            }
        });

    }

})(jQuery);
// Usage

// $(document).ready(function() {

//     // attach the plugin to an element
//     $('#element').view({'foo': 'bar'});

//     // call a public method
//     $('#element').data('view').foo_public_method();

//     // get the value of a property
//     $('#element').data('view').settings.foo;

// });