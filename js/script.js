// Header Stiky Scroll
window.onscroll = function() {myFunction()};

var header = document.getElementById("navContainer");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

$(window).on("load", function() {
    $('#pageLoader').fadeOut('slow');

    $('.homeSlider').slick({
	    infinite: true,
		speed: 300,
		autoplay: true,
		arrows:false,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		asNavFor: '.textSlider'
		//fade: true
	});
	$('.textSlider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.homeSlider',
		focusOnSelect: true
	});
	// animating svg with vivus
    var svgArray = ['shield', 'medicine', 'doctor'];
    var i;
    for (i=0; i<svgArray.length; i++) {
        new Vivus(svgArray[i], {
            duration: 200,
            file: 'assets/' + svgArray[i] + '.svg'
        });
    }
});