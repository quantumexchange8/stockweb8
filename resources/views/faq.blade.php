@extends('layouts.master')

@section('body-class', 'subPage')

@section('content')
<!-- header-title -->
<section class="header-title section-padding">
    <div class="container text-center">
        <h2 class="title">F.A.Q</h2>
        <span class="sub-title">Home > F.A.Q</span>
    </div>
</section>

<!-- faq-page-section -->
<section class="faq-page-section section-padding">
    <div class="container">
        <div class="faq-content">
            <h3>Frequently Asked Question</h3>

            <div id="accordion" class="accordion-content">
                <h3>Is XYZ a registered company?</h3>
                <div>
                    <p>Indeed, XYZ is a duly registered company and possesses the necessary regulatory approval to conduct operations in all the countries where we maintain a presence.</p>
                    <ul>
                        <li><strong>Company Name:</strong> XYZ</li>
                        <li><strong>Company Registration Number:</strong> XXXXXX</li>
                        <li><strong>Securities and Futures Commission Number:</strong> XXXXXX</li>
                        <li><strong>Registered Address:</strong> XXXXXX, XXXXXX, XXXXXX, XXXXXX, Hong Kong</li>
                    </ul>
                </div>

                <h3>How do I become a client of XYZ?</h3>
                <div>
                    <p>
                        To become a client of XYZ, simply fill out our online application form and submit it. Once we have received and verified your information, we will reach out to you to set up your account. If you prefer, you can also contact us by phone to explore becoming a client.
                    </p>
                </div>

                <h3>How soon after becoming a client can I start investing with XYZ?</h3>
                <div>
                    <p>
                        After determining your investment needs, financial status, and goals, our team of experts will pinpoint the most suitable investment options for you and execute them based on your instructions.
                    </p>
                </div>

                <h3>Can I invest wherever I am in the world?</h3>
                <div>
                    <p>
                        Our extensive network provides global access to our services, allowing you to invest and oversee your account from any location around the world.
                    </p>
                </div>

                <h3>What if I am not familiar with financial markets?</h3>
                <div>
                    <p>
                        We cater to a wide range of investors, from seasoned ones to newcomers. Whether you already have a portfolio or are considering your initial investment, our team of experts is dedicated to equipping you with the necessary knowledge and insights to help you make well-informed choices. Count on us to offer reliable guidance throughout the entire process.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
