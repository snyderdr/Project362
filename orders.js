function DatePicker() {
    $.datepicker.setDefaults($.extend(
	$.datepicker.regional[''])
	);
	$('#datepickerLab'+LabsAdd).datepicker({
	beforeShow: function(input) {
	$(input).css('background-color','#ff0');
	},
	onSelect: function(dateText, obj) {
	$(this).css('background-color','');
	//alert('Selected: ' + dateText +	"\n\nid: " + obj.id + "\nselectedDay: " + obj.selectedDay +	"\nselectedMonth: " + obj.selectedMonth + "\nselectedYear: " + obj.selectedYear);
	},
	onClose: function(dateText, obj) {
	$(this).css('background-color','');
    
	}
	});
}

function Date() {
var now = new Date();
now.format("m/dd/yy");


alert(now);
}

