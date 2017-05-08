<!DOCTYPE html>
<html>
<head>
	<title>Greenfinch Gardening</title>
	<?php include("templates/resources.php") ?>
</head>
<body>
	<section class="inverted">
		<?php include("templates/header.php") ?>
		<img class="site-logo" src="images/logo.svg" alt="Greenfinch Gardening"/>
		<p class="mission">Organic &amp; nature<br/> friendly gardening in Bristol<br/> &amp; the Chew Valley</p>
		<div class="social">
			<a href="http://facebook.com/greenfinchgardeningchewvalley"><img src="images/facebook.svg" alt="Facebook"></a>
		</div>
	</section>
	<section>
		<p>Living in the heart of the Chew Valley, I'm an RHS trained Gardener. I'm dedicated to providing a friendly, reliable service, that will breathe life back into your garden with an ethos that is at one with nature.</p>
		<div class="logo-text"><em>G</em>reenfinch <em>G</em>ardening</div>
		<hr/>
		<p class="links">
			<a href="#contact">christina@greenfinchgardening.co.uk</a><br/>
			<a href="tel:+447977824519">07977824519</a>
		</p>
		<img class="signature" src="images/signature.svg" alt="Christina Holvey"/>
	</section>
	<section>
		<div  class="slideshow full-width">
			<div class="slide current" style="background-image:url('images/slide1.jpg')"></div>
			<div class="slide" style="background-image:url('images/slide2.jpg')"></div>
			<div class="slide" style="background-image:url('images/slide3.jpg')"></div>
		</div>
		<div class="overlay-caption quote">A beautiful garden will always give back more than it receives</div>
	</section>
	<section class="slideshow-pager"></section>
	<section id="services">
		<h1>Services</h1>
		<hr/>
		<div class="badge-info">
			<img class="badge" src="images/rhs.svg" alt="RHS trained"/>
			<ul>
				<li>Garden maintenance</li>
				<li>Pruning, planting &amp; mowing</li>
				<li>Border &amp; container design</li>
				<li>Wildlife homes &amp; and feeders</li>
			</ul>
		</div>
	</section>
	<section class="inverted" id="contact">
		<h1>Contact</h1>
		<hr/>
		<p>If you'd like to find out more about how I could help, and my availability, then please drop me a line. I'd be delighted to come round to offer a no-obligations estimate.</p>
		<form id="contact-form" action="send.php" method="POST">
			<div class="field">
				<input type="text" name="name" placeholder="Name" required/>
				<label for="name">Name</label>
			</div>
			<div class="field">
				<input type="email" name="email" placeholder="Email address" required/>
				<label for="email">Email</label>
			</div>
			<div class="field">
				<input type="tel" name="phone" placeholder="Phone number"/>
				<label for="phone">Phone</label>
			</div>
			<div class="field">
				<textarea name="message" rows="6" placeholder="Message" required></textarea>
				<label for="message">Message</label>
			</div>
			<button name="submit">Send</button>
			<p class="message success">Your message was sent successfully. I'll be in touch soon.</p>
			<p class="message error">There was a problem sending your message. Please try again.</p>
		</form>
		<?php include("templates/footer.php") ?>
	</section>
	<?php include("templates/tracking.php") ?>
</body>
</html>
