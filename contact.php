<?php 
	
	get_header(); 
	/*
		Template Name: Contact page
	*/
?>
<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title">Contact Us</h1>
		</div>
		<div class="page_header_right">
			<ul class="bread_crumb">
				<li>
					<a title="Home" href="<?php echo home_url(); ?>">
						Home
					</a>
				</li>
				<li class="separator icon_small_arrow right_gray">
					&nbsp;
				</li>
				<li>
					Contact Us
				</li>
			</ul>
		</div>
	</div>
	<div class="page_layout clearfix">
		<div class="divider_block clearfix">
			<hr class="divider first">
			<hr class="divider subheader_arrow">
			<hr class="divider last">
		</div>
		<div class="row page_margin_top">
			<div class="column column_2_3">
				<div class="row">
					<div class="contact_map" id="map">
					</div>
				</div>
				<div class="row page_margin_top_section">
					<div class="column column_1_2 border_top">
						<ul class="page_margin_top">
							<li class="item_content clearfix">
								<span class="features_icon envelope animated_element animation-scale"></span>
								<div class="text">
									<h3>Postal Address</h3>
									<p>Livevideoshub<br>Hyderabad <br>Telangana India 500037</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="column column_1_2 border_top">
						<ul class="page_margin_top">
							<li class="item_content clearfix">
								<span class="features_icon mobile animated_element animation-scale"></span>
								<div class="text">
									<h3> E-mail</h3>
									<p> <a href="mailto:livevideoshub@gmail.com" title="livevideoshub@gmail.com">livevideoshub@gmail.com</a> <br/><a href="mailto:info@livevideoshub.com" title="info@livevideoshub.com">info@livevideoshub.com</a></p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">
						Drop Us a Line
					</h4>
					
					<form class="contact_form margin_top_15" id="contact_form" method="post" action="<?php echo get_template_directory_uri(); ?>/form.php">
						<fieldset class="column column_1_3">
							<div class="block">
								<input class="text_input" name="your_name" type="text" value="Your Name *" placeholder="Your Name *" required>
							</div>
						</fieldset>
						<fieldset class="column column_1_3">
							<div class="block">
								<input class="text_input" name="email" type="email"  placeholder="Your Email *" required>
							</div>
						</fieldset>
						<fieldset class="column column_1_3">
							<div class="block">
								<input class="text_input" name="subject" type="text" value="Subject" required placeholder="Subject">
							</div>
						</fieldset>
						<fieldset>
							<div class="block">
								<textarea name="message" placeholder="Message *" required>Message *</textarea>
							</div>
						</fieldset>
						<fieldset>
							<input type="hidden" name="action" value="contact_form" />
							<div class=''>Your Details are successfully sent.. </div>
							<input type="submit" name="submit" value="SEND MESSAGE" class="more active">
						</fieldset>
					</form>
				</div>
			</div>
			<div class="column column_1_3">
				<?php echo get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>			


<?php get_footer(); ?>
<script type="text/javascript">
	$(".contact_form").submit(function(e){
						
			e.preventDefault();
			var form = this;
			$(form).find("[type='submit']").html("Submitting..");
			
			$.ajax({
			   type: "POST",
			   url: $(this).attr("action"),
			   data: $(this).serialize(), // serializes the form's elements.
			   success: function(data){
			   	alert(data);
					$(".form-return").html(data).slideDown();							
					$(form).find("[type='submit']").html("Submit");
					$(form)[0].reset();
			   }
			 });
			
		});

</script>