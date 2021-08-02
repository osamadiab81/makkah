<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package osama_Theme
 */

?>

 

<?php wp_footer(); ?>
<footer class="site-footer">
        <!-- newsletter part -->
        <div class="p-a 30 bg-primary dez-newsletter overlay-primary-dark " style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg4.jpg); background-attachment: fixed; position: relative; z-index: 1;">
            <div class="container equal-wraper">
                <form class="dzSubscribe" action="script/mailchamp.php" method="post">
					<div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="icon-bx-wraper equal-col p-t30 p-b20 left">
                                <div class="icon-lg text-primary radius"> <a href="#" class="icon-cell"><i class="fa fa-envelope-o"></i></a> </div>
                                <div class="icon-content"> <strong class="text-golden text-uppercase font-18">خدمةالبريد الإلكتروني</strong>
                                    <h6 class="dez-tilte text-uppercase">إشنرك  ليصلك كل جديد</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
							<div class="dzSubscribeMsg"></div>
                            <div class="input-group equal-col p-t40 p-b20">
                                <input name="dzEmail" required placeholder="Email address" required="required" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 offset-lg-1 offset-md-1">
                            <div class="equal-col p-t40 p-b20 skew-subscribe">
                                <button name="submit" value="Submit" type="submit" class="site-button-secondry button-skew z-index1"> 
									<span>إشترك</span><i class="fa fa-angle-right"></i> 
								</button>
                            </div>
                        </div>
					</div>
				</form>
            </div>
        </div>
        <!-- footer top part -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
            
            
                    <div class="col-lg-4 col-md-4 col-sm-4 footer-col-4 d-flex justify-content-center">
                        <div class="widget widget_getintuch">
                           
                            <ul>
                                <li><i class="fa fa-map-marker"></i><strong>العنوان</strong> شارع الأمير ماجد بن عبدالعزيز - مكة المكرمة </li>
                                <li style="direction: ltr"><i class="fa fa-phone"></i><strong>الهاتف</strong> +966 012 572 2727</li>
                                <li><i class="fa fa-envelope"></i><strong>البريد الالكتروني</strong>info@makkah.gov.sa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 footer-col-4 d-flex justify-content-center">
                    <a href="https://itunes.apple.com/US/app/id897919213?mt=8" target="_blank">
                        <img alt="IOS store Image" src="<?php bloginfo('template_directory'); ?>/assets/images/appleStore.png" class="img-fluid">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=sa.gov.makkah.emirates" target="_blank">
                        <img alt="google play image" src="<?php bloginfo('template_directory'); ?>/assets/images/googlePlay.png" class="img-fluid">
                    </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 footer-col-4 d-flex justify-content-center">
                        <div class="widget widget_services">
                          
                            <ul>
                                <li><a href="services-2.html"> سياسة الخصوصية </a></li>
                                <li><a href="services-2.html"> سياسة الإستخدام وإخلاء المسؤولية </a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-4 text-center m-auto">
						<span> جميع الحقوق محفوظة لإمارة منطقة مكة المكرمة 2021 ©</span> 
					</div>
					
                </div>
            </div>
        </div>
    </footer>
<!-- JavaScript  files ========================================= -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/dz.ajax.js"></script><!-- CONTACT JS  -->




</body>

</html>