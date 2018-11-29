/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
 function myFunction() {
 	var x = document.getElementById("myTopnav");
 	if (x.className === "topnav") {
 		x.className += " responsive";
 	} else {
	 		x.className = "topnav";
 	}
}

// Page Loader
document.addEventListener("DOMContentLoaded", function(){
	$('.preloader-background').delay(250).fadeOut('slow');

	$('.preloader-wrapper')
		.delay(250)
		.fadeOut();
});

$('.arrowscroller').click(function(){
    var fuller = $(this).closest('.aftercontent2').next(),
        section = $(this).closest('.aftercontent2');

    section.animate({
        scrollTop: section.scrollTop() + fuller.offset().top
    }, 700);
});



// function moveISS() {
// 	$.getJSON('http://api.open-notify.org/iss-now.json?callback=?', function (data) {
// 		var lat = data['iss_position']['latitude'];
// 		var lon = data['iss_position']['longitude'];

// 		// See leaflet docs for setting up icons and map layers
// 		// The update to the map is done here:
// 		iss.setLatLng([lat, lon]);
// 		isscirc.setLatLng([lat, lon]);
// 		map.panTo([lat, lon], animate = true);
// 	});
// 	setTimeout(moveISS, 5000);
// }



