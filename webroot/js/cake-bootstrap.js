$(function(){

	uiTools();

});

$( document ).ajaxComplete(function(event, xhr, settings) {

	uiTools();

});

function uiTools() {

	$('textarea.autosize').autosize({
		append: ""
	});
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

