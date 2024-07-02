<div class="col-md-4">
    <div class="side-bar">
        <ul class="page-list text-left">
            <li class="{{ request()->is('wealthPreservation') ? 'active' : '' }}"><a href="/wealthPreservation">Wealth Preservation <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li class="{{ request()->is('assetConsultancy') ? 'active' : '' }}"><a href="/assetConsultancy">Asset Consultancy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li class="{{ request()->is('acquiringCapital') ? 'active' : '' }}"><a href="/acquiringCapital">Acquiring Capital <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li class="{{ request()->is('investmentApproach') ? 'active' : '' }}"><a href="/investmentApproach">Investment Approach <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li class="{{ request()->is('investmentProcess') ? 'active' : '' }}"><a href="/investmentProcess">Investment Process <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li class="{{ request()->is('IPO') ? 'active' : '' }}"><a href="/IPO">Initial Public Offering (IPO) <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li class="{{ request()->is('portfolioManagement') ? 'active' : '' }}"><a href="/portfolioManagement">Portfolio Management <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>

        <ul class="location">
            <li class="heading">Contact</li>

            <li>
                <i class="fa fa-road" aria-hidden="true"></i>

                <div class="text">XYZ <br> XXXX XXXX, <br> XXXX XXXX, <br> HONG KONG</div>
            </li>

            <li>
                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>

                <div class="text">+852</div>
            </li>

            <li>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>

                <div class="text">info@xyz.com</div>
            </li>
        </ul>
    </div>
</div>
