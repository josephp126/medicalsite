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
	@media only screen and (min-width: 1000px) {
		.physicians-detail .physician-detail-image img {
			margin-top: 20px;
		}
		.physicians-detail .physician-detail-image {
			margin-bottom: 0px;
		}
		.physicians-detail .physician-bio {
			margin-top: 10px;
		}
	}
	.physicians-detail .physician-name {
		font-weight: 500;
	} 
	.physicians-detail .physician-title {
		font-size: 16px;
		font-weight: 500;
		color: black;
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
									<li>
                                        <a href="/akosadvisor"> Akos Advisor</a>
                                    </li>
								</ul>
							</div>
						</li>
						<!-- <li class="menu-item">
                            <a href="/akosadvisor"> Akos Advisor</a>
                        </li> -->
						<li class="menu-item"> <a href="/urgentcare"> Urgent Care </a> </li>
						<li class="menu-item"> <a href="/providers"> Providers </a>
							<div class="submenu-cont">
								<ul class="submenu">
									<li> <a href="">Primary Providers</a> </li>
									<li> <a href="">Specialists</a> </li>
									<li> <a href="/aco">ACO/Value Based entities</a> </li>
									<li> <a href="/ccm">Chronic Case Management</a> </li>
									<li>
                                        <a href="/remotepatient">Remote Patient monitoring</a>
                                    </li>
									<li> <a href="">Answering service/Nurse triage</a> </li>
								</ul>
							</div>
						</li>
						<!-- <li class="menu-item"> <a href="/remotepatient"> Remote Patient monitoring </a> </li> -->
						<li class="menu-item active"> <a href="/whowe"> About Us </a> </li>
						<li class="menu-item">
                            <a href="/news"> News </a>
                        </li>
						<!-- <li>
                          <a href="" class="cta-btn-outline"> Member Login </a>
                      </li> -->
						<li> 
							<a href="https:///Member.AkosMD.com" class="cta-btn-1">
                                Member Login
                            </a>
						</li>
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
					<p>Virtual health is revolutionizing the healthcare industry, improving access and reducing cost for patients and providers alike. With digital health technology more advanced than ever and virtual consults that put both parties face to face, Akos is able to offer streamlined convenience without compromising quality care.</p>
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
					<h3>The future of virtual health</h3>
					<p class="subtitle">More than an app, an answer</p>
					<p>Akos is a pioneer in virtual health, offering patient-centered solutions that in turn benefit employers, physicians and healthcare centers. With a device agnostic interface that lets you virtually consult with a board-certified provider anywhere, anytime and care coordinators to ensure your needs are always being met, Akos strives to provide the most comprehensive telemedicine virtual care in the industry.</p>
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
				<p>Our seasoned team of professionals brings decades of experience in healthcare and business to the field of virtual medicine:</p>
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
									<h4 class="physician-name">Kishlay Anand, MD MS</h4> <span class="physician-title">Founder & Chief Executive Officer</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dr. Anand is a Cardiovascular Surgeon and is Board-Certified in Cardiovascular 
									Disease and Cardiac Electrophysiology. Dr. Anand received his medical degree 
									from All India Institute of Medical Sciences in India, and his Master’s degree 
									in Epidemiology from Columbia University. He completed his residency and fellowship 
									of Internal Medicine at Creighton University, and his fellowship in the Division of 
									Cardiology and the Division of Cardiac Electrophysiology at Creighton University. 
									Dr. Anand’s entrepreneurial experience includes being the chairman and founding 
									partner for Prayatna, a voluntary organization that works in the area of promoting 
									health awareness and patient welfare. In January 2002 when Gujarat, India was hit 
									by a massive earthquake, he raised funds for earthquake victims and organized an 
									emergency medical relief team that delivered health care under extremely challenging 
									conditions.
								</p>
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
									<h4 class="physician-name">Swaraj Singh, MD</h4> <span class="physician-title">Founder & Chief Innovation Officer</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dr. Singh is a Neurologist by profession, and Technologist by passion. He merged those 
									two interests together, and co-founded AkosMD with Dr. Anand, combining the latest in 
									technology with the best practices of medicine.  He completed his neurology training at 
									University of Arkansas for Medical Sciences and VA hospital, Little Rock AR, where he also 
									served as chief resident. He did a fellowship in vascular neurology at University of Massachusetts. 
									Dr. Singh has various publications during his training including co-authoring a textbook chapter. 
									He has presented his research in various national and international conferences. He has been awarded 
									many times including best resident of the year, Jeff Nicholas prize for dedication towards care of 
									veterans and a prize for evidence-based improvement in practice. Dr. Singh speaks 4 languages, 
									loves to play the Indian Classical Flute known as the Bansuri, and is married to a physician and 
									has 2 lovely daughters. 
								</p>
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
									<h4 class="physician-name">Maria Shah, MD</h4> <span class="physician-title">Chief Operating Officer</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dr. Shah has over 15 years of healthcare experience. After receiving her Doctorate in Medicine, 
									she was a postdoctoral research fellow in the pharmaceutical industry as a Clinical 
									Investigator/Sub-Investigator and Clinical Rater for patient- centered clinical trials in 
									diabetes and obesity, as well as diabetes and depression. 
									Dr. Shah moved into Healthcare Administration and Medical Case Management and has over 10 
									years in managed care experience including Chronic Care Management, Remote Patient Monitoring, 
									and Utilization Review in leading the development of policy and strategic programs to promote the 
									continuity of care throughout the healthcare system. She is an outspoken advocate of finding ways 
									to improve the delivery of care to serve patients’ needs in an evidence-based, cost-effective, and 
									patient-centric manner.
									Dr. Shah has previously held executive level positions including as Medical Directorships and 
									Chief Medical Officer for TPAs, health plans and PPO networks. Dr. Shah also serves on the boards 
									of several non for profit organizations, and as well as Advisory Boards for various specialty 
									pharmacies. 
								</p>
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
									<h4 class="physician-name">Dean Hoffman, MBA</h4> <span class="physician-title">Chief Financial Officer</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dean Hoffman is a senior executive with over 25 years of diverse executive leadership. 
									His financial, operational, and entrepreneurial expertise has been the foundation of his 
									working with both private and publicly traded companies throughout his career. 
									He has extensive experience in the healthcare and technology sectors and has been a 
									business consultant to companies in a wide range of industries. 
									Dean lends his business expertise to various not for profit organizations primarily 
									in the healthcare, social service, and education arenas by serving on their respective 
									boards of directors. He has also been a guest lecturer in the business schools at both 
									Arizona State University and the University of Arizona. Dean holds a Bachelor of Science 
									degree in Accounting and Business Administration, cum laude, from Illinois State University 
									and a Master of Business Administration from Arizona State University.
								</p>
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
									<h4 class="physician-name">Bill Swavely</h4> <span class="physician-title">Chief Technology Officer</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Bill Swavely is the newest member of our executive team as the Chief Technology Officer. As the CTO, Bill is responsible for the executive oversight of the company's product and technology roadmap. 
									Bill Swavely brings more than 25 years of experience leading enterprise information technology in health care, medical devices, digital health, entertainment, private equity, and telecommunications companies. Bill has provided technology leadership for public and private companies as well as startup organizations. 
									Prior to joining AkosMD, Bill served as the chief information officer for Pharm-Olam (mid-sized CRO), chief innovation officer for InfoBionic (Digital Health/RPM), CIO for BioTelemetry/CardioNet Inc. (Digital Health/RPM), chief technology officer for Blue Cross of Northeastern PA, CIO at VIASYS Healthcare (Med Devices)., as well as chief information technology officer and co-founder at Enable Business Solutions, LLC. Bill received his Bachelor of Science degree in electrical and computer engineering from Clarkson University and his MBA from Rensselaer Polytechnic Institute.
								</p>
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
									<h4 class="physician-name">Tom Henke</h4> <span class="physician-title">Senior Vice President-Growth Officer</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Tom Henke is AkosMD’s Senior Vice President of Sales and is responsible for all growth initiatives.  Tom is an experienced health care executive with deep digital health, care management and managed care experience. 
									Tom spent 20 years in managed care and spent 10 years as Senior Vice President, General Manager and Chief Innovation Officer at Medica Health Plans, and in 2010 Tom left Medica to launch QuickCheck Health, an early virtual care startup. Later, he led national sales at both Amplifon, a managed care approach to hearing health care and Medtronic Care Management Services, a leader in remote patient monitoring and chronic care management.  In both organizations he was responsible for sales and account success in the payer, provider and employer markets.  In both companies he also led the development of innovative, first-in-market, value-based offerings.  
									Tom has a Master of Business Administration in Finance from the University of St. Thomas and a Bachelor of Science in Economics from the University of Minnesota and is a frequent speaker on topics including consumer-based health care, digital health, care management, health care innovation and value-based care. 
								</p>
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
									<h4 class="physician-name">Joann Damawand</h4> <span class="physician-title">Vice President of Clinical Operations</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Joann Damawand has 30 + years of experience in healthcare. 
									Her clinical journey began as a hospital staff nurse managing pre- and post-operative patients in neurology and orthopedics. 
									She discovered the business of healthcare, and switched over the administrative healthcare, with 20 years in the health care insurance industry working with multiple health plans including self-funded plans, stoploss insurers, and Taft-Hartley plans. 
									Joann is an entrepreneur by passion, and this led her to start the Algonquin Company in 2000, an organization that provided managed health care services for the unique needs of American Indian membership and businesses across the Midwest. 
								</p>
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
									<h4 class="physician-name">Dewanzer Dawson</h4> <span class="physician-title">Director of Clinical Operations</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dewanzer - Dee, as she’s affectionately known as, is the Director of Clinical Operations at AkosMD with over 13 years of experience in healthcare. Dee has worked in many settings from nursing homes to home health settings, and primary care offices to hospitals.  
									She also was an instructor for medical assistance. 
									Dee has strong operational experience which makes her a powerful force in the workplace and uses her positive attitude and tireless energy to encourage others to work hard and succeed. 
									Dee is inspired daily by her husband and her one son. In her free time, Dee loves to volunteer to feed the homeless, assist ex-prisoners to learn to adjust in the community, go on walks, play Pokémon and enjoy time with her family and friends.
								</p>
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
									<h4 class="physician-name">Tricia Lachat</h4> <span class="physician-title">Chief Operating Officer</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dr. Shah has over 15 years of healthcare experience. After receiving her Doctorate in Medicine, 
									she was a postdoctoral research fellow in the pharmaceutical industry as a Clinical 
									Investigator/Sub-Investigator and Clinical Rater for patient- centered clinical trials in 
									diabetes and obesity, as well as diabetes and depression. 
									Dr. Shah moved into Healthcare Administration and Medical Case Management and has over 10 
									years in managed care experience including Chronic Care Management, Remote Patient Monitoring, 
									and Utilization Review in leading the development of policy and strategic programs to promote the 
									continuity of care throughout the healthcare system. She is an outspoken advocate of finding ways 
									to improve the delivery of care to serve patients’ needs in an evidence-based, cost-effective, and 
									patient-centric manner.
									Dr. Shah has previously held executive level positions including as Medical Directorships and 
									Chief Medical Officer for TPAs, health plans and PPO networks. Dr. Shah also serves on the boards 
									of several non for profit organizations, and as well as Advisory Boards for various specialty 
									pharmacies. 
								</p>
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
									<h4 class="physician-name">kelly F</h4> <span class="physician-title">Implementation Manager</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Kelly is AkosMD’s newest Implementation Manager. She has over 5 years of experience in healthcare, and lends her operational expertise to the Implementation and Onboarding of new clients. 
									Kelly also works with the AkosMD Provider Panel as a liaison to help onboard, train, and help facilitate a strong relationship between our patients, providers, and the Akos Team. 
									Kelly is motivated every day by her young daughter. They love to go on hikes, go to the park, and volunteer their time helping others. 
								</p>
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
									<h4 class="physician-name">Scott Dlugos, MD</h4> <span class="physician-title">Medical Director, Virtual Primary Care</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dr. Dlugos was born in Detroit, and completed his undergraduate education at Harvard and Doctorate in Medicine from the University of Michigan School of Medicine. 
									He then completed his residency at the Henry Ford Hospital in Detroit. 
									Dr. Dlugos moved to San Diego after completing residency in 1993 and became a “flying ER doctor” crisscrossing the southwestern US in his private plane until 2003. 
									He has traveled around the world several times surfing and playing polo; he played polo semi-professionally until 2009.  
								</p>
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
									<h4 class="physician-name">Anjmun Sharma, MD, MS </h4> <span class="physician-title">Medical Director, Worker’s Compensation</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dr. Sharma is a Board Certified Family and Occupational Medicine Practitioner with over 15 years of experience. 
									He completed his bachelors at SUNY Geneseo, Masters in Pharmacology from the Jacobs School of Medicine and Biomedical Sciences at the University of Buffalo, and his Doctorate in Medicine from Ross University School of Medicine with three years of General Surgery Graduate Medical Education; ACLS (Advanced Cardiovascular Life Support) and ATLS (Advanced Trauma Life Support) certifications. 
									Dr has extensive experience in Clinical Case Management, providing expert testimony in administrative court, completing independent medical exams, determining causality, compensability, and managing catastrophic cases. 
									Dr. Sharma currently lives in Colorado Springs, CO where he enjoys the Great Outdoors and Hiking, Skiing, and Boating.
								</p>
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
									<h4 class="physician-name">Rick Sloan, MD</h4> <span class="physician-title">Medical Director, Akos Urgent Cares</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dr. Rick Sloan grew up in rural Colorado and graduated from the University of Colorado. 
									Dr. Sloan spent 10 years serving our country in the United States Navy and is now a disabled Veteran, due to an accident on his ship.  
									After serving in the Navy, Dr. Sloan went back to college and graduated from the University of Colorado Medical School in 2002.  
									He then completed his residency in Family Medicine at Saint Joseph’s residency program in Phoenix, AZ, where he served as the Chief Resident. 
									After residency Dr. Sloan started his career working on the reservation at Salt River and Gila River Indian Health Communities, where he rapidly gained experience in helping patients with their drug and alcohol problems.  
									Dr. Sloan has helped several thousand patients and has been successful keeping his patients clean and sober.  
									Dr. Sloan opened his own practice in 2010 and his addiction practice grew tremendously.  
									Dr. Sloan continues to work in Family medicine, Addiction Medicine, and in the Urgent care. Dr. 
									Sloan also does outpatient detoxes, and provides continuity of care with medically assisted treatment (MAT). Dr. 
									Sloan’s clinic is the only one of its kind in Arizona, and in 2016 Dr. Sloan had the pleasure of serving on the Governor of Arizona’s Substance Abuse Task Force. 
								</p>
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
									<h4 class="physician-name">Kelly Hoscin</h4> <span class="physician-title">Chief Financial Officer</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Dean Hoffman is a senior executive with over 25 years of diverse executive leadership. 
									His financial, operational, and entrepreneurial expertise has been the foundation of his 
									working with both private and publicly traded companies throughout his career. 
									He has extensive experience in the healthcare and technology sectors and has been a 
									business consultant to companies in a wide range of industries. 
									Dean lends his business expertise to various not for profit organizations primarily 
									in the healthcare, social service, and education arenas by serving on their respective 
									boards of directors. He has also been a guest lecturer in the business schools at both 
									Arizona State University and the University of Arizona. Dean holds a Bachelor of Science 
									degree in Accounting and Business Administration, cum laude, from Illinois State University 
									and a Master of Business Administration from Arizona State University.
								</p>
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
									<h4 class="physician-name">Phelicia Laffredo, RN </h4> <span class="physician-title">Nurse Manager</span>
									
								</div>
							</div>
							<div class="physician-bio">
								<p>
									Phelicia began her career in nursing as a Private Duty RN Care Manager. 
									After some time in the private sector, Phelicia took a role as a staff nurse in the Progressive Care Unit at a local Community Hospital in PA. 
									After quickly realizing that many of the patients she cared for ended up going home on hospice, she decided to shift her focus to Case Management for a National Hospice brand, working in both PA and AZ. 
									As the COVID-19 pandemic changed the global healthcare scene, Phelicia transitioned to a role at AkosMD, using her Nursing and technology background to connect patients to healthcare virtually. 
									After nearly a year and a half as a staff nurse, she eventually assumed the role of RN Supervisor for the Telephonic Nursing department at AkosMD.
								</p>
							</div>
						</div>
						<!-- tile -->
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
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

<!-- <section class="careers-list">
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
</section> -->
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
<!-- <a href="javascript:void(0);" id="back-top"><i class="fa fa-chevron-up" aria-hidden="true"></i> Back to top</a> -->
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