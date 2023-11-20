<!-- <footer class="pt-5 mt-auto bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/" class="logo" title="{{ config('app.name') }}">
                    <img class="img-fluid" src="/images/logo-secondary.png">
                </a>
                <hr>
                <p>{{ $settings->description }}</p>
                <div class="zoom-icons mb-4">
                    @if(isset($settings->facebook))<a target="_blank" title="Facebook" href="{{ $settings->facebook }}"><i class="fab fa-facebook"></i> </a>@endif
                    @if(isset($settings->twitter))<a target="_blank" title="Twitter" href="{{ $settings->twitter }}"><i class="fab fa-twitter"></i> </a>@endif
                    @if(isset($settings->instagram))<a target="_blank" title="Instagram" href="{{ $settings->instagram }}"><i class="fab fa-instagram"></i> </a>@endif
                    @if(isset($settings->linkedin))<a target="_blank" title="LinkedIn" href="{{ $settings->linkedin }}"><i class="fab fa-linkedin"></i> </a>@endif
                    @if(isset($settings->youtube))<a target="_blank" title="Youtube" href="{{ $settings->youtube }}"><i class="fab fa-youtube"></i> </a>@endif
                </div>
                <small>
                    Website by <a href="https://github.com/bpocallaghan" target="_blank">{!! config('app.author') !!}</a>
                </small>
            </div>
            <div class="offset-md-1 col-md-4">
                <h3>Quick Links</h3>
                @if(isset($footerNavigation['root']))
                    <ul class="list-unstyled nav-footer">
                    @foreach($footerNavigation['root'] as $nav)
                            <li><a title="{{ $nav->title }}" href="{{ $nav->url }}">{{ $nav->title }}</a>
                            @if (isset($footerNavigation[$nav->id]))
                                <ul class="list-unstyled nav-footer">
                                    @foreach($footerNavigation[$nav->id] as $navItem)
                                        <li><a title="{{ $navItem->title }}" href="{{ $navItem->url }}">{{ $navItem->title }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                    </ul>
                @endif
            </div>

            <div class="col-sm-4">
                <h3>Get in Touch</h3>

                @if(isset($settings->telephone))<p data-icon="fa-phone fa-fw"> <strong class="sr-only">Phone </strong> <a href="tel:{{ trim($settings->telephone) }}">{{ $settings->telephone }}</a></p>@endif
                @if(isset($settings->cellphone))<p data-icon="fa-mobile-alt fa-fw"> <strong class="sr-only">Mobile </strong> <a href="tel:{{ trim($settings->cellphone) }}">{{ $settings->cellphone }}</a></p>@endif
                @if(isset($settings->email))<p data-icon="fa-envelope fa-fw"> <strong class="sr-only">Email </strong> <a href="mailto:{{ trim($settings->email) }}">{{ $settings->email }}</a></p>@endif
                @if(isset($settings->address))<p data-icon="fa-map-marker-alt fa-fw"> <strong class="sr-only">Physical Address</strong> {{ $settings->address }}</p>@endif
                @if(isset($settings->po_box))<p data-icon="fa-print fa-fw"> <strong class="sr-only">Postal Address</strong>{{ $settings->po_box }}</p>@endif
            </div>
        </div>
    </div>
    <div class="container-fluid p-3 mt-3 copyright bg-dark">
        {{--<p class="text-right float-left small">--}}
            {{--Copyright &copy; {{config('app.name') . ' ' . date('Y')}}--}}
        {{--</p>--}}
        <div class="text-center">
            <a class="small" href="/privacy-policy">Privacy Policy</a> |
            <a class="small" href="/terms-and-conditions">Terms and Conditions </a> |
            <a class="small" href="/faq">FAQs</a>
        </div>
    </div>
</footer>
-->
<footer>
                <div class="kingster-footer-wrapper ">
                    <div class="kingster-footer-container kingster-container clearfix">
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="text-2" class="widget widget_text kingster-widget">
                                <div class="textwidget">
                                    <p><img src="/images/logob.png" alt="" />
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_10"></span>
                                        <br /> @if(isset($settings->address))<strong class="sr-only">Physical Address</strong> {{ $settings->address }}@endif
                                        <br/> @if(isset($settings->po_box))<strong class="sr-only">Postal Address</strong>{{ $settings->po_box }}@endif
                                       </p>
                                    <p><span id="span_1dd7_11">
                                    @if(isset($settings->telephone))<strong class="sr-only">Phone </strong> <a href="tel:{{ trim($settings->telephone) }}">{{ $settings->telephone }}</a>@endif
                                    <br/>@if(isset($settings->cellphone))<strong class="sr-only">Mobile </strong> <a href="tel:{{ trim($settings->cellphone) }}">{{ $settings->cellphone }}</a>@endif
                                    </span>
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_12"></span>
                                        <br /> <a id="a_1dd7_8" >

                                        @if(isset($settings->email))<strong class="sr-only">Email </strong> <a href="mailto:{{ trim($settings->email) }}">{{ $settings->email }}</a>@endif
                                        </a></p>
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-left-align">
                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_111"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Our Campus</h3><span class="clear"></span>
                                <div class="menu-our-campus-container">
                                    <ul id="menu-our-campus" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="#">Acedemic</a></li>
                                        <li class="menu-item"><a href="#">Planning &#038; Administration</a></li>
                                        <li class="menu-item"><a href="#">Campus Safety</a></li>
                                        <li class="menu-item"><a href="#">Office of the Chancellor</a></li>
                                        <li class="menu-item"><a href="#">Facility Services</a></li>
                                        <li class="menu-item"><a href="#">Human Resources</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Campus Life</h3><span class="clear"></span>
                                <div class="menu-campus-life-container">
                                    <ul id="menu-campus-life" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="#">Accessibility</a></li>
                                        <li class="menu-item"><a href="#">Financial Aid</a></li>
                                        <li class="menu-item"><a href="#">Food Services</a></li>
                                        <li class="menu-item"><a href="#">Housing</a></li>
                                        <li class="menu-item"><a href="#">Information Technologies</a></li>
                                        <li class="menu-item"><a href="#">Student Life</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Academics</h3><span class="clear"></span>
                                <div class="menu-academics-container">
                                    <ul id="menu-academics" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="#">Canvas</a></li>
                                        <li class="menu-item"><a href="#">Catalyst</a></li>
                                        <li class="menu-item"><a href="#">Library</a></li>
                                        <li class="menu-item"><a href="#">Time Schedule</a></li>
                                        <li class="menu-item"><a href="#">Apply For Admissions</a></li>
                                        <li class="menu-item"><a href="#">Pay My Tuition</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="kingster-copyright-wrapper">
                    <div class="kingster-copyright-container kingster-container clearfix">
                        <div class="kingster-copyright-left kingster-item-pdlr">Copyright All Right Reserved 2023, Politeknik Pengadaan Nasional</div>
                        <div class="kingster-copyright-right kingster-item-pdlr">
                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_1dd7_112">
                                <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook">
                                    <i class="fa fa-facebook" ></i>
                                </a>
                                <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus">
                                    <i class="fa fa-google-plus" ></i>
                                </a>
                                <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin">
                                    <i class="fa fa-linkedin" ></i>
                                </a>
                                <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype">
                                    <i class="fa fa-skype" ></i>
                                </a>
                                <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter">
                                    <i class="fa fa-twitter" ></i>
                                </a>
                                <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram">
                                    <i class="fa fa-instagram" ></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
