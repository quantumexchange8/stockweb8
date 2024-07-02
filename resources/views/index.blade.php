@extends('layouts.master')

@section('body-class', 'homePageTwo')

@section('content')

<!-- slider-section -->
<section class="slider-section">
    <h2 class="hidden">title</h2>
    
    <div class="rev_slider_wrapper">
        <div id="rev_slider_2" class="rev_slider" style="display:none">
            <ul>
                <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="assets/images/slider/slider-2.jpg">
                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                    <img src="assets/images/slider/slider-2.jpg" alt="Sky" class="rev-slidebg">
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                        data-x="center" data-hoffset="0" 
                        data-y="top" data-voffset="300" 
                        data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>Wealth management
                    </div>
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                        data-x="center" data-hoffset="0" 
                        data-y="top" data-voffset="360" 
                        data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>provide exceptional service to clients
                    </div>
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption font-medium text-center sfb tp-resizeme letter-space-5" 
                        data-x="center" data-hoffset="0" 
                        data-y="center" data-voffset="90" 
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>optimize capital performance while minimizing risk through <br> thorough due diligence and continuous oversight of clients' interests.
                    </div>
                    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption sfr tp-resizeme letter-space-4" 
                        data-x="center" data-hoffset="0" 
                        data-y="center" data-voffset="180" 
                        data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'><a href="/about" class="el-btn-regular slider-btn-left btn btn-primary">About Us</a> <a href="/career" class="el-btn-regular btn btn-primary color-bg">Career</a>
                    </div>
                </li>

                <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="assets/images/slider/slider-5.jpg">
                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                    <img src="assets/images/slider/slider-5.jpg" alt="Sky" class="rev-slidebg">
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
                        data-x="left" data-hoffset="0" 
                        data-y="top" data-voffset="300" 
                        data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>Work closely with clients
                    </div>
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" 
                        data-x="left" data-hoffset="0" 
                        data-y="top" data-voffset="360" 
                        data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>to create an effective plan
                    </div>
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption font-medium sfb tp-resizeme letter-space-5" 
                        data-x="left" data-hoffset="0" 
                        data-y="center" data-voffset="90" 
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>manage clients' financial and investment matters, constantly seeking <br> opportunities to enhance positions and mitigate risk.
                    </div>
                    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption sfr tp-resizeme letter-space-4" 
                        data-x="left" data-hoffset="0" 
                        data-y="center" data-voffset="180" 
                        data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'><a href="/about" class="el-btn-regular slider-btn-left btn btn-primary">About Us</a> <a href="/career" class="el-btn-regular btn btn-primary color-bg">Career</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>


<!-- Welcome-Section -->
<section class="about-office-section">
    <div class="container">
        <div class="row">
            <div class="content">
                <h2>Welcome to XYZ</h2>

                <p>
                    Headquartered in Hong Kong, XYZ has been providing exceptional service to private clients since XXXX. Our primary goal in wealth management is to optimize capital performance while minimizing risk through thorough due diligence and continuous oversight of our clients' interests.
                </p>
                <p>
                    We offer customized asset and investment solutions tailored to each individual client, and we provide comprehensive and personalized support to help them achieve their objectives. Our strategies are developed based on our extensive experience and reliable methodologies, taking into account the unique requirements of each client.
                </p>
                <p>
                    Our dedicated advisors work closely with clients to understand their goals and create an effective plan. They diligently manage our clients' financial and investment matters, constantly seeking opportunities to enhance positions and mitigate risk.
                </p>
                <p>
                    With a successful track record in both prominent and niche markets worldwide, choosing XYZ ensures clients receive a trusted and reliable service from a team of industry professionals. We place great emphasis on research and analysis of emerging opportunities, global developments, and economic environments.
                </p>
                <p>
                    This enables us to provide our clients with actionable information based on quantitative and qualitative data, giving them a competitive edge. In an increasingly globalized and interconnected world, XYZ is here to provide clarity. Our team is always available to offer the support and guidance you need in any situation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- finance-service-section -->
<section class="finance-service-section section-padding">
    <div class="container text-center">
        <div class="section-title">
            <h2>Our Services</h2>
            <div class="border-3"></div>
            <p>We offer a wide range of financial consulting services <br> tailored to meet your business needs</p>
        </div>

        <div class="finance-carousel owl-carousel owl-theme">
            <div class="finance-wrapper item">
                <a href="/wealthPreservation">
                    <div class="icon"><img src="assets/images/icon/i1.png" alt=""></div>

                    <div class="wrapper-content">
                        <h4>Wealth Preservation</h4>
                        <p>Wealth preservation through customized strategies, rigorous risk assessment, and portfolio analysis to safeguard and grow client assets effectively.</p>
                    </div>
                </a>
            </div>

            <div class="finance-wrapper item">
                <a href="/assetConsultancy">
                    <div class="icon"><img src="assets/images/icon/i2.png" alt=""></div>

                    <div class="wrapper-content">
                        <h4>Asset Consultancy</h4>
                        <p>Pragmatic asset management, tailored strategies, and proactive risk mitigation to maximize growth and align assets with client objectives effectively.</p>
                    </div>
                </a>
            </div>

            <div class="finance-wrapper item">
                <a href="/acquiringCapital">
                    <div class="icon"><img src="assets/images/icon/i3.png" alt=""></div>

                    <div class="wrapper-content">
                        <h4>Acquiring Capital</h4>
                        <p>Comprehensive service in acquiring capital, tailored to client needs, leveraging networks and expertise to secure favorable terms efficiently and effectively managed.</p>
                    </div>
                </a>
            </div>

            <div class="finance-wrapper item">
                <a href="/investmentApproach">
                    <div class="icon"><img src="assets/images/icon/c1.png" alt=""></div>

                    <div class="wrapper-content">
                        <h4>Investment Approach</h4>
                        <p>Tailored strategies, thorough research, proactive monitoring, and rigorous risk mitigation maximize client value efficiently.</p>
                    </div>
                </a>
            </div>

            <div class="finance-wrapper item">
                <a href="/investmentProcess">
                    <div class="icon"><img src="assets/images/icon/i4.png" alt=""></div>

                    <div class="wrapper-content">
                        <h4>Investment Process</h4>
                        <p>Securing investment involves demonstrating stability, revenue potential, and long-term viability with a clear business plan and innovative market disruption strategies.</p>
                    </div>
                </a>
            </div>

            <div class="finance-wrapper item">
                <a href="/IPO">
                    <div class="icon"><img src="assets/images/icon/c2.png" alt=""></div>

                    <div class="wrapper-content">
                        <h4>Initial Public Offering (IPO)</h4>
                        <p>Guiding companies through IPOs to access capital, increase visibility, ensure sustainability, and facilitate venture capital exits.</p>
                    </div>
                </a>
            </div>

            <div class="finance-wrapper item">
                <a href="/portfolioManagement">
                    <div class="icon"><img src="assets/images/icon/c3.png" alt=""></div>

                    <div class="wrapper-content">
                        <h4>Portfolio Management</h4>
                        <p>Tailored portfolio solutions optimize returns by identifying opportunities, managing risks, and leveraging emerging markets effectively.</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- about-Company-Section -->
<section class="about-Company-Section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>About Company</h2>
            <div class="border-4"></div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="content-wrapper">
                    <h3>Continuously Expanding <br> Global Financial Expertise</h3>

                    <p>Since XXXX, XYZ has continuously built upon its foundations, expanding its global presence, range of services, and expertise. Our goal remains unchanged: to maximize the performance of our clients' capital through principled, targeted investments and effective wealth management.</p>

                    <ul class="content">
                        <li>
                            <img src="assets/images/icon/a1.png" alt="">

                            <div class="single-content">
                                Prioritizing client interests with targeted investments.
                            </div>
                        </li>

                        <li>
                            <img src="assets/images/icon/a2.png" alt="">

                            <div class="single-content">
                                Global expertise in asset management and financial planning.
                            </div>
                        </li>

                        <li>
                            <img src="assets/images/icon/a3.png" alt="">

                            <div class="single-content">
                                Managing $10 billion in assets, expanding in Southeast Asia.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="faq-content">
                    <h3>Frequently Asked Question</h3>

                    <div id="accordion" class="accordion-content">
                        <h3>How do I become a client of XYZ?</h3>
                        <div>
                            <p>To become a client of XYZ, fill out our online application form. Once we verify your information, we will contact you to set up your account. Alternatively, you can call us to get started.</p>
                        </div>

                        <h3>How soon after becoming a client can I start investing with XYZ?</h3>
                        <div>
                            <p>You can start investing with XYZ soon after becoming a client. Our team will review your needs and goals, then help you choose and execute the best investment options.</p>
                        </div>

                        <h3>Can I invest wherever I am in the world?</h3>
                        <div>
                            <p>Yes, you can invest from anywhere in the world. Our global network allows you to access our services and manage your account from any location.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- achievement-Section -->
<section class="achievement-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>XYZ's Successful History</h2>
            <div class="border-3"></div>
        </div>

        <div>
            <p>
                Since our establishment in XXXX, we have achieved remarkable success, evident from our exceptional track record.
            </p>
            <p>
                Our consistent ability to generate substantial returns and secure significant capital for clients in various areas such as initial public offerings, investments, and property and asset development has been truly impressive.
            </p>
            <p>
                Our unwavering commitment to our clients, coupled with the expertise of our team, allows us to deliver annual returns ranging from 14% to 17% to our valued investors.
            </p>
            <p>
                Through collaborative efforts within our company and in partnership with our clients, we continuously strive to meet objectives, enhance portfolio value, and fortify positions through meticulous planning.
            </p>
            <p>
                To illustrate our achievements, here are a few examples from our trading history that exemplify the success we attain when we onboard clients and pursue their financial aspirations.
            </p>
        </div>
    </div>
</section>

<!-- team-section -->
<section class="team-section section-padding">
    <div class="container">
        <div class="section-title text-left">
            <h2>Executive Management Team</h2>
            <div class="border"></div>
        </div>

        <div class="team-carousel owl-carousel owl-theme">
            <div class="team-wrapper item">
                <div class="caption">
                    <img src="assets/images/team/1.jpg" alt="">

                    <ul class="hover-view">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="contact-wrapper">
                    <h4><a href="/team">Brian Chang</a></h4>
                    <span class="position">Chief Executive Officer</span>
                </div>
            </div>

            <div class="team-wrapper item">
                <div class="caption">
                    <img src="assets/images/team/2.jpg" alt="">

                    <ul class="hover-view">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="contact-wrapper">
                    <h4><a href="/team">Jeremy Saunders</a></h4>
                    <span class="position">Chief Operations Officer</span>
                </div>
            </div>

            <div class="team-wrapper item">
                <div class="caption">
                    <img src="assets/images/team/3.jpg" alt="">

                    <ul class="hover-view">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="contact-wrapper">
                    <h4><a href="/team">Sylvia Yeung</a></h4>
                    <span class="position">Chief Financial Officer</span>
                </div>
            </div>
        </div>

        <div class="link text-center">
            <a href="/team" class="btn btn-primary">Member details</a>
        </div>
    </div>
</section>

<hr>

<!-- Off-Canvas View Only -->
<span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>

<div id="offcanvas-menu" class="visible-xs visible-sm">
    
    <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>

    <ul class="menu-wrapper">
        <li>
            <a class="active dropmenu" href="#">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="dropDown sub-menu">
                    <li><a class="active" href="index.html">Home One</a></li>
                    <li><a href="index-two.html">Home Two</a></li>
                    <li><a href="index-three.html">Home Three</a></li>
                    <li><a href="index-four.html">Home Four</a></li>
                    <li><a href="index-five.html">Home Five</a></li>
                    <li><a href="index-six.html">Home Six</a></li>
                </ul>
        </li>

        <li><a href="about.html">About</a></li>
        

        <li>
            <a class="dropmenu" href="#">Service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropDown sub-menu">
                <li><a href="service.html">All Services</a></li>
                <li><a href="service-one.html">Service-One</a></li>
                <li><a href="service-two.html">Service-Two</a></li>
                <li><a href="service-three.html">Service-Three</a></li>
                <li><a href="service-four.html">Service-Four</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" href="#">Project <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropDown sub-menu">
                <li><a href="project.html">Project 4 col</a></li>
                <li><a href="project-three.html">Project 3 col</a></li>
                <li><a href="project-two.html">Project 2 col</a></li>
                <li><a href="single-project.html">Single Project</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropDown sub-menu">
                <li><a href="career.html">Career</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="partner.html">Partner</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="testimonial.html">Testimonial</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="single-blog.html">Single Blog</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="cart.html">Cart</a></li>
            </ul>
        </li>

        <li><a href="contact.html">Contact</a></li>
    </ul>   
</div>
<!-- Off-Canvas View Only -->

@endsection
