// jQuery Plugin Boilerplate
// A boilerplate for jumpstarting jQuery plugins development
// version 1.1, May 14th, 2011
// by Stefan Gabos

(function($) {

    $.scrollTo = function(element, options) {

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
            console.log("success")
            $element.children('.page').each(function(){
              var offset = $(this).offset();
              console.log("test");
            });

            // code goes here
        }

        plugin.foo_public_method = function() {
            // code goes here
        }

        var foo_private_method = function() {
            // code goes here
        }

        plugin.init();

    }

    $.fn.scrollTo = function(options) {

        return this.each(function() {
            if (undefined == $(this).data('scrollTo')) {
                var plugin = new $.scrollTo(this, options);
                $(this).data('scrollTo', plugin);
            }
        });

    }

})(jQuery);
// Usage

// $(document).ready(function() {

//     // attach the plugin to an element
//     $('#element').scrollTo({'foo': 'bar'});

//     // call a public method
//     $('#element').data('scrollTo').foo_public_method();

//     // get the value of a property
//     $('#element').data('scrollTo').settings.foo;

// });