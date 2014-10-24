DLN.Behaviors.masonry = function(container) {
	$(document).ready(function(){
		container.masonry({
			itemSelector: '.product',
			columnWidth: 60,
			gutter: 24
		});
	});
};

DLN.Behaviors.flexslider = function(container) {
	container.flexslider({
		direction: "vertical",
		animation: "slide",
		controlNav: false,
		randomize: true
	});
};

// DLN.Behaviors.setPageSize = function(container) {
// 	(function(){
// 		// container.css('min-width', $(window).width());
// 		container.css('min-height', $(window).height());
// 	})();
// 	$(window).on('resize', function(){
// 		// container.css('min-width', $(window).width());
// 		container.css('min-height', $(window).height());
// 	});
// };

// DLN.Behaviors.inView = function(container) {
// 	container.bind('inview', function(event, isInView, visiblePartX, visiblePartY){
// 		if(visiblePartY == 'top') {
// 			$('.current-menu-item').removeClass('current-menu-item');

// 			var $this = $(this),
// 			$link = $('#main-menu').find("a[href='" + $this.attr('data-url') + "']");
// 			$link.parent().addClass('current-menu-item');
// 		}
// 	});
// };

// DLN.Behaviors.mainMenu = function(container) {
// 	var $pages = $("#page");

// 	container.on('click', 'a', function(e){
// 		e.preventDefault();
// 		var $this = $(this),
// 		$page = $pages.find(".page[data-url='" + $this.attr('href') + "']");
// 		var offset = $page.offset().top;
// 		$('html, body').animate({
//         scrollTop: offset
//     }, 500);
// 	});
// };

// DLN.Behaviors.secondMenu = function(container) {

// 	var $modal = $("<div>").attr('id', 'modal');
// 	var $element = $("<div>").attr('data-behavior', 'modal');

// 	container.on('click', 'a', function(e){
// 		e.preventDefault();
// 		var url = $(e.target).attr('href');
// 		$.ajax({
//       url: url,
//       async: false
//     }).done(function( data ) {
//     	$element.append(data)
//       $modal.append($element);
//       $('#main').append($modal);
//       DLN.LoadBehavior($modal);
//     });
// 	});
// };

// DLN.Behaviors.modal = function(container) {
// 	container.on('submit', 'form', function(e){
// 		e.preventDefault();
// 		$this = $(e.target);
// 		var url = $this.attr('action');
// 		var data = $this.serialize();
// 		console.log(data);
// 		$.ajax({
//       url: url,
//       type: 'post',
//       data: data,
//     	success: function( data ) {
//     		console.log('success');
// 	     	container.html(data);
// 	      DLN.LoadBehavior(container);
//     	}
//     });
// 	});
// };

// DLN.Behaviors.loadPage = function(container) {
// 	var url = container.attr('data-url');
// 	$.ajax({
//       url: url,
//       async: false
//     }).done(function( data ) {
//       var $element = data;
//       container.append($element);
//       DLN.LoadBehavior(container);
//     });
// };

// DLN.Behaviors.shop = function(container) {

// 	var $modal = $("<div>").attr('id', 'modal');
// 	var $element = $("<div>").attr('data-behavior', 'shopModal');

// 	container.on('click', 'a', function(e){
// 		e.preventDefault();
// 		var url = $(e.currentTarget).attr('href');
// 		console.log(url);
// 		$.ajax({
//       url: url,
//       async: false
//     }).done(function( data ) {
//     	$element.append(data)
//       $modal.append($element);
//       $('#main').append($modal);
//       DLN.LoadBehavior($modal);
//     });
// 	})
// }