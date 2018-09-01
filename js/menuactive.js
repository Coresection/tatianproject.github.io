$(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 
	var is_root = location.pathname == "/";
    
    // passes on every "a" tag 
    $("#nav li a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).closest("a").addClass("active");
        }
        if (is_root == true) {
        	$('#nav li:first-child a').addClass("active");
        }
    });
});