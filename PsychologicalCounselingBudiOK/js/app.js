$(document).ready(function(){
	//Navbar
	$("#home a:contains('NASLOVNA')").parent().addClass('active');
	$(".service a:contains('USLUGE')").parents("li").addClass('active');
	$(".article-category a:contains('ČLANCI')").parent().addClass('active');
	$("#ta a:contains('T.A.')").parent().addClass('active');
	$("#biography a:contains('BIOGRAFIJA')").parent().addClass('active');
	$(".contact a:contains('KONTAKT')").parent().addClass('active');
	
	if($("#partnerskoSavetovanje a:contains('Partnersko savetovanje')").parent().hasClass('active')){
		$(".dropdown a:contains('USLUGE')").parent().addClass('active');	
	}	
	
	$("ul.nav li.dropdown").hover(function(){
		$(".dropdown-menu", this).fadeIn();
		$(".dropdown-menu", this).parents("li").addClass('active');
	}, function(){
		$(".dropdown-menu", this).fadeOut("fast");
		$(".dropdown-menu", this).parents("li").removeClass('active');
	})
	
	
	//Carousel
	$("#myCarousel").carousel({
		interval: 7000
	});
	
	$(".left").click(function(){
    	$("#myCarousel").carousel("prev");
	});
	
	$(".right").click(function(){
    	$("#myCarousel").carousel("next");
	});
	
	//Article-Category
	
		
});

//Article-Category
	function goBack(){
		window.history.back();
	}
	
	function showHide(){
		$('#reference').toggle();
		
	}

	
	