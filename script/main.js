$(document).ready(function() {
	// Create slideshow object
	var slideshow = createSlideshow({
		slides: $(".slideshow .slide"),
		pager: $(".slideshow-pager"),
		timeout: 5000
	});

	// Initiate slideshow
	function createSlideshow(slideshow) {
		createPager(slideshow);
		if (typeof(slideshow.pager) != "undefined")
			slideshow.timer = setInterval(nextSlide, slideshow.timeout, slideshow);
		return slideshow;
	}

	// Build pager HTML
	function createPager(slideshow) {
		slideshow.slides.each(function() {
			page = $("<div/>").appendTo(slideshow.pager);
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

	// Scroll to anchor links within page
	$("a").click(function(event) {
		if (this.hash !== "" && $(this).attr("href").startsWith("#")) {
			event.preventDefault();
			var hash = this.hash;
			$("html, body").animate({
				scrollTop: $(hash).offset().top
			}, 800, function() {
				window.location.hash = hash;
			});
		}
	});

	// Submit contact form
	$("#contact-form").on("submit", function(event) {
		$("form .message").hide();
		event.preventDefault();
		$.ajax({
			type: "post",
			url: "send.php",
			data: $("#contact-form").serialize(),
			success: function(data, status, jqXHR) {
				$("form .message.success").show();
		}});
	});
});