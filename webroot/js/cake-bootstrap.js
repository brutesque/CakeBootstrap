function uiTools() {

	$('textarea.autosize').autosize({
		append: ""
	}).show().trigger('autosize.resize');
	
	$(".select2").select2({
		escapeMarkup: function(m) {
			return m;
		}
	});
	$(".datepicker").datepicker({
		format: "yyyy-mm-dd", 
	    todayBtn: "linked", 
	    calendarWeeks: true, 
	    autoclose: false, 
	    todayHighlight: true, 
	    startView: 1
	});
	
}
$('.panel-collapse').on('show.bs.collapse', function (event) {
	$toggleButton = $('.' + event.target.id + '-toggle');
	if( $toggleButton.hasClass('collapsed') ) {
		$toggleButton.find('span.glyphicon-chevron-down').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-right');
	} else {
		$toggleButton.find('span.glyphicon-chevron-right').removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-down');
	}
});
$('.panel-collapse').on('shown.bs.collapse', function (event) {
	$toggleButton = $('.' + event.target.id + '-toggle');
	if( $toggleButton.hasClass('collapsed') ) {
		$toggleButton.find('span.glyphicon-chevron-down').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-right');
	} else {
		$toggleButton.find('span.glyphicon-chevron-right').removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-down');
	}
});
$('.panel-collapse').on('hide.bs.collapse', function (event) {
	$toggleButton = $('.' + event.target.id + '-toggle');
	if( $toggleButton.hasClass('collapsed') ) {
		$toggleButton.find('span.glyphicon-chevron-down').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-right');
	} else {
		$toggleButton.find('span.glyphicon-chevron-right').removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-down');
	}
});
$('.panel-collapse').on('hidden.bs.collapse', function (event) {
	$toggleButton = $('.' + event.target.id + '-toggle');
	if( $toggleButton.hasClass('collapsed') ) {
		$toggleButton.find('span.glyphicon-chevron-down').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-right');
	} else {
		$toggleButton.find('span.glyphicon-chevron-right').removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-down');
	}
});

$(function(){
	uiTools();
});

$( document ).ajaxComplete(function(event, xhr, settings) {
	uiTools();
});

$('.panel-collapse').on('shown.bs.collapse', function () {
	uiTools();
});


