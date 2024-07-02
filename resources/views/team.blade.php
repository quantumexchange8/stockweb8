@extends('layouts.master')

@section('body-class', 'subPage teamPage')

@section('content')
<!-- header-title -->
<section class="header-title section-padding">
    <div class="container text-center">
        <h2 class="title">Team</h2>
        <span class="sub-title">Home > Team</span>
    </div>
</section>

<!-- team-page-section -->
<section class="team-page-section section-padding">
    <div class="container">
        <div class="section-wrapper">
            <div class="col-sm-4">
                <div class="team-wrapper">
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
                        <p>
                            Brian Chang is the Chief Executive Officer of the company. He actively participates in our daily operations with a hands-on approach. Brian has over twenty years of experience in the financial services sector. Before joining XYZ, he worked at HSBC as the Head of Equity Capital Markets for the Asia-Pacific region.
                        </p>
                        <p>
                            Brian's commitment to service quality, financial planning expertise, and interest in investment management led to him being appointed Chief Executive Officer of XYZ in XXXX.
                        </p>
                        <p>
                            Brian holds a Bachelor's degree in Business Finance and Management from Hong Kong University and a MA in Investment Banking from the New York University.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="team-wrapper">
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
                        <p>
                            Jeremy Saunders is our Chief Financial Officer with two decades of experience in investment and asset management. He supervises our financial activities, manages accounting operations, and provides strategic guidance on executive decisions.
                        </p>
                        <p>
                            Before joining XYZ, he worked at Barclays Capital in London as the Head of Corporate and Investment Banking, where he was recognized company-wide for his role in restructuring national investment operations. Jeremy later moved to Hong Kong and joined HSBC where he was a Senior Portfolio Director.
                        </p>
                        <p>
                            Jeremy holds a Bachelor's degree in Business Management and a MA in Investment Banking from the London School of Economics.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="team-wrapper">
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
                        <p>
                            Sylvia Yeung has an extensive career in finance that spans over 25 years. Throughout her career, she has gained valuable experience working at prestigious companies in both Europe and Asia.
                        </p>
                        <p>
                            Since XXXX, Sylvia has held the position of Chief Investment Officer at XYZ, where she is responsible for overseeing our investment and asset strategies. Additionally, she conducts macroeconomic research, manages our FX portfolio, and plays a key role in enhancing our investment policies.
                        </p>
                        <p>
                            Prior to joining XYZ, Sylvia held the position of Director of Investment Strategy at OCBC Bank in Singapore. She also worked as the Head of Investment Management at BNP Paribas in Shanghai.
                        </p>
                        <p>
                            Sylvia's educational background includes a MA in Pure and Statistical Mathematics and a BSc in Accounting and Finance both from the Shanghai University of Finance and Economics.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
