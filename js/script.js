$(document).ready(function() {
    $('#datatable1').dataTable( {
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bSort": false,
        "bInfo": false,
"sDom": '',
 "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "bAutoWidth": false
    } );
} );

$(document).ready(function() {
    $('#datatable2').dataTable( {
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bSort": false,
        "bInfo": false,
"sDom": '',
 "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "bAutoWidth": false
    } );
} );

$(document).ready(function() {
    $('#datatable3').dataTable( {
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bSort": false,
        "bInfo": false,
"sDom": '',
 "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "bAutoWidth": false
    } );
} );

$(document).ready(function() {
    $('#datatable4').dataTable( {
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bSort": false,
        "bInfo": false,
"sDom": '',
 "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "bAutoWidth": false
    } );
} );

 $(document).ready(function() {
var uid = 1;
    $(".edit").editable("admin/edit_variable",
    	    {
    	    	indicator : 'Saving...',
    	    	id   : 'elementid',
    	    	onblur : 'submit',
    	        tooltip   : 'Click to edit...',
    	        submitdata : function()
    	        {
    	            return {id : uid};
    }


    	    });
});


//wymeditor
jQuery(function() {
    jQuery('.wymeditor').wymeditor();
});


$(document).ready(function(){
    setTimeout(function() { $('#warningbox').fadeOut(); }, 5000);
});

//Modal dialog increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 500;
$(document).ready(function(){
		$( "#dialog" ).dialog({
			autoOpen: false,
			show: "fade",
			hide: "fade"
		});

		$( "#opener" ).click(function() {
			$( "#dialog" ).dialog( "open" );
			return false;
		});
	});
        
$(document).ready(function(){
		$( "#quotedialog" ).dialog({
			autoOpen: false,
			show: "fade",
			hide: "fade"
		});

		$( "#quoteopener" ).click(function() {
			$( "#quotedialog" ).dialog( "open" );
			return false;
		});
	});










