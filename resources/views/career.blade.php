@extends('layouts.master')

@section('body-class', 'subPage aboutPage')

@section('content')
<!-- header-title -->
<section class="header-title section-padding">
    <div class="container text-center">
        <h2 class="title">Career</h2>
        <span class="sub-title">Home > Career</span>
    </div>
</section>
<!-- hiring-section -->
<section class="hiring-section section-padding">
    <div class="container">
        <div class="row">
                    <h3>XYZ Careers</h3>

                    <p>We are constantly seeking out talented individuals to join our team at XYZ. We understand the importance of diversity and recognize that a successful team requires a range of skills, expertise, and experiences.</p>
                    <p>At XYZ, we are looking for highly motivated professionals who thrive in fast-paced environments and are able to work collaboratively with both colleagues and clients.</p>
                    <p>We value innovators who bring different perspectives and welcome those with experience in finance and investment management.</p>
                    <p>In addition to these qualifications, all employees at XYZ must also embody our core values:</p>

                    <h4>Collaboration</h4>
                    <p>We foster a culture of teamwork and value the input of diverse ideas and perspectives, always keeping our clients at the forefront of our focus.</p>

                    <h4>Responsibility</h4>
                    <p>We expect all of our employees to practice responsible investing and work towards the objectives of our clients and stakeholders.</p>

                    <h4>Excellence</h4>
                    <p>The foundation of our reputation lies in the excellence of our service. To maintain our position as an industry leader, we continuously strive to be the best and deliver the best.</p>
                    <p>
                        If you believe you have the qualities we are looking for and are seeking a fulfilling and rewarding career, we would love to hear from you. Please reach out to us via email and we will respond as soon as possible to discuss potential opportunities.
                    </p>

                    <h3>Don't miss any oportunity to get hired.</h3>
                    <p>Submit your resume to us, and we'll notify you if a suitable job vacancy becomes available.</p>

                    <form class="contact-form">
                        <div class="form-group">
                            <input id="name" name="name" type="text" class="form-control"  required="" placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <input id="name2" name="name" type="text" class="form-control"  required="" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                            <input class="domainSearchBar form-control" id="email" name="email" type="email" required="" placeholder="Email address..">
                        </div>

                        <div class="form-group">
                            <input id="name3" name="name" type="text" class="form-control"  required="" placeholder="LinkedIn Profile">
                        </div>

                        <div class="form-group">
                            <input type="file" id="file2" class="custom-file-input form-control">
                        </div>
                        
                        <div class="form-group">
                            <input type="checkbox" aria-label="Checkbox for following text input"> I agree with the Term & Services 
                        </div>

                        <div class="form-group">
                            <button class="btn btn-default" type="submit">Submit Application</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
@endsection