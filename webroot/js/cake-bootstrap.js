$(function(){

	uiTools();

});

$( document ).ajaxComplete(function(event, xhr, settings) {

	uiTools();

});

function uiTools() {

	$('textarea.autosize').autosize();
	$(".select2").select2();
	$(".datepicker").datepicker({
		format: "yyyy-mm-dd", 
	    todayBtn: "linked", 
	    calendarWeeks: true, 
	    autoclose: false, 
	    todayHighlight: true, 
	    startView: 1
	});

}

