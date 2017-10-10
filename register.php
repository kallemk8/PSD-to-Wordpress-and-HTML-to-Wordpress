<?php get_header(); 
/*
	Template name: Register
*/
?>
<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title"><?php echo get_the_title(); ?></h1>
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
					<?php echo get_the_title(); ?>
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
			<form class="contact_form  margin_top_15" id="contact_form" method="post" action="#" >
				<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="block">
						<input class="text_input hint" name="first_name" type="text" value="Your Name *" placeholder="Your Name *">
					</div>
				</fieldset>
				<br/>
				<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="block">
						<input class="text_input hint" name="username" type="text"  placeholder="Username *">
					</div>
				</fieldset>
				<br/>
				<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="block">
						<input class="text_input hint" name="email" type="email" value="Your Email *" placeholder="Your Email *">
					</div>
				</fieldset>
				<br/>
				<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="block">
						<input class="text_input hint" name="password" type="password"  placeholder="Password *">
					</div>
				</fieldset>
				<br/>
				<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="block">
						<input class="text_input hint" name="mobile" type="number"  placeholder="Mobile *">
					</div>
				</fieldset>
				<br/>
				<fieldset class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="block">
						<input class="text_input hint" name="location" type="text"  placeholder="Location *">
					</div>
				</fieldset>
				
				
				<fieldset>
					<div class="block">
						<textarea class="margin_top_10 hint" style="width:180px;" name="Address" placeholder="Address *">Message *</textarea>
					</div>
				</fieldset>
				<fieldset>
					<input type="hidden" name="action" value="theme_contact_form">
					<input type="hidden" name="id" value="contact_form">
					<input style="float:left;" type="submit" name="submit" value="SEND MESSAGE" class="more register_submit active">
				</fieldset>
			</form>
		</div>
	</div>
</div>		
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript">

	jQuery('.register_submit').click(function(){
		var first_name = jQuery("input[name='first_name']").val();
        var username = jQuery("input[name='username']").val();
		var email = jQuery("input[name='email']").val();
		var mobile = jQuery("input[name='mobile']").val();
		var password = jQuery("input[name='password']").val();
		var location =jQuery("input[name='location']").val();
		var address = jQuery("textarea[name='Address']").val();
		var address = jQuery("textarea[name='Address']").val();
		var date = new Date();
		jQuery.post("#",
            {   
                action:"newcontact",
                first_name:first_name,
                username:username,
                location:location,
                email:email,
                address:address,
                password:password,
                mobile:mobile,
                date:date,
            },
            function(data,status){
            	alert(data);
                if(status=='success'){
                    alert('Sucessfully');
                    jQuery('.form-return').show();
                }
                
            });
    jQuery("input[name='first_name']").val('');
    jQuery("input[name='username']").val('');
	jQuery("input[name='email']").val('');
	jQuery("input[name='mobile']").val('');
	jQuery("input[name='password']").val('');
	jQuery("input[name='location']").val('');
	jQuery("textarea[name='Address']").val('');
	});


</script>	
<?php get_footer(); ?>