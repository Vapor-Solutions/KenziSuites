<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h6 class="widget-title">Kenzi Suites</h6>
                {!! File::get(public_path('/text/footer_content.txt')) !!}
            </div>
            <!-- end col-4 -->
            <div class="col-xl-3 col-lg-1"> </div>
            <!-- end col-3 -->
            <div class="col-xl-3 col-lg-3">
                <h6 class="widget-title">Contact</h6>
                <p>info@kenzisuites.com<br>
                    +254 769 796 255<br>
                    <a href="https://www.google.com/maps/search/?api=1&amp;query=menyinkwa+kisii" data-fancybox=""
                        data-width="640" data-height="360">Discover On Map</a>
                </p>
            </div>
            <!-- end col-3 -->
            <div class="col-xl-2 col-lg-4">
                <h6 class="widget-title">Location</h6>
                <p> Menyinkwa, Kisii-Kilgoris Rd <br> Kisii, Kenya </p>
            </div>
            <!-- end col-2 -->
            <div class="col-12">
                <div class="bottom-bar"> <span>© {{ Carbon\Carbon::now()->format('Y') }} Kenzi Suites | A Deluxe BnB near you</span>
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/kenzisuites/">Facebook</a></li>
                        <li><a href="https://www.instagram.com/kenzi_suites/">Instagram</a></li>
                        <li><a href="https://www.linkedin.com/company/kenzi-suites">Linkedin</a></li>
                    </ul>
                    <!-- end footer-social -->
                </div>
                <!-- end bottom-bar -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
