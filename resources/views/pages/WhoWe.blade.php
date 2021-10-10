@extends('layouts.app')

@section('custom_css')
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='sage/css-css'  href='https://akosmd.com/app/themes/akostheme/dist/styles/main-ae5c3d99f9.css' type='text/css' media='all' />
<script type='text/javascript' src='https://akosmd.com/wp/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://akosmd.com/wp/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='https://akosmd.com/wp-json/' />
<link rel="alternate" type="application/json+oembed" href="https://akosmd.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fakosmd.com%2Four-team%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://akosmd.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fakosmd.com%2Four-team%2F&#038;format=xml" />
<script> (function(){ window.ldfdr = window.ldfdr || {}; (function(d, s, ss, fs){ fs = d.getElementsByTagName(s)[0]; function ce(src){ var cs = d.createElement(s); cs.src = src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1); } ce(ss); })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_lAxoEaKyN2b7OYGd.js'); })(); </script><script type="text/javascript" src="https://secure.leadforensics.com/js/143156.js" ></script>
<noscript><img src="https://secure.leadforensics.com/143156.png" style="display:none;" /></noscript><link rel="icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" sizes="32x32" />
<link rel="icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://akosmd.com/app/uploads/2018/05/favicon.png" />
<meta name="msapplication-TileImage" content="https://akosmd.com/app/uploads/2018/05/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400%7COpen+Sans:300" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLqQBbFAQfh5etT9JhoHO6F_7tGZc_IHQ"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
	section p{
		color: #767373;
	}
	section.investors {
		background-size: cover;
		background-position: 0 0;
		min-height: 600px;
		background-image: url(../img/whowe/investors.jpg);
	}
	section.careers-list p{
		font-weight: 300;
	}
	section.careers-list .full-post{
		display: none;
	}
	.read-more.career-toggle{
		cursor: pointer;
	}
	.physicians-list .physician-tile .col-sm-9 {
		padding-top: 25px; 
	}
</style>
@endsection

@section('mainContent')
<div id="main-top" class="whowe">
	<!-- <div id="fullwidth-video">
      <div class="fullwidth-video-bg">
          <video id="bgvideop" poster="img/video-bg.jpg" autobuffer autoplay="autoplay" loop="loop" muted
              defaultMuted playsinline webkit-playsinline oncontextmenu="return false;" preload="auto"
              onplaying="this.controls=false">
              <source src="img/bgvideo.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
          </video>
      </div>
  </div> -->
	<div class="header">
		<div class="container-fluid d-flex justify-content-center">
			<div class="row">
				<div class="col-6 col-lg-2">
					<a href="index.html"> <img src="img/logo.svg" class="img-fluid logo" alt="" /> </a>
				</div>
				<div class="col-6 col-lg-10 text-right">
					<a href="javascript:void(0)" class="menu-toggle-btn pt-2 d-inline-block d-lg-none">
						<svg xmlns="http://www.w3.org/2000/svg" width="47" height="18" viewBox="0 0 47 18">
							<g id="menu-toggle" transform="translate(-46 -19)">
								<rect id="Rectangle_2" data-name="Rectangle 2" width="47" height="3" transform="translate(46 19)" fill="#fff"></rect>
								<rect id="Rectangle_3" data-name="Rectangle 3" width="32" height="3" transform="translate(61 34)" fill="#fff"></rect>
							</g>
						</svg>
					</a>
					<ul class="main-menu text-left text-lg-right">
						<li class="pb-5 text-right d-block d-lg-none pt-4 pr-4">
							<a href="javascript:void(0)" class="pt-1 menu-close-btn close-toggle">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 46.531 45.619">
									<g id="menu-close-btn" transform="translate(-51.469 -2.676)">
										<rect id="Rectangle_2" data-name="Rectangle 2" width="60.644" height="3.871" transform="translate(52.381 45.557) rotate(-45)" fill="#fff"></rect>
										<rect id="Rectangle_9" data-name="Rectangle 9" width="60.644" height="3.871" transform="translate(54.206 2.676) rotate(45)" fill="#fff"></rect>
									</g>
								</svg>
							</a>
						</li>
						<li class="menu-item"> <a href="/"> Home </a> </li>
						<li class="menu-item"> <a href="/employers"> Employers </a>
							<div class="submenu-cont">
								<ul class="submenu">
									<li> <a href="/vpc">Virtual Primary Care</a> </li>
									<li> <a href="/workerscompensation">Worker's Compensation</a> </li>
									<li> <a href="/onsiteclinics">Onsite Clinics</a> </li>
									<li> <a href="/telemedicine">Telemedicine</a> </li>
								</ul>
							</div>
						</li>
						<li class="menu-item">
                            <a href="/akosadvisor"> Akos Advisor</a>
                        </li>
						<li class="menu-item"> <a href="/urgentcare"> Urgent Care Centre </a> </li>
						<li class="menu-item"> <a href="/providers"> Providers </a>
							<div class="submenu-cont">
								<ul class="submenu">
									<li> <a href="">Primary Providers</a> </li>
									<li> <a href="">Specialist</a> </li>
									<li> <a href="">ACO/Value Based entities</a> </li>
									<li> <a href="/ccm">CCM</a> </li>
									<li> <a href="">RPM</a> </li>
									<li> <a href="">Answering servicce/Nurse triage</a> </li>
								</ul>
							</div>
						</li>
						<li class="menu-item"> <a href="/remotepatient"> Remote Patient monitoring </a> </li>
						<li class="menu-item active"> <a href="/whowe"> Who we are </a> </li>
						<li class="menu-item">
                            <a href="/news"> News </a>
                        </li>
						<!-- <li>
                          <a href="" class="cta-btn-outline"> Member Login </a>
                      </li> -->
						<li> <a href="" class="cta-btn-1">
                              Contact Us
                          </a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="hero">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<h2 data-aos="fade-right">
                      Care On Demand And <br>
                      On Location
					</h2>
					<h6 data-aos="fade-right" data-aos-offset="0" data-aos-delay="300">
						Akos Med Clinic has you covered
					</h6> 
					<!-- <a data-aos="fade-right" data-aos-offset="0" data-aos-delay="500" href="" class="cta-btn">
						Connect with Us
					</a>  -->
				</div>
			</div>
		</div>
	</div>
	<a href="javascript:void(0)" class="navarrow"> <img src="img/down-arrow.svg" alt="" /> </a>
</div>
<section class="network-top-panels">
	<div class="network-top-panel">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 left-image">
					<div class="main-image"><img src="https://akosmd.com/app/uploads/2017/01/out_team_top_panel1.jpg" alt="" /></div>
				</div>
				<div class="col-sm-4 col-sm-offset-1">
					<h3>The future of healthcare</h3>
					<p class="subtitle">A new era in digital health</p>
					<p>Telemedicine is revolutionizing the healthcare industry, improving access and reducing cost for patients and providers alike. With digital health technology more advanced than ever and virtual consults that put both parties face to face, telemedicine is able to offer streamlined convenience without compromising quality care.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="network-top-panel">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-sm-push-6 right-image">
					<div class="main-image"><img src="https://akosmd.com/app/uploads/2017/01/our_team_top_panel2.jpg" alt="" /></div>
				</div>
				<div class="col-sm-6 col-sm-pull-6">
					<h3>The future of telemedicine</h3>
					<p class="subtitle">More than an app, an answer</p>
					<p>Akos is a pioneer in telemedicine, offering patient-centered solutions that in turn benefit employers, physicians and healthcare centers. With a mobile interface that lets you virtually consult with a board-certified provider anywhere anytime and care coordinators to ensure your needs are always being met, Akos strives to provide the most comprehensive telemedicine service in healthcare.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="white-banner" id="team-anchor">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Meet the Akos Team</h1>
				<p>Changing the way you do healthcare</p>
			</div>
			<div class="col-sm-12" style="padding-top: 30px">
				<p>Our seasoned team of professionals brings decades of experience in healthcare and business to the field of telemedicine:</p>
			</div>
		</div>
	</div>
</section>
<div class="tab-content">
	<div role="tabpanel" class="tab-pane fade in active" id="managementTeam">
		<section class="physicians-detail physicians-list">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="physician-tile">
							<div class="row">
								<div class="col-sm-3 mobile-center">
									<div class="physician-detail-image"> <img class="img-circle" src="https://akosmd.com/app/uploads/2016/12/Kishlay_2.jpg" alt="Kishlay Anand MD MS FHRS" /> </div>
								</div>
								<div class="col-sm-9">
									<h4 class="physician-name">Kishlay Anand MD MS FHRS</h4> <span class="physician-title">Founder & Chief Executive Officer</span>
									<!-- <div class="physician-bio">
										<p>Dr. Kishlay Anand is a board-certified cardiologist and electrophysiologist and Akos co-founder. Dr. Anand garnered extensive administrative experience serving as Chairman of InstantMed Health Center, an innovative healthcare delivery model with Urgent...</p>
                  					</div> -->
								</div>
							</div>
						</div>
						<!-- tile -->
					</div>
					<div class="col-md-6">
						<div class="physician-tile">
							<div class="row">
								<div class="col-sm-3 mobile-center">
									<div class="physician-detail-image"> <img class="img-circle" src="https://akosmd.com/app/uploads/2016/12/Swaraj_1.jpg" alt="Swaraj Singh MD" /> </div>
								</div>
								<div class="col-sm-9">
									<h4 class="physician-name">Swaraj Singh MD</h4> <span class="physician-title">Founder & Chief Innovation Officer</span>
									<!-- <div class="physician-bio">
										<p>Dr. Swaraj Singh is a vascular neurologist and Akos co-founder. Dr. Singh garnered extensive administrative experience serving as medical director for neurology and stroke programs at Banner Thunderbird Medical Center, Banner Estrella...</p> 
                  					</div> -->
								</div>
							</div>
						</div>
						<!-- tile -->
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6">
						<div class="physician-tile">
							<div class="row">
								<div class="col-sm-3 mobile-center">
									<div class="physician-detail-image"> <img class="img-circle" src="https://akosmd.com/app/uploads/2020/04/MariaShahHeadshot.jpg" alt="Maria A Shah MD" /> </div>
								</div>
								<div class="col-sm-9">
									<h4 class="physician-name">Maria A Shah MD</h4> <span class="physician-title">Medical Officer</span>
									<!-- <div class="physician-bio">
										<p>Maria A Shah is an experienced healthcare administrator with proven success in managing clinical operations to drive strong and sustained growth. Maria is a champion for evidence-based and cost-effective medical...</p>
                  					</div> -->
								</div>
							</div>
						</div>
						<!-- tile -->
					</div>
					<div class="col-md-6">
						<div class="physician-tile">
							<div class="row">
								<div class="col-sm-3 mobile-center">
									<div class="physician-detail-image"> <img class="img-circle" src="https://akosmd.com/app/uploads/2020/07/Dean-Hoffman-Headshot.jpg" alt="Dean Hoffman" /> </div>
								</div>
								<div class="col-sm-9">
									<h4 class="physician-name">Dean Hoffman</h4> <span class="physician-title">Chief Financial Officer</span>
									<!-- <div class="physician-bio">
										<p>Dean Hoffman is a senior executive with over 25 years of diverse executive leadership. His financial, operational, and entrepreneurial expertise has been the foundation of his working with both private...</p>
                  					</div> -->
								</div>
							</div>
						</div>
						<!-- tile -->
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<section class="app-bar investors mobile-panel" id="investor-anchor">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6">
				<h2>An investment in healthcare</h2>
				<p class="subtitle">Be part of the solution with Akos</p>
				<p style="color:white; font-weight: 300">With the ability to handle 70 percent of clinic visits, telemedicine isn’t just one of the fastest growing trends in digital health, it’s the future. Become part of the healthcare solution by providing affordable alternative care for non-emergent conditions with Akos. </p>
				<p><a class="akos-button" href="mailto:KAnand@AkosMD.com?subject=Investor Inquiry">Contact Us</a></p>
			</div>
		</div>
	</div>
</section>
<section class="white-banner" id="career-anchor">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Explore careers with Akos</h3>
				<p>From doctors to developers</p>
			</div>
		</div>
	</div>
</section>
<section class="careers-list">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="career-post">
					<div class="career-title-date">
						<h3>Health Services Manager</h3> <span class="date">Aug 05</span>
					</div>
					<div class="career-body">
						<p class="excerpt">Job Responsibilities: As a Health Services Manager you will: Coordinate sales efforts with the V.P of Client Implementations &amp; Development Maintain accurate records of all sales and prospecting activities including sales calls, appointments, closed sales and follow up activity within&hellip;</p>
						<div class="full-post">
							<p><strong><u>Job Responsibilities:</u></strong></p>
							<p><strong>As a Health Services Manager you will:</strong></p>
							<ul>
								<li>Coordinate sales efforts with the V.P of Client Implementations &amp; Development</li>
								<li>Maintain accurate records of all sales and prospecting activities including sales calls, appointments, closed sales and follow up activity within assigned territory using a SalesForce CRM tool.</li>
								<li>Identify sales targets and leads, develop a sales funnel with an expected outcome of closing the sale and securing the targeted business opportunity.</li>
								<li>Develop and execute individual account sales plans to secure new customer prospects daily.</li>
								<li>Close sales by obtaining signed business service agreements and execute existing implementation strategies as needed.</li>
								<li>Meet minimum monthly revenue goals established by the V.P of Client Implementations &amp; Development.</li>
								<li>Solicit appropriate approvals on Pricing/Margin targets across multiple disciplines.</li>
							</ul>
							<p><strong><u>Job Requirements:</u></strong></p>
							<ul>
								<li>Bachelor’s degree or equivalent experience; sales and business curriculum preferred.</li>
								<li>One to three years business- to- business sales experience sales experience.</li>
								<li>Experience with CRM’s</li>
								<li>A valid state driver license, satisfactory driving record and reliable transportation.</li>
							</ul>
							<p><strong><u>Work Environment and Conditions:</u></strong></p>
							<ul>
								<li>External &amp; internal client activity</li>
								<li>In-person customer contact</li>
								<li>Extensive territory mobility</li>
								<li>Medical Center/office environment</li>
							</ul>
							<p><strong><u>Benefits Summary:</u></strong></p>
							<ul>
								<li>Medical/Vision/Prescription/Dental Plans</li>
								<li>Life Insurance/ Long Term Disability</li>
								<li>PTO Plan</li>
								<li>Competitive Salary</li>
								<li>Variable Compensation Plan</li>
							</ul>
							<p>If you’re looking for an organization that cares for your growth and well-being as much as it does for it’s patients, Apply Today!</p> 
							<a style="margin: 30px 0;" class="akos-button" href="mailto:hello@akosmd.com?subject=Resume Submission for Health Services Manager">Submit Resume</a> 
						</div> 
						<div class="read-more career-toggle">read more</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="career-post">
					<div class="career-title-date">
						<h3>Akos Patient Intake Coordinator</h3> <span class="date">Jan 13</span> </div>
					<div class="career-body">
						<p class="excerpt">Position Overview: Intake care coordinators work in a call center environment answering patient calls through a video chat platform. This team takes inbound and outbound video and voice calls from patients via the Akos staff portal. They interact with both&hellip;</p>
						<div class="full-post">
							<p><strong><u>Position Overview:</u></strong></p>
							<p>Intake care coordinators work in a call center environment answering patient calls through a video chat platform. This team takes inbound and outbound video and voice calls from patients via the Akos staff portal. They interact with both patients and physicians. Providing an exceptional patient experience through the delivery of telemedicine is their top priority.</p>
							<p><strong><u>Responsibilities:</u></strong></p>
							<ul>
								<li>
									<p>Respond to virtual and video calls, emails and live chats from patients</p>
								</li>
								<li>
									<p>Confirm patient medical history</p>
								</li>
								<li>
									<p>Pre-screen patient to ensure symptoms can be treated virtually</p>
								</li>
								<li>
									<p>Identify and transfer patient to appropriate physician</p>
								</li>
								<li>
									<p>Direct patient to healthcare center in our preferred network if patient needs physical care</p>
								</li>
								<li>
									<p>Provide patient follow up</p>
								</li>
								<li>
									<p>Interacts with various other departments to obtain information and resolve outstanding patient issues</p>
								</li>
								<li>
									<p>Handle sensitive material, such as medical documents, prescriptions, medical records, etc.</p>
								</li>
								<li>
									<p>Provides patients with detailed information related to billing questions</p>
								</li>
								<li>
									<p>Inputs patient information with a high degree of accuracy</p>
								</li>
								<li>
									<p>Complies with all applicable regulations (i.e. HIPAA)</p>
								</li>
								<li>
									<p>Performs other relevant duties as assigned</p>
								</li>
							</ul>
							<p><strong><u>Full/Part Time:</u></strong></p>
							<ul>
								<li>
									<p>Part Time</p>
								</li>
								<li>
									<p>10 Hour Shifts</p>
								</li>
							</ul>
							<p><strong><u>Preferred Qualifications:</u></strong></p>
							<ul>
								<li>
									<p>Medical Assistant, LPN or RN</p>
								</li>
								<li>
									<p>Minimum 2 years in medical office or hospital</p>
								</li>
								<li>
									<p>Knowledge of healthcare and medical terminology</p>
								</li>
								<li>
									<p>Thorough knowledge of regulations governing medical services</p>
								</li>
								<li>
									<p>Exceptional customer service skills</p>
								</li>
								<li>
									<p>Excellent communication skills</p>
								</li>
								<li>
									<p>High level of computer literacy and proficient typing skills</p>
								</li>
								<li>
									<p>Experience working with web based systems</p>
								</li>
								<li>
									<p>Must speak clearly and present in a professional manner</p>
								</li>
								<li>
									<p>Ability to obtain, understand and analyze information received during call interactions</p>
								</li>
								<li>
									<p>Bi-lingual (English/Spanish) preferred but not required</p>
								</li>
							</ul> 
							<a style="margin: 30px 0;" class="akos-button" href="mailto:hello@akosmd.com?subject=Resume Submission for Akos Patient Intake Coordinator">Submit Resume</a> 
						</div>
						<div class="read-more career-toggle">read more</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="newsletter-form form-fadeout">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 mobile-center">
				<h2>Join our newsletter</h2>
				<p>Stay current with everything Akos</p>
			</div>
			<div class="col-sm-6">
				<div class="form gray">
					<form accept-charset="UTF-8" target="_blank" action="https://ki344.infusionsoft.com/app/form/process/244a800f6d493b1da1ef25996f43a583" class="infusion-form" method="POST">
						<input name="inf_form_xid" type="hidden" value="244a800f6d493b1da1ef25996f43a583" />
						<input name="inf_form_name" type="hidden" value="Web Form submitted" />
						<input name="infusionsoft_version" type="hidden" value="1.62.0.37" />
						<div class="row">
							<div class="col-xs-6">
								<div class="infusion-field"> <span class="input input--hoshi">
									<input class="input__field input__field--hoshi" type="text" id="inf_field_Email" name="inf_field_Email" />
									<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="inf_field_Email">
									<span class="input__label-content input__label-content--hoshi">Email *</span> </label>
									</span>
								</div>
							</div>
							<div class="col-xs-6 pull-right text-right">
								<div class="infusion-submit">
									<button type="submit" class="akos-button">Sign Up</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="white-banner form-banner form-confirmation">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mobile-center">
				<h2>Thank you.</h2>
				<p class="subtitle">You are now signed up to receive the latest patient news, updates and more.</p>
			</div>
		</div>
	</div>
</section>
</div>
@endsection

@section('custom_js')
<script type='text/javascript' src='https://akosmd.com/app/themes/akostheme/dist/scripts/main-fb0b5c7b76.js'></script>
<script type='text/javascript' src='https://akosmd.com/wp/wp-includes/js/wp-embed.min.js?ver=5.4.7'></script>
<a href="javascript:void(0);" id="back-top"><i class="fa fa-chevron-up" aria-hidden="true"></i> Back to top</a>
<script type="text/javascript" src="https://ki344.infusionsoft.com/app/webTracking/getTrackingCode"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-88632021-1', 'auto');
    ga('send', 'pageview');

	$('.read-more.career-toggle').click(function(){
		if($(this).prev().prev().css('display') == 'block'){
			$(this).prev().prev().css('display', 'none');
		} else {
			$(this).prev().prev().css('display', 'block');
		}
		if($(this).html() == 'read more'){
			$(this).html('READ LESS');
		} else {
			$(this).html('READ MORE');
		}
		$(this).prev().slideToggle();
		
	})
</script>
@endsection