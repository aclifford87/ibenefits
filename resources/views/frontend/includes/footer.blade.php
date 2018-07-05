<!-- FOOTER -->
<footer class="footer-fixed" >
    <div class="w-auto p-5 mb-1 bg-light text-dark font-weight-light">
        <div class="row offset-xl-1 offset-md-1 pl-3 pr-3">

            <div class="col-md-2">
                <h6><u>Contact us</u></h6></br>
                <a href="{{ route('frontend.contact') }}">Contact Form</a></br>
                <a href="{{ route('frontend.headquarters') }}">Headquarters</a></br>
                <a href="{{ route('frontend.phone-numbers') }}">Available phone numbers</a>
            </div>

            <div class="col-md-2">
                <h6><u>Help Center / FAQ</u></h6></br>
                <a href="{{ route('frontend.FAQs') }}">List with FAQs</a>
            </div>

            <div class="col-md-2">
                <h6><u>Policies & Rules</u></h6></br>
                <a href="{{ route('frontend.rules-policy') }}">Policies & Rules Article</a></br>
                <a href="{{ route('frontend.shipping-policy') }}">Shipping Policy Article</a></br>
                <a href="{{ route('frontend.sitemap') }}">Sitemap</a>
            </div>

            <div class="col-md-2">
                <h6><u>Report an issue</u></h6></br>
                <a href="{{ route('frontend.report-an-issue') }}">Report An Issue Form</a>
            </div>

            <div class="col-md-2">
                <h6><u>Get paid for your feedback</u></h6></br>
                <a href="{{ route('frontend.survey') }}">Submit survey</a>
            </div>

            <div class="row col-12 pt-5">
                <div class="col-8">&copy; Copyright 2018 Growth Partners PLC &middot; <a href="{{ route('frontend.privacy') }}">Privacy</a> &middot; <a href="{{ route('frontend.terms-condition') }}">Terms & Condition</a> &middot; <a href="#">Back to top</a></div>
                <div class="col-4 pl-lg-3 float-right"><i class="fab fa-facebook-f fa-lg"></i> <i class="fab fa-twitter fa-lg w-5"></i> <i class="fab fa-instagram fa-lg w-5"></i></div>
            </div>
        </div>
    </div>
</footer>