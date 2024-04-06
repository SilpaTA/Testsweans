$(document).ready(function() {

  $(".slick-slider").slick({
   slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:false,
    infinite: true,
			  autoplay: false,
				autoplaySpeed: 4000,
				speed: 1000,
			  arrows: true,
			  dots: false,
			  cssEase: 'linear',
			  pauseOnHover:false,
			  responsive: [
						{
						  breakpoint: 991,
						  settings: {
							slidesToShow: 3
						  }
						},
						{
						  breakpoint: 767,
						  settings: {
							slidesToShow: 2
						  }
						}
						
					  ]
			});
  




			
			
			
			

			
			
			
			
			$('.nav-pills > li > a').hover(function() {
			  $(this).tab('show');
			});
			
			
			
			


			$(".preLoader").addClass("animated fadeOut");
				setTimeout(function() {
					$(".preLoader").css("display", "none");
				}, 1500);
				
			
			$(window).scroll(function(){ 
				if ($(this).scrollTop() > 200) { 
					$('#scroll').fadeIn(); 
				} else { 
					$('#scroll').fadeOut(); 
				} 
			}); 
			
			$('#scroll').click(function(){ 
				$("html, body").animate({ scrollTop: 0 }, 600); 
				return false; 
			});
			
		
			
			AOS.init({
				easing: 'ease-in-out-sine',
				disable: 'mobile'
			  });
			  
			  AOS.init({
			  disable: function() {
				var maxWidth = 1000;
				return window.innerWidth < maxWidth;
			  }
			});
			
			
			  
		  
			  
		$(window).scroll(function() {
			
			//$("nav").toggleClass("fixed-top", $(this).scrollTop() > 180);
			
			if($(this).scrollTop() > 100){
				$("header").addClass("fixed-top");
			} else {
				$("header").removeClass("fixed-top");
			}
		});
		
			
			
		
		  Fancybox.bind("[data-custombox]", {
		  groupAttr: "data-custombox",
		});
		
		
		    





});


  
	  
    