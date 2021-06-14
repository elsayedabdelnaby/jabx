<div class="section over-hide padding-top pb-4 section-background-6" id="footer">
    <div class="background-dark-blue-over-darker-2"></div>
    <div class="section-1400 z-bigger">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-5 mb-5 mb-md-0 text-center text-md-left footer-logo">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-auto">
                            <img src="{{ asset($site_settings->getLogoPathAttribute()) }}" alt="logo">
                        </div>
                        <div class="col-auto pl-0 align-self-center">
                            <h3 class="mb-0 color-light-2 font-weight-800">{{ $site_settings->title }}</h3>
                        </div>
                        <div class="col-12 pl-xl-5 mt-5 align-self-center">
                            <p class="mb-1 size-17 text-center-v color-light"><i
                                    class="uil uil-map-marker-alt size-20 mr-3 color-primary"></i>{{ $contact_us_data->address_title }}</p>
                            <div class="clearfix w-100"></div>
                            <p class="mb-0 size-17 text-center-v color-light"><i
                                    class="uil uil-clock-seven size-20 mr-3 color-primary"></i>{{ $contact_us_data->working_times }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 mb-5 mb-md-0 text-center text-md-left">
                    <h5 class="mb-4 color-white">Company</h5>
                    <a href="{{ route('aboutus') }}" class="link link-gray size-18 mb-1 animsition-link"
                        data-hover="About Us">About Us</a>
                    <div class="clearfix w-100"></div>
                    <a href="services-creative.html" class="link link-gray size-18 mb-1 animsition-link"
                        data-hover="Our Services">Our Services</a>
                    <div class="clearfix w-100"></div>
                    <a href="team.html" class="link link-gray size-18 mb-1 animsition-link"
                        data-hover="Team Members">Team Members</a>
                    <div class="clearfix w-100"></div>
                    <div class="clearfix w-100"></div>
                    <a href="{{ route('contact-us') }}" class="link link-gray size-18 animsition-link"
                        data-hover="Contact Us">Contact Us</a>
                </div>
                <div class="col-md-5 col-lg-4 text-center text-md-left">
                    <h5 class="mb-4 color-white">Contact</h5>
                    <a href="tel:{{ $contact_us_data->phone_1 }}" class="link link-gray size-18 mb-1" data-hover="{{ $contact_us_data->phone_1 }}">{{ $contact_us_data->phone_1 }}</a>
                    <div class="clearfix w-100"></div>
                    <a href="" class="link link-gray size-18 mb-1" data-hover="{{ $contact_us_data->phone_2 }}">{{ $contact_us_data->phone_2 }}</a>
                    <div class="clearfix w-100"></div>
                    <a href="" class="link size-18 link-primary"
                        data-hover="{{ $contact_us_data->email }}">{{ $contact_us_data->email }}</a>
                    <h5 class="mb-4 mt-5 color-white">Follow</h5>
                    @if(!empty($contact_us_data->facebook_link))
                        <a href="{{ $contact_us_data->facebook_link }}" class="link link-primary mb-1 mr-1" data-hover="Facebook">Facebook</a>
                    @endif
                    @if(!empty($contact_us_data->instagram_link))
                        <a href="{{ $contact_us_data->instagram_link }}" class="link link-primary mb-1 mr-1" data-hover="Instagram">Instagram</a>
                    @endif
                    @if(!empty($contact_us_data->twitter_link))
                        <a href="{{ $contact_us_data->twitter_link }}" class="link link-primary mb-1 mr-1" data-hover="Twitter">Twitter</a>
                    @endif
                    @if(!empty($contact_us_data->linkedin_link))
                        <a href="{{ $contact_us_data->linkedin_link }}" class="link link-primary mb-1" data-hover="LinkedIn">LinkedIn</a>
                    @endif
                </div>
                <div class="col-12 mt-5 mb-4">
                    <div class="section divider divider-light"></div>
                </div>
            </div>
            <div class="row text-center text-md-left">
                <div class="col-md order-md-first">
                    <p class="mb-0 size-14 color-gray-dark mt-1 font-weight-500">© {{ $site_settings->title }}. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
