$(document).ready(function() {
	// Create slideshow object
	var slideshow = {
		slides: $(".slideshow .slide"),
		pager: $(".slideshow-pager"),
		timeout: 5000
	};
	createSlideshow(slideshow);

	// Initiate slideshow
	function createSlideshow(slideshow) {
		createPager(slideshow);
		if (typeof(slideshow.pager) != "undefined")
			slideshow.timer = setInterval(nextSlide, slideshow.timeout, slideshow);	
	}

	// Build pager HTML
	function createPager(slideshow) {
		slideshow.slides.each(function() {
			page = $("<div/>").appendTo(slideshow.pager);
			console.log(page);
			if ($(this).hasClass("current"))
				page.addClass("current");
		});
		var index = slideshow.slides.filter(".current").index();
		slideshow.pager.children().eq(index).addClass("active");
	}

	// Show next slide
	function nextSlide(slideshow) {
		var index = slideshow.slides.filter(".current").index() + 1;
		if (index == slideshow.slides.length)
			index = 0;
		setSlide(slideshow, index);
	}

	// Show specified slide
	function setSlide(slideshow, index) {
		slideshow.slides.filter(".previous").removeClass("previous");
		var current = slideshow.slides.filter(".current");
		next = slideshow.slides.eq(index);
		next.addClass("current");
		current.addClass("previous").removeClass("current");
		slideshow.pager.children().removeClass("active").eq(index).addClass("active");
	}
});