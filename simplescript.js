$(document).ready(function() {
	var truearray = "";
	var fakearray = "";

	function dostuff() {
		if ($("#tags").val().length > 0) {
	    	fakearray = fakearray + "<span class = 'spanstyle'>" + $('#tags').val() + "</span>";
	    	truearray = truearray + "{" + $('#tags').val() + "}";

	    	$("#truetags").val(truearray);
	    	$(".tags").html(fakearray);

		}
	}

	$('#tagger').click(function(){  
	    dostuff();
	});

	$("#tags").on('keyup', function (e) {
    	if (e.keyCode == 13) {
        	dostuff();
        	$("#tags").val("");
    	}
	});

	$("form :input").on('keypress', function(e) {
		if(event.target.tagName != 'TEXTAREA') {
	    	return e.which !== 13;
		}
	});
});