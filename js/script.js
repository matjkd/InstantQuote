$(document).ready(function() {

	//show/hide lease or freehold on local page
	$('#showlease').click(function() {

		$('#freeholdbox').hide();
		$('#leaseholdbox').fadeIn();
	});
	
	$('#showfreehold').click(function() {

		$('#leaseholdbox').hide();
		$('#freeholdbox').fadeIn();
	});

});
