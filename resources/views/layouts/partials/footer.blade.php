<footer class="footer-section section--bg pt-120">
    <div class="footer-element aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
        <img src="{{ asset('element-1.png') }}" alt="element">
    </div>
    <div class="container">
        <div class="footer-top-area p-0">
            <div class="px-2 row align-items-end mb-30-none">
                <div class="col-xl-12 col-lg-12 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a class="site-logo site-title" href="index.html">
                                <img src="{{ asset('ics_logo.png') }}" alt="Simulated United States Air Force">
                            </a>
                        </div>
                        <p>
                            The Simulated United States Air Force is a Virtual Organisation simulating operations of the United States Air Force. We are no way related to, funded by, or recognized by the Government of the United States or the United States Air Force.
                        </p>
                        <div class="footer-contact">
                            <p>
                                <i class="fas fa-envelope"></i> 
                                <a href="mailto:admins@simairforce.com">admins@simairforce.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="footer-bottom-area">
            <div class="row mb-30-none">
                <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                    <div class="footer-widget">
                        <h4 class="title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a target="_blank" href="https://vatsim.com/">VATSIM</a></li>
                            <li><a target="_blank" href="https://vatsim.com/">VASOS VATSIM</a></li>
                            <li><a target="_blank"  href="https://icrew.simairforce.com/">AirCrew Area</a></li>
                            <li><a target="_blank" href="https://icrew.simairforce.com/index.php/registration">AirCrew Entrance Test</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                    <div class="footer-widget">
                        <h4 class="title">About SIMUSAF</h4>
                        <ul class="footer-list">
                            <li><a href="{{ route('about.index') }}">About us</a></li>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('privacy-policy') }}#cokkies">Cookie Policy</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                    <div class="footer-widget">
                        <h4 class="title">Social Media Links</h4>
                        <ul class="footer-list">
                            <li>
                                <a href="https://discord.gg/769zjcwQk8" target="_blank" class="text-gray-600 hover:text-indigo-600">
                                    <i class="fab fa-discord mr-2"></i> Discord
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/simairforce" target="_blank" class="text-gray-600 hover:text-blue-600">
                                    <i class="fab fa-facebook-f mr-2"></i> Facebook
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
        <div class="p-4 text-center" style="color: white;">
            <h4 class="text-center" style="color: white;">
                simulated united states air force copyright (c) 2007 - 2025. all rights reserved. 
                <a href="#privacy-policy" style="text-decoration: underline;">privacy policy</a>
            </h4>
            {{-- <p class="text-muted">
                simulated united states air force is a non-profit organization. simulated united states air force is in no way related to, funded by, or recognized by the government of the united states or the united states air force.
            </p> --}}
        </div>               
    </div>
</footer>