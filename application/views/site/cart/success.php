<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('site/head'); ?>
</head>
<body>
	<div class="wrapper">
		<!-- =================== TOP NAVIGATION ================================ -->
		<?php $this->load->view('site/navigator'); ?>
		<!-- ===================== TOP NAVIGATION : END ============================ -->
		<!-- ======================== HEADER =================================== -->
		<?php $this->load->view('site/header-fordetail'); ?>
		<!-- ========================= HEADER : END ============================= -->
		<!-- ======= CART ============== -->
		<?php  $this->load->view($temp);?>
		<!-- ======= CART : END ============== -->
		<!-- ======= FOOTER ============== -->
		<?php $this->load->view('site/footer'); ?>
		<!-- ======= FOOTER : END ============== -->
	</div>

	<!-- For demo purposes – can be removed on production -->
	<div class="config open">
		<div class="config-options">
			<h4>Pages</h4>
			<ul class="list-unstyled animate-dropdown">
				<li class="dropdown">
					<button class="dropdown-toggle btn le-button btn-block" data-toggle="dropdown">View Pages</button>
					<ul class="dropdown-menu">
						<li><a href="index.html">Home</a></li>
						<li><a href="index-2.html">Home Alt</a></li>
						<li><a href="category-grid.html">Category - Grid/List</a></li>
						<li><a href="category-grid-2.html">Category 2 - Grid/List</a></li>
						<li><a href="single-product.html">Single Product</a></li>
						<li><a href="single-product-sidebar.html">Single Product with Sidebar</a></li>
						<li><a href="cart.html">Shopping Cart</a></li>
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-fullwidth.html">Blog Full Width</a></li>
						<li><a href="blog-post.html">Blog Post</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="terms.html">Terms & Conditions</a></li>
						<li><a href="authentication.html">Login/Register</a></li>
					</ul>	
				</li>
			</ul>
			<h4>Header Styles</h4>
			<ul class="list-unstyled">
				<li><a href="index.html1">Header 1</a></li>
				<li><a href="index.html">Header 2</a></li>
			</ul>
			<h4>Colors</h4>
			<ul class="list-unstyled">
				<li><a class="changecolor green-text" href="#" title="Green color">Green</a></li>
                <li><a class="changecolor blue-text" href="#" title="Blue color">Blue</a></li>
                <li><a class="changecolor red-text" href="#" title="Red color">Red</a></li>
                <li><a class="changecolor orange-text" href="#" title="Orange color">Orange</a></li>
                <li><a class="changecolor navy-text" href="#" title="Navy color">Navy</a></li>
                <li><a class="changecolor dark-green-text" href="#" title="Darkgreen color">Dark Green</a></li>
			</ul>
		</div>
		<a class="show-theme-options" href="#"><i class="fa fa-wrench"></i></a>
	</div>
	<!-- For demo purposes – can be removed on production : End -->

	
	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url(); ?>/upload/assets/js/jquery-1.10.2.min.js"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/jquery-migrate-1.2.1.js"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/gmap3.min.js"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/css_browser_selector.min.js"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/echo.min.js"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/jquery.easing-1.3.min.js"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/jquery.raty.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo base_url(); ?>/upload/assets/js/wow.min.js"></script>
	<script src="<?php echo base_url(); ?>/upload/assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="<?php echo base_url(); ?>/upload/switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	<script src="http://w.sharethis.com/button/buttons.js"></script>

	<!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/59f55a16bb0c3f433d4c5c05/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
</body>
</html>
<script>
        $(document).ready(function() {
                $(document).on('click', '.remove_inventory', function() {
                        var row_id = $(this).attr("id");
                        if (confirm("Are you sure you want to remove this?")) {
                                $.ajax({
                                        url: "<?php echo base_url(); ?>site/Cart/remove",
                                        method: "POST",
                                        data: {
                                                row_id: row_id
                                        },
                                        success: function(data) {
                                                alert("Product removed from Cart");
                                        }
                                });
                        } else {
                                return false;
                        }
                });
                

        });
</script>