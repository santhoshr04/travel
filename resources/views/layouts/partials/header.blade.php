<header class="pt-2 header-section header-section-one">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container-fluid">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-lg p-0">
                        <a class="site-logo site-title" href="{{ route('home') }}">
                            <img src="{{ asset('ics_logo.png') }}" style="height: 30px; width: auto;" alt="Simulated United States Air Force" class="logo-img">
                        </a>                        
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li class="menu_has_children"><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="menu_has_children"><a href="#0">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('about.index') }}">About Us</a></li>
                                        <li><a href="{{ route('about.rules') }}">Rules</a></li>
                                        <li><a href="{{ route('about.our-team') }}">Our Team</a></li>
                                        <li><a href="{{ route('about.our-fleets') }}">Our fleets</a></li>
                                    </ul>
                                </li>
                                <li><a href="#0">Operation</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('operations.pilots') }}">Pilot Roster</a></li>
                                        <li><a href="{{ route('operations.missions') }}">Missions</a></li>
                                    </ul>
                                </li>
                                <li><a href="#0">Stats</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('stats.liveflights') }}">Live Map</a></li>
                                        <li><a href="{{ route('stats.departures') }}">Upcoming Departure</a></li>
                                        <li><a href="{{ route('stats.pireps') }}">Latest flights</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                            </ul>
                            <div class="header-right">
                                <div class="px-4 header-action-area">
                                    <a href="https://icrew.simairforce.com/" class="action-btn two"><i class="icon-btn-icon"></i></a>
                                    <div class="header-action">
                                        <a href="https://icrew.simairforce.com/"  target="_balank"  class="btn--base"><i class="icon-btn-icon"></i>iCrew</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>