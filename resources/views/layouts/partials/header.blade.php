<!-- start preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- end preloader -->

<header class="header-section">    
    <nav class="navbar navbar-inverse hidden-sm hidden-xs">
        <div class="navbar-inner">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><img src="assets/images/logo.png" alt="image"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>

                        <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="/about">About</a></li>

                        <li class="{{ request()->is('service', 'wealthPreservation', 'assetConsultancy', 'acquiringCapital', 'investmentApproach', 'investmentProcess', 'IPO', 'portfolioManagement') ? 'active dropdown' : 'dropdown' }}">
                            <a href="/service">Service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li class="{{ request()->is('wealthPreservation') ? 'active' : '' }}"><a href="/wealthPreservation">Wealth Preservation</a></li>
                                <li class="{{ request()->is('assetConsultancy') ? 'active' : '' }}"><a href="/assetConsultancy">Asset Consultancy</a></li>
                                <li class="{{ request()->is('acquiringCapital') ? 'active' : '' }}"><a href="/acquiringCapital">Acquiring Capital</a></li>
                                <li class="{{ request()->is('investmentApproach') ? 'active' : '' }}"><a href="/investmentApproach">Investment Approach</a></li>
                                <li class="{{ request()->is('investmentProcess') ? 'active' : '' }}"><a href="/investmentProcess">Investment Process</a></li>
                                <li class="{{ request()->is('IPO') ? 'active' : '' }}"><a href="/IPO">Initial Public Offering (IPO)</a></li>
                                <li class="{{ request()->is('portfolioManagement') ? 'active' : '' }}"><a href="/portfolioManagement">Portfolio Management</a></li>
                            </ul>
                        </li>
                        <li class="{{ request()->is('team') ? 'active' : '' }}"><a href="/team">Team</a></li>
                        <li class="{{ request()->is('faq') ? 'active' : '' }}"><a href="/faq">FAQs</a></li>
                        <li class="{{ request()->is('career') ? 'active' : '' }}"><a href="/career">Career</a></li>
                        <li class="{{ request()->is('privacy') ? 'active' : '' }}"><a href="/privacy">Privacy Statement</a></li>
                        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div> 
    </nav>
</header>