<?php
/*
	Template Name: Home Page
 */

get_header();
?>

	<main id="primary">

    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner rev-slider-rtl">
            <div class="tp-banner-container">
                <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      </ol>
                   
                    <div class="carousel-inner">
                      <div class="carousel-item active" >
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/main-slider/slideA.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h6> أمير مكة بحضور نائبة</h6>
                          <p> أمير مكة بحضور نائبة يدشن معرض مشاريع المنطقة الرقمي.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/main-slider/slideB.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h6> أمير مكة بحضور نائبة</h6>
                          <p> أمير مكة بحضور نائبة يدشن معرض مشاريع المنطقة الرقمي.</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
        <!-- Slider END -->
        <!-- meet & ask -->
        <div class="section-full our-project-box overlay-primary-dark " style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg4.jpg); background-attachment: fixed; position: relative; z-index: 1;">
            
            <div class="container">
                <div class="row p-tb30">
                    <div class="col-lg-6 col-md-6">
                        <div class="icon-bx-wraper clearfix text-white left">
                            <div class="icon-xl "> <span class=" icon-cell"><i class="fa fa-building-o"></i></span> </div>
                            <div class="icon-content">
                                <h3 class="dez-tilte text-uppercase m-b10">Meet & Ask</h3>
                                <p>You will share your project needs, dreams and goals with us. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 m-t20"> 
						<a href="#" class="site-button-secondry m-l10">
						<span>Contact Us </span><i class="fa fa-angle-right m-l10"></i></a>
						<a href="#" class="site-button-secondry m-l20">
						<span>View more </span><i class="fa fa-angle-right m-l10"></i></a>
					</div>
                </div>
            </div>
        </div>

            <!-- news -->
            <div class="section-full content-inner-1 ">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">آخر الأخبار</h2>
                        <div class="dez-separator-outer ">
                            <div class="dez-separator bg-secondry style-skew"></div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="blog-carousel mfp-gallery owl-carousel gallery owl-btn-center-lr">
                            <div class="item">
                                <div class="ow-blog-post date-style-2">
                                    <div class="ow-post-media dez-img-effect zoom-slow"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-work/news2.jpeg" alt=""> </div>
                                    <div class="ow-post-info ">
                                        <div class="ow-post-title">
                                            <h4 class="post-title"> <a href="#" title="Video post"> أمير مكة يرأس اجتماع مجلس نظارة الوقف. </a> </h4>
                                        </div>
                                      
                                        <div class="ow-post-text">
                                            <p>رأس مستشار خادم الحرمين الشريفين أمير منطقة مكة المكرمة رئيس مجلس نظارة وقف الملك عبدالعزيز 
                                            </p>
                                        </div>
                                        <div class="ow-post-readmore "> <a href="#" title="READ MORE" rel="bookmark" class=" site-button-link"> المزيد <i class="fa fa-angle-double-left"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-blog-post date-style-2">
                                    <div class="ow-post-media dez-img-effect zoom-slow"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-work/news1.jpeg" alt=""> </div>
                                    <div class="ow-post-info ">
                                        <div class="ow-post-title">
                                            <h4 class="post-title"> <a href="#" title="Video post">أمير مكة بحضور نائبة يدشن معرض مشاريع المنطقة الرقمي</a> </h4>
                                        </div>
                                    
                                        <div class="ow-post-text">
                                            <p>وعدد من أصحاب السمو الأمراء والمعاليالوزراء مساء اليوم (الأربعاء)، معرض مشاريع المنطقة الرقمي </p>
                                        </div>
                                        <div class="ow-post-readmore "> <a href="#" title="READ MORE" rel="bookmark" class=" site-button-link"> المزيد <i class="fa fa-angle-double-left"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-blog-post date-style-2">
                                    <div class="ow-post-media dez-img-effect zoom-slow"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-work/news2.jpeg" alt=""> </div>
                                    <div class="ow-post-info ">
                                        <div class="ow-post-title">
                                            <h4 class="post-title"> <a href="#" title="Video post"> أمير مكة يرأس اجتماع مجلس نظارة الوقف. </a> </h4>
                                        </div>
                                      
                                        <div class="ow-post-text">
                                            <p>رأس مستشار خادم الحرمين الشريفين أمير منطقة مكة المكرمة رئيس مجلس نظارة وقف الملك عبدالعزيز 
                                            </p>
                                        </div>
                                        <div class="ow-post-readmore "> <a href="#" title="READ MORE" rel="bookmark" class=" site-button-link"> المزيد <i class="fa fa-angle-double-left"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-blog-post date-style-2">
                                    <div class="ow-post-media dez-img-effect zoom-slow"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-work/news1.jpeg" alt=""> </div>
                                    <div class="ow-post-info ">
                                        <div class="ow-post-title">
                                            <h4 class="post-title"> <a href="#" title="Video post">أمير مكة بحضور نائبة يدشن معرض مشاريع المنطقة الرقمي</a> </h4>
                                        </div>
                                    
                                        <div class="ow-post-text">
                                            <p> وعدد من أصحاب السمو الأمراء والمعاليالوزراء مساء اليوم (الأربعاء)، معرض مشاريع المنطقة الرقمي </p>
                                        </div>
                                        <div class="ow-post-readmore "> <a href="#" title="READ MORE" rel="bookmark" class=" site-button-link"> المزيد <i class="fa fa-angle-double-left"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ow-blog-post date-style-2">
                                    <div class="ow-post-media dez-img-effect zoom-slow"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-work/news2.jpeg" alt=""> </div>
                                    <div class="ow-post-info ">
                                        <div class="ow-post-title">
                                            <h4 class="post-title"> <a href="#" title="Video post"> أمير مكة يرأس اجتماع مجلس نظارة الوقف. </a> </h4>
                                        </div>
                                      
                                        <div class="ow-post-text">
                                            <p>رأس مستشار خادم الحرمين الشريفين أمير منطقة مكة المكرمة رئيس مجلس نظارة وقف الملك عبدالعزيز 
                                            </p>
                                        </div>
                                        <div class="ow-post-readmore "> <a href="#" title="READ MORE" rel="bookmark" class=" site-button-link"> المزيد <i class="fa fa-angle-double-left"></i></a> </div>
                                    </div>
                                </div>
                            </div>
          
                   
                 
                        </div>
                    </div>
                </div>
            </div>
            <!-- news END -->

        <!-- meet & ask END -->
        <!-- About Company -->
        <div class="section-full bg-gray content-inner" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/bg-img.png); background-repeat: repeat-x; background-position: left bottom -37px;">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-7">
                            <h2 class="text-uppercase">عن إمارة مكة المكرمة</h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-secondry style-skew"></div>
                            </div>
                            <div class="clear"></div>
                            <p><strong>مكة المكرمة هي مدينة مقدسة لدى المسلمين، بها المسجد الحرام، والكعبة التي تعد قبلة المسلمين في صلاتهم. تقع غرب المملكة العربية السعودية، تبعد عن المدينة المنورة حوالي 400 كيلومتر في الاتجاه الجنوبي الغربي، وعن مدينة الطائف حوالي 75 كيلومترا في الاتجاه الشرقي، وعلى بعد 72 كيلومترا من مدينة جدة وساحل البحر الأحمر، وأقرب الموانئ لها هو ميناء جدة الإسلامي، وأقرب المطارات الدولية لها هو مطار الملك عبد العزيز الدولي. تقع مكة المكرمة عند تقاطع درجتي العرض 25/21 شمالا، والطول 49/39 شرقا، ويُعتبر هذا الموقع من أصعب التكوينات الجيولوجية، فأغلب صخورها جرانيتية شديدة الصلابة. تبلغ مساحة مدينة مكة المكرمة حوالي 850 كم²، منها 88 كم² مأهولة بالسكان، وتبلغ مساحة المنطقة المركزية المحيطة بالمسجد الحرام حوالي 6 كم²، ويبلغ ارتفاع مكة عن مستوى سطح البحر حوالي 277 مترًا.

                                كانت في بدايتها عبارة عن قرية صغيرة تقع في واد جاف تحيط بها الجبال من كل جانب، ثم بدأ الناس في التوافد عليها والاستقرار بها في عصر النبي إبراهيم والنبي إسماعيل، وذلك بعدما ترك النبي إبراهيم زوجته هاجر وابنه إسماعيل في هذا الوادي الصحراوي الجاف، وذلك امتثالاً لأمر الله، فبقيا في الوادي حتى تفّجر بئر زمزم، وقد بدأت خلال تلك الفترة رفع قواعد الكعبة على يد النبي إبراهيم وابنه إسماعيل.
                                
                                يبلغ عدد سكان مكة بحسب إحصائيات عام 2015، نحو 1,578,722 نسمة موزعين على أحياء مكة القديمة والجديدة. تضم مكة العديد من المعالم الإسلامية المقدسة، لعل من أبرزها المسجد الحرام وهو أقدس الأماكن في الأرض بالنسبة للمسلمين، ذلك لأنه يضم الكعبة المشرفة قبلة المسلمين في الصلاة، كما أنه أحد المساجد الثلاثة التي تشد إليها الرحال، وذلك حسب قول النبي محمد: "لا تشد الرحال إلا إلى ثلاثة مساجد مسجدي هذا والمسجد الحرام والمسجد الأقصى"، بالإضافة إلى ذلك، تعد مكة مقصد المسلمين في موسم الحج والعمرة إذ أنها تضم المناطق التي يقصدها المسلمون خلاله وهي مزدلفة، منى وعرفة.
                                
                                </strong></p>
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-secondry icon-bx-xs m-b20 "> <span class="icon-cell"><i class="fa fa-globe text-primary"></i></span> </div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte text-uppercase">المساحة</h5>
                                            <p>يبلغ إجمالي مساحة الإمارة 1,200  كيلومتر</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-secondry icon-bx-xs m-b20"> <span class="icon-cell"><i class="fa fa-users text-primary"></i></span> </div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte text-uppercase">عدد السكان</h5>
                                            <p>يبلغ عدد السكان 26.2% من إجمالي سكان المملكة</p>
                                        </div>
                                    </div>
                                </div>
                       
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="dez-thu m-b30"><img src="<?php bloginfo('template_directory'); ?>/assets/images/homebanner.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Projects  -->
        <div class="section-full content-inner our-project-box overlay-primary-dark">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="text-uppercase">مشاريع الإمارة </h2>
                    <div class="dez-separator-outer">
                        <div class="dez-separator bg-white style-skew"></div>
                        <p>إطلع علي المشاريع القائمة بإمارة مكة المكرمة</p>
                    </div>
                </div>
                <div class="section-content">
					<div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 dez-team-1">
							<div class="dez-box m-b30 team-skew ">
								<div class="dez-media"> <a href="javascript:;"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/project/pic1.jpg" alt="" width="358" height="460"> </a>
							
								</div>
								<div class="p-a20 bg-secondry text-center text-white team-info ">
									<h4 class="dez-title text-uppercase m-t0 m-b5"><a href="javascript:;" class=" text-white">مشروع النقل العام</a></h4>
									<span class="dez-member-position">محافظة جدة</span> 
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 dez-team-1">
							<div class="dez-box m-b30 team-skew ">
								<div class="dez-media"> <a href="javascript:;"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/project/pic1.jpg" alt="" width="358" height="460"> </a>
							
								</div>
								<div class="p-a20 bg-secondry text-center text-white team-info ">
									<h4 class="dez-title text-uppercase m-t0 m-b5"><a href="javascript:;" class=" text-white">مشروع النقل العام</a></h4>
									<span class="dez-member-position">محافظة جدة</span> 
								</div>
							</div>
						</div>
                        <div class="col-lg-4 col-md-4 col-sm-6 dez-team-1">
							<div class="dez-box m-b30 team-skew ">
								<div class="dez-media"> <a href="javascript:;"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/project/pic1.jpg" alt="" width="358" height="460"> </a>
							
								</div>
								<div class="p-a20 bg-secondry text-center text-white team-info ">
									<h4 class="dez-title text-uppercase m-t0 m-b5"><a href="javascript:;" class=" text-white">مشروع النقل العام</a></h4>
									<span class="dez-member-position">محافظة جدة</span> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Our Projects END -->

        <!-- Architecture -->
        <div class="section-full  bg-white content-inner" >
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase"> روابط مهمة</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-secondry style-skew"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="fa fa-paper-plane text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">خدمة تواصل</h5>
                                <p>تتيح لك هذه الخدمة التواصل مع سمو الأمير ونائبة</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="https://culture.makkah.gov.sa/" target="_blank">

                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="fa fa-file text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">استعلام عن معاملة</h5>
                                <p>تتيح لك هذه الخدمة الإستعلام عن معاملة</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="https://culture.makkah.gov.sa/" target="_blank">

                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="fa fa fa-building-o text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">المحافظات</h5>
                                <p>تتيح لك هذه الخدمة الإستعلام عن معاملة</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="https://culture.makkah.gov.sa/" target="_blank">

                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="fa fa-clock-o text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">حجز موعد</h5>
                                <p>تتيح لك هذه الخدمة حجز موعد أو مراجعه بسهولة ويسر</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="https://culture.makkah.gov.sa/" target="_blank">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b30">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="fa fa-pencil-square-o text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">التحقق من وثائق منسوبي إمارة مكة</h5>
                                <p>إنشئت خدمة التحقق من وثائق الموظفين للتحقق من صحة الوثائق الالكترونية التي تخص منسوبي الإمارة.
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="https://culture.makkah.gov.sa/" target="_blank">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b10">
                            <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="fa fa fa-users text-primary"></i></span> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">ملتقى مكة الثقافي</h5>
                                <p>متابعة فعاليات ملتقي مكة الثقافي</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="section-full bg-gray content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="text-uppercase"> الدليل الإلكتروني</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-secondry style-skew"></div>
                    </div>
                    <p>نقدم بين يديك الدليل الإلكتروني لإمارة مكة المكرمة </p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper center">
                                <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-car"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">دليل المواصلات</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper center">
                                <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-flag"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">دليل الإجراءات</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper center">
                                <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa fa-heartbeat"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">دليل الصحة</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper center">
                                <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-umbrella"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">دليل الترفية</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper center">
                                <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-leaf"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">الدليل الإجتماعي</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b10">
                            <div class="icon-bx-wraper center">
                                <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-shopping-cart"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">دليل التسوق</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team member END -->
    
        <!-- Testimonials blog -->
        <!-- <div class="section-full overlay-primary-light bg-img-fix content-inner-1" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg4.jpg);">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="text-uppercase">تويتر</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-white  style-skew"></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="testimonial-one owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-pic quote-left radius shadow"><img src="<?php bloginfo('template_directory'); ?>/assets/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>The entire team is extremely creative and forward thinking. They are also very quick and efficient when executing changes for us. I found their expertise to be extremely helpful. I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work with from start to finish. I think it is awesome and I can't thank you enough for working so closely with me.  Fine job!!</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Marina Lee</strong> <span class="testimonial-position">Media senior Specialist</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-pic quote-left radius shadow"><img src="<?php bloginfo('template_directory'); ?>/assets/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>The entire team is extremely creative and forward thinking. They are also very quick and efficient when executing changes for us. I found their expertise to be extremely helpful. I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work with from start to finish. I think it is awesome and I can't thank you enough for working so closely with me.  Fine job!!</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Eloise Carson</strong> <span class="testimonial-position">Media Specialist</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-1 testimonial-bg">
                                <div class="testimonial-pic quote-left radius shadow"><img src="<?php bloginfo('template_directory'); ?>/assets/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>The entire team is extremely creative and forward thinking. They are also very quick and efficient when executing changes for us. I found their expertise to be extremely helpful. I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work with from start to finish. I think it is awesome and I can't thank you enough for working so closely with me.  Fine job!!</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
      
    </div>

	</main><!-- #main -->

<?php
get_footer();
