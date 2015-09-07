(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$("aside").addClass("list-group").css("margin-top", "15px");
		
		$("aside div").addClass("list-group-item");
		
		$("aside").find('div h3').replaceWith(function() {
			return '<h4 class="list-group-item-heading">' + $(this).html() + '</h4>';
		});
		
		$("aside ul").addClass("nav nav-pills nav-stacked");
		
		$(".comments > ul").addClass("list-group");
		
		$(".comment-body").addClass("list-group-item").css("margin-bottom", "1em");
		
		// $(".comment-meta a:first-child").addClass("btn btn-default btn-xs disabled");
		
		$(".comments").find('.comment-meta').replaceWith(function() {
			return '<p><small class="comment-meta commentmetadata">' + $(this).html() + '</small></p>';
		});
		
		$(".comment-reply-link").addClass("btn btn-info btn-xs");
		
		$(".comments").find('.comment-author').replaceWith(function() {
			return '<h4 class="comment-author vcard list list-group-item-heading">' + $(this).html() + '</h4>';
		});
		
		$("#diploma-link").click(function () {
			$("#diploma").modal('show');
		});
		
		$("#wp-caption").addClass("panel panel-default");
		$("#wp-caption").children().first().wrap("<div class='panel-body'></div>");
		$("#wp-caption-text").addClass("panel-footer");
		
	});
	
})(jQuery, this);
