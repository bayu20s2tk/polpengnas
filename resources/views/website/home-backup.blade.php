@extends('website.website')

@section('content')
<!-- POLPENNAS -->
<div class="kingster-page-wrapper" id="kingster-page-wrapper">

                <div class="gdlr-core-page-builder-body">
                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: rgba(24,36,59,0.9) ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">

                                    @if((isset($showPageBanner) && $showPageBanner === true) || !isset($showPageBanner))
   
                                     <!-- BANNER POLPENNAS -->
    
                                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                                                <ul>
                                                @foreach($banners as $k => $banner)
                                                    
                                                 
                                                    <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ uploaded_images_url($banner->image) }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="{{ uploaded_images_url($banner->image) }}" alt="" title="slider-1-2" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        @if($banner->description)
                                                        <div class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="38" data-y="center" data-voffset="-146" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">{!! $banner->description !!}</div>    
                                                        @endif
                                                        
                                                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-4" data-x="33" data-y="center" data-voffset="-44" data-width="['830']" data-height="['118']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":330,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:#3db166;border-radius:3px 3px 3px 3px;"></div>
                                                        @if(!$banner->hide_name)
                                                             <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-2" data-x="33" data-y="center" data-voffset="-44" data-width="['auto']" data-height="['118']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="background-color:#3db166;border-radius:3px 3px 3px 3px;z-index: 7; white-space: nowrap; font-size: 60px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">{!! $banner->name !!}</div>
                                                        @endif
                                                        @if($banner->action_url)
                                                                
                                                                <div class="tp-caption rev-btn rev-hiddenicon " id="slide-3-layer-6" data-x="34" data-y="center" data-voffset="80" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":660,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(1,61,135);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[19,19,19,19]" data-paddingright="[21,21,21,21]" data-paddingbottom="[19,19,19,19]" data-paddingleft="[21,21,21,21]" style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a class="" target="_blank" href="{{ $banner->action_url }}">{{ $banner->action_name ?: 'read more' }}</a></div>
                                                        @endif
                                                        
                                                    </li>
                                                    @endforeach   
                                                </ul>
                                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                            </div>

                                        </div>
                                    
<!-- BANNER POLPENNAS -->
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="gdlr-core-pbf-wrapper  hp1-col-services"  data-skin="Blue Title" id="gdlr-core-wrapper-1">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class=" gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr clearfix" id="div_1dd7_0">
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_1">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_2">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="upload/icon-1.png" alt="" width="40" height="40" title="icon-1" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_0">Kehidupan Kampus</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_3">Semua di sini</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-1">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_4">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_5">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="upload/icon-2.png" alt="" width="44" height="40" title="icon-2" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_1">Wisuda</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_6">Mendapatkan Diploma</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-2">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_7">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_8">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="upload/icon-3.png" alt="" width="44" height="39" title="icon-3" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_2">UKM</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_9">Klub Mahasiswa</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-3">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_10">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_11">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="upload/icon-4.png" alt="" width="41" height="41" title="icon-4" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_3">Sosial</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_12">Semua di sini</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper "  id="gdlr-core-wrapper-2">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_13" data-parallax-speed="0.8"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_14" data-sync-height="height-1">
                                        
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <a href="#">
                                                <img src="images/home/slide-6b.jpg" width="700" height="430" alt="" />
                                            </a>
                                            <!-- <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_15" data-parallax-speed="0"></div> -->
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-4">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_16" data-sync-height="height-1">
                                        <!-- <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_17" data-parallax-speed="0.1"></div>
                                        </div> -->
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_18">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_10">Ajukan Permohonan Pendaftaran</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_0">Pendaftaran angkatan 2024 sudah dibuka</span></div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_19">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_12">
                                                        <p>Kami tidak hanya memberikan pendidikan dan pengalaman kepada para siswa yang mempersiapkan mereka untuk sukses dalam karier. Kami membantu mereka sukses dalam karier mereka-untuk menemukan bidang yang mereka sukai dan berani memimpinnya.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" id="a_1dd7_0"><span class="gdlr-core-content" >Daftar Sekarang</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="gdlr-core-pbf-wrapper " id="div_1dd7_21">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_22" data-parallax-speed="0.2"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" id="div_1dd7_23">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" id="div_1dd7_24"><img src="upload/logo-white.png" alt="" width="262" height="35" title="logo-white" /></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_25">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_5">About Our University</h3></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_26">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_27">
                                                        <p>We are one of the largest, most diverse universities in the USA with over 90,000 students in USA, and a further 30,000 studying across 180 countries for Kingster University.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_28">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_29">
                                                        <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" id="gdlr-core-button-id-66813"><span class="gdlr-core-content" >Read More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" id="i_1dd7_0"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_30" data-skin="Column Service">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_31"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_32">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_33"><img src="upload/col-icon-1.png" alt="" width="41" height="41" title="col-icon-1" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_6">Layanan Pendidikan</h3></div>
                                                        <div class="gdlr-core-column-service-content" id="div_1dd7_34">
                                                            <p>Poltek Pengadaan Nasional didirikan oleh yayasan ... pada tahun 2023 untuk kepentingan publik dan telah diakui.</p> <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" id="a_1dd7_1">Pelajari Lebih Lanjut</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-5">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_35">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_36"><img src="upload/col-icon-2.png" alt="" width="43" height="45" title="col-icon-2" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_7">Jaringan Kemitraan</h3></div>
                                                        <div class="gdlr-core-column-service-content" id="div_1dd7_37">
                                                            <p>Jaringan kemitraan dan kerjasama kampus yang luas baik swasta dan pemerintah mencakup Nasional dan Internasional.</p> <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" id="a_1dd7_2">Pelajari Lebih Lanjut</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-6">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_38">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_39"><img src="upload/col-icon-3.png" alt="" width="40" height="43" title="col-icon-3" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_8">Kompetensi Akademik</h3></div>
                                                        <div class="gdlr-core-column-service-content" id="div_1dd7_40">
                                                            <p>Poltek Pengadaan memiliki kompetensi akademik dengan sertifikat berstandar nasional dan internasional yang diakui</p> <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" id="a_1dd7_3">Pelajari Lebih Lanjut</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-7">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_41">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_42"><img src="upload/col-icon-4.png" alt="" width="47" height="47" title="col-icon-4" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_9">Kehidupan Kampus</h3></div>
                                                        <div class="gdlr-core-column-service-content" id="div_1dd7_43">
                                                            <p>Kehidupan kampus yang nyaman dengan berbagai fasilitas pendukung proses akademik serta membentuk karakter pemimpin.</p> <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" id="a_1dd7_4">Pelajari Lebih Lanjut</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_44">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_45" data-sync-height="height-2">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-widget">
                                                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">News & Updates</h3>
                                                            <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                                                        </div>
                                                        <a class="gdlr-core-block-item-read-more" href="/berita" target="_self" id="a_1dd7_5">Read All News</a>
                                                    </div>
                                                    
                                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
                                                            <div class="gdlr-core-item-list-inner gdlr-core-item-mglr">
                                                                
                                                                <div class="gdlr-core-blog-grid ">
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-content-wrap">
                                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#">June 6, 2016</a>
                                                                            </span>
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                <a href="#" rel="tag">Admission</a>
                                                                                <span class="gdlr-core-sep">,</span>
                                                                                <a href="#" rel="tag">Student</a>
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_11">
                                                                            <a href="#" >Professor Albert joint research on mobile money in Tanzania</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#">
                                                                        <img src="upload/shutterstock_218235004-150x150.jpg" alt="" width="150" height="150" title="Student" />
                                                                    </a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#">June 6, 2016</a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <a href="#" rel="tag">Hot</a>
                                                                            <span class="gdlr-core-sep">,</span>
                                                                            <a href="#" rel="tag">Updates</a>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_12">
                                                                        <a href="#" >A Global MBA for the next generation of business leaders</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#">
                                                                        <img src="upload/shutterstock_481869205-150x150.jpg" alt="" width="150" height="150" title="shutterstock_481869205" />
                                                                    </a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#">June 6, 2016</a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <a href="#" rel="tag">Admission</a>
                                                                            <span class="gdlr-core-sep">,</span>
                                                                            <a href="#" rel="tag">Event</a>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_13">
                                                                        <a href="#" >Professor Tom comments on voluntary recalls by snack brands</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#">
                                                                        <img src="upload/shutterstock_361397258-150x150.jpg" alt="" width="150" height="150" title="shutterstock_361397258" />
                                                                    </a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#">June 6, 2016</a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <a href="#" rel="tag">Article</a>
                                                                            <span class="gdlr-core-sep">,</span>
                                                                            <a href="#" rel="tag">Research</a>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_14">
                                                                        <a href="#" >Professor Alexa is interviewed about Twitter&#8217;s valuation</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-8">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-right" id="div_1dd7_48" data-sync-height="height-2">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_49" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_1dd7_50">
                                                    <div class="gdlr-core-title-item-left-icon" id="div_1dd7_51"><i class="icon_link_alt" id="i_1dd7_1"></i></div>
                                                    <div class="gdlr-core-title-item-left-icon-wrap">
                                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_15">Quick Links</h3></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-66469">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_16"><a href="#" target="_self" >Alumni & Donors</a></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" id="div_1dd7_52">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_53"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-42777">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_17"><a href="#" target="_self" >Athletic Calendar</a></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" id="div_1dd7_54">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_55"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-51281">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_18"><a href="#" target="_self" >All Kingster’s Events</a></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" id="div_1dd7_56">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_57"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-78243">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_19"><a href="#" target="_self" >Partnership & Out Reach</a></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" id="div_1dd7_58">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_59"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-14842">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_20"><a href="#" target="_self" >Academic Programs</a></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" id="div_1dd7_60">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_61"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"  id="gdlr-core-title-item-id-33183">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_21"><a href="#" target="_self" >Tution And Fees</a></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" id="div_1dd7_62">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_63"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first" data-skin="Blue Title">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-left" id="div_1dd7_64" data-sync-height="height-3" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_65"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_66">
                                                        <div class="gdlr-core-twitter-item gdlr-core-item-pdb" id="div_1dd7_67">
                                                            <div class="gdlr-core-block-item-title-nav ">
                                                                <div class="gdlr-core-flexslider-nav gdlr-core-plain-style gdlr-core-block-center"></div>
                                                            </div>
                                                            
                                                            <div class="gdlr-core-twitter-content">
                                                                <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="1" data-nav="navigation" data-nav-parent="gdlr-core-twitter-item">
                                                                    <ul class="slides" id="ul_1dd7_0">
                                                                        <li class="gdlr-core-item-mglr">
                                                                            <div class="gdlr-core-twitter-item-list">
                                                                                <span class="gdlr-core-twitter-item-list-content">Shaking off the working week! What&#8217;s on the agenda for the weekend? by KonstantinKolosov via… 
                                                                                    <a target="_blank" href="https://t.co/fSyxq53H6P">https://t.co/fSyxq53H6P</a>
                                                                                </span>
                                                                                <span class="gdlr-core-twitter-item-list-date gdlr-core-skin-caption">
                                                                                    <a class="gdlr-core-twitter-date" href="http://twitter.com/Envato/statuses/1030582660324892674" target="_blank"> 18 hours ago</a>
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="gdlr-core-item-mglr">
                                                                            <div class="gdlr-core-twitter-item-list">
                                                                                <span class="gdlr-core-twitter-item-list-content">RT 
                                                                                    <a href="http://www.twitter.com/placeitapp">@placeitapp</a>: Making a 
                                                                                    <a target="_blank" href="http://twitter.com/search?q=YouTube">#YouTube</a> banner for your channel is easy with Placeit&#8217;s 
                                                                                    <a target="_blank" href="http://twitter.com/search?q=bannermaker!">#bannermaker!</a> Make your own in sec… 
                                                                                    <a target="_blank" href="https://t.co/0X22tX3wtm">https://t.co/0X22tX3wtm</a>
                                                                                </span>
                                                                                <span class="gdlr-core-twitter-item-list-date gdlr-core-skin-caption">
                                                                                    <a class="gdlr-core-twitter-date" href="http://twitter.com/Envato/statuses/1030338474891792385" target="_blank"> yesterday</a>
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="gdlr-core-item-mglr">
                                                                            <div class="gdlr-core-twitter-item-list">
                                                                                <span class="gdlr-core-twitter-item-list-content">Our Chief People Officer 
                                                                                    <a href="http://www.twitter.com/MRidsdale16">@MRidsdale16</a> joined 
                                                                                    <a href="http://www.twitter.com/benjaminlaw">@benjaminlaw</a>  and 
                                                                                    <a href="http://www.twitter.com/raejohnston">@raejohnston</a> on 
                                                                                    <a href="http://www.twitter.com/tsushow">@tsushow</a> to discuss all things Cultu… 
                                                                                    <a target="_blank" href="https://t.co/uszxz0qicU">https://t.co/uszxz0qicU</a>
                                                                                </span>
                                                                                <span class="gdlr-core-twitter-item-list-date gdlr-core-skin-caption">
                                                                                    <a class="gdlr-core-twitter-date" href="http://twitter.com/Envato/statuses/1029988653282541570" target="_blank"> 2 days ago</a>
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="White Text">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-right" id="div_1dd7_68" data-sync-height="height-3">
                                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_69"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_70">
                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_71"><img src="upload/apply-logo.png" alt="" width="42" height="39" title="apply-logo" /></div>
                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                        <div class="gdlr-core-column-service-title-wrap">
                                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_22">Apply To Kingster</h3></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="gdlr-core-pbf-column-link" href="#" target="_self"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_72">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_73" data-parallax-speed="0.2"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_1dd7_74">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" id="div_1dd7_75">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" id="div_1dd7_76">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg"><img src="upload/icon-play.png" alt="" width="82" height="82" title="icon-play" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_23">Video Tour in Kingster</h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" id="div_1dd7_77">
                                        <div class="gdlr-core-text-box-item-content" id="div_1dd7_78">
                                            <p>Take a tour in Kingster and you will find the best university in the state. The video will take you to every places in this university.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_79">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_80"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                        
                                        <div class="gdlr-core-tab-item-content-image-wrap clearfix">
                                            <div class="gdlr-core-tab-item-image  gdlr-core-active" data-tab-id="1">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_1"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="2">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_2"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="3">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_3"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="4">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                                    <span class="gdlr-core-tab-item-image-background" id="span_1dd7_4"  ></span>
                                                    <i class="fa fa-play" ></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="gdlr-core-tab-item-wrap">
                                            <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                                <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Benefits</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="2">Self Development</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="3">Spirituality</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="4">Alumni</div>
                                            </div>
                                            <div class="gdlr-core-tab-item-content-wrap clearfix">
                                                <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_24">Why Choose Kingster?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="2" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_25">Self Development<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="3" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_26">Spirituality<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="4" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_27">Alumni<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="gdlr-core-pbf-wrapper "  id="gdlr-core-wrapper-3">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_1dd7_81">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_82" data-sync-height="height-column" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_83" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_84">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_28">Undergraduate</h3>
                                                    </div>
                                                    <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_5">Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_85" data-sync-height="height-column" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_86"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_87">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_29">Graduated & Professional</h3>
                                                    </div>
                                                    <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_6">Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_88" data-sync-height="height-column" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_89" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_90">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_30">Scholarships & Financial AID</h3>
                                                    </div>
                                                    <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_7">Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_91">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" id="div_1dd7_92">
                                                        <img src="upload/hp-donation-400x212.jpg" width="700" height="372" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_31">Donation helps us</h3>
                                                    </div>
                                                    <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_8">The Campaign for the Kingster University is the 
                                                        <strong>largest fundraising campaign in history.</strong> With a historic $1 billion goal, the campaign is expanding U of T’s global leadership capacity.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" id="a_1dd7_6">
                                                        <i class="gdlr-core-pos-left fa fa-heart"  ></i>
                                                        <span class="gdlr-core-content" >Become a donor</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_93">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">
                                                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_95">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_32">Upcoming Events</h3>
                                                            <div class="gdlr-core-block-item-title-divider" id="div_1dd7_96"></div>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-event-item-holder clearfix">
                                                        <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" >07</span>
                                                                <span class="gdlr-core-month">Jan</span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title">
                                                                    <a href="#" >Reunion Event : Kingster’s Alumni Golf Tour</a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">7:00 am - 11:30 pm</span>
                                                                    </span>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_98">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" >01</span>
                                                                <span class="gdlr-core-month">Jan</span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title">
                                                                    <a href="#" >Kingster’s Alumni Hot Air Ballon Trip in Turkey</a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">10:00 am - 4:30 pm</span>
                                                                    </span>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_99">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" >17</span>
                                                                <span class="gdlr-core-month">Dec</span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title">
                                                                    <a href="#" >Fintech &#038; Key Investment Conference</a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">1:00 pm - 5:00 pm</span>
                                                                    </span>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" id="a_1dd7_7"><span class="gdlr-core-content" >View All Events</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" id="i_1dd7_2"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="Newsletter">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_100">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_101" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" id="div_1dd7_102">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" id="div_1dd7_103"><img src="upload/icon-envelope.png" alt="" width="78" height="60" title="icon-envelope" /></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_104">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_33">Subscribe To Newsletter</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_9">Get updates to news & events</span></div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-style-rectangle-full">

                                                    <div class="newsletter newsletter-subscription">
                                                        <form class="gdlr-core-newsletter-form clearfix" method="post" action="#">
                                                            <div class="gdlr-core-newsletter-email">
                                                                <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type="email" name="ne" size="30" required />
                                                            </div>
                                                            <div class="gdlr-core-newsletter-submit">
                                                                <input class="newsletter-submit" type="submit" value="Subscribe" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="gdlr-core-pbf-wrapper " id="div_1dd7_105">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_106" data-parallax-speed="0"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_34">Search For Courses</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-search-item gdlr-core-item-pdb gdlr-core-item-pdlr">
                                                    <form class="gdlr-core-course-form clearfix" action="#" method="GET">
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-keywords">
                                                                <input type="text" placeholder="Keywords" name="course-keywords" value="" />
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-course-id">
                                                                <input type="text" placeholder="Course ID" name="course-id" value="" />
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-department">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="department">
                                                                        <option value="">Department</option>
                                                                        <option value="business-adminstration">Business Adminstration</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-campus">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="campus">
                                                                        <option value="">Campus</option>
                                                                        <option value="admans-hall">Adman's Hall</option>
                                                                        <option value="kingsters-80">Kingster's 80</option>
                                                                        <option value="ku2-hill">KU2 Hill</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-level">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="level">
                                                                        <option value="">Level</option>
                                                                        <option value="graduate">Graduate</option>
                                                                        <option value="undergraduate">Undergraduate</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-instructor">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="instructor">
                                                                        <option value="">Instructor</option>
                                                                        <option value="albert-coman-phd">Albert Coman (PhD)</option>
                                                                        <option value="angelina-jones-phd">Angelina Jones (PhD)</option>
                                                                        <option value="bruce-willis-phd">Bruce Willis (PhD)</option>
                                                                        <option value="carol-dawson-phd">Carol Dawson (PhD)</option>
                                                                        <option value="john-hagensy">John Hagensy (PhD)</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-semester">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="semester">
                                                                        <option value="">Semester</option>
                                                                        <option value="fall-2018">Fall 2018</option>
                                                                        <option value="spring-2019">Spring 2019</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-credit">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="credit">
                                                                        <option value="">Credit</option>
                                                                        <option value="2-000">2.000</option>
                                                                        <option value="3-000">3.000</option>
                                                                        <option value="4-000">4.000</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-course-form-submit gdlr-core-course-column gdlr-core-column-first gdlr-core-center-align">
                                                            <input class="gdlr-core-full-size" type="submit" value="Search Courses" />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_107">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_108"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_1dd7_109">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid" id="div_1dd7_110">
                                        <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-column-first gdlr-core-item-pdlr gdlr-core-item-mgb">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src="upload/banner-1.png" alt="" width="248" height="120" title="banner-1" /></div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src="upload/banner-2.png" alt="" width="248" height="120" title="banner-2" /></div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src="upload/banner-3.png" alt="" width="248" height="120" title="banner-3" /></div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src="upload/banner-4-1.png" alt="" width="248" height="120" title="banner-4" /></div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src="upload/banner-5.png" alt="" width="248" height="120" title="banner-5" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- POLPENNAS -->
<!-- LAMA -->
    <!--<div class="container mb-5">
        @include('website.pages.page_components', ['item' => $page])

        <div class="row mt-5 mb-5">
            <div class="col-12 col-md-8 offset-md-2">
                <ul class="list-unstyled list-group list-group-horizontal-md mb-3">
                    <li class="list-group-item"><strong>Laravel v9.x</strong></li>
                    <li class="list-group-item"><strong>AdminLTE v3.0.5</strong></li>
                    <li class="list-group-item"><strong>Bootstrap v4.4.1</strong></li>
                    <li class="list-group-item"><strong>jQuery v3.5</strong></li>
                </ul>

                <p>A Laravel Website with Admin access Starter project with AdminLTE theme and basic features.</p>

                <ul class="list-unstyled style-1">
                    <li>Test Driven Development (111 tests, 466 assertions)</li>
                </ul>
            </div>
        </div>

        <div class="clearfix">
            <hr>
        </div>

        <div class="row mt-5 mb-5"> -->

            <!-- start feature box item -->
           <!-- <div class="col-12 d-table mb-3">
                <span style="width: 50px" class="d-table-cell align-top text-primary font-20"><i
                        class="fa fa-fw fa-gifts mr-3"></i></span>
                <div class="d-table-cell">
                    <h4 class="d-block mb-3 text-uppercase font-20 page-header">Free &amp; Open Source</h4>

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <ul class="list-unstyled style-1">
                                <li>Auth <small>(Login, Register, Forgot Password)</small></li>
                                <li>Roles</li>
                                <li>Log Activity <small>(website and admin)</small></li>
                                <li>Notifications</li>
                                <li>Google Analytics Reports</li>
                                <li>Website Page Builder</li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <ul class="list-unstyled style-1">
                                        <li>Banners</li>
                                        <li>Photos</li>
                                        <li>Videos</li>
                                        <li>Documents</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <ul class="list-unstyled style-1">
                                        <li>Articles</li>
                                        <li>FAQ's</li>
                                        <li>Locations</li>
                                        <li>Shop</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div> -->
            <!-- end feature box item -->

        <!--</div>

        <div class="row mt-5">
            <div class="col-12">
                <h2 class="page-header text-center mb-5">Core Packages Included</h2>
            </div>
        </div>
        <div class="row mt-2 packages text-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title">File Generators</div>
                    </div>
                    <div class="card-body">
                        <div class="description">
                            <a target="_blank" href="https://github.com/bpocallaghan/generators">
                                Laravel 5 File Generators with config and publishable stubs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title">Impersonate User</div>
                    </div>
                    <div class="card-body">
                        <div class="description">
                            <a target="_blank" href="https://github.com/bpocallaghan/impersonate">
                                This allows you to authenticate as any of your customers.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title">Sluggable</div>
                    </div>
                    <div class="card-body">
                        <div class="description">
                            <a target="_blank" href="https://github.com/bpocallaghan/sluggable">
                                Provides a HasSlug trait that will generate a unique slug when
                                saving your Laravel Eloquent model.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title">Notification</div>
                    </div>
                    <div class="card-body">
                        <div class="description">
                            <a target="_blank" href="https://github.com/bpocallaghan/notify">
                                Laravel 5 Flash Notifications with icons and animations and with a
                                timeout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title">Alert</div>
                    </div>
                    <div class="card-body">
                        <div class="description">
                            <a target="_blank" href="https://github.com/bpocallaghan/alert">
                                A helper package to flash a bootstrap alert to the browser via a
                                Facade or a helper function.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <p>A Laravel CMS Starter project with AdminLTE, Roles, Impersonations,
                            Analytics, Activity, Notifications and more.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <a class="btn btn-lg btn-light btn-block" href="https://github.com/bpocallaghan/titan-starter">
                            <i class="fab fa-fw fa-github"></i>
                            Read More on GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
@endsection
