@extends('FrontEnd.layouts.basePage')

@section('content')
<style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<link rel='stylesheet' id='wp-block-library-css'
    href='https://alquilaclic.com/wp-includes/css/dist/block-library/style.min.css?ver=5.1.5' type='text/css'
    media='all' />
<link rel='stylesheet' id='bootstrap-css'
    href='https://alquilaclic.com/wp-content/themes/alquilaclic377/css/bootstrap.min.css?ver=5.1.5' type='text/css'
    media='all' />
<link rel='stylesheet' id='adifier-icons-css'
    href='https://alquilaclic.com/wp-content/themes/alquilaclic377/css/adifier-icons.css?ver=5.1.5' type='text/css'
    media='all' />
<link rel='stylesheet' id='adifier-fonts-css'
    href='//fonts.googleapis.com/css?family=Open+Sans%3A700%2C600%2C700%7CQuicksand%3A700%2C400%2C500%26subset%3Dall&#038;ver=1.0.0'
    type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'
    href='https://alquilaclic.com/wp-content/themes/alquilaclic377/css/owl.carousel.min.css?ver=5.1.5' type='text/css'
    media='all' />
<link rel='stylesheet' id='magnific-popup-css'
    href='https://alquilaclic.com/wp-content/themes/alquilaclic377/css/magnific-popup.css?ver=5.1.5' type='text/css'
    media='all' />
<link rel='stylesheet' id='adifier-style-css'
    href='https://alquilaclic.com/wp-content/themes/alquilaclic377/style.css?ver=5.1.5' type='text/css' media='all' />
<style id='adifier-style-inline-css' type='text/css'>
    body {
        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
        font-size: 14px;
        line-height: 24px;
        font-weight: 700;
        color: #000000;
    }

    input[type="submit"],
    a,
    a:active,
    a:focus {
        color: #666666
    }

    /* FONT 500 */
    .navigation li a,
    .special-nav a,
    .single-advert-title .breadcrumbs {
        font-family: 'Quicksand', sans-serif;
    }

    /* FONT 400 */
    .author-address em,
    .contact-seller em,
    .reveal-phone em,
    .header-search select,
    .header-search input {
        font-family: 'Quicksand', sans-serif;
    }

    .pagination>span,
    .pagination a,
    body .kc_tabs_nav>li>a {
        font-family: 'Quicksand', sans-serif;
        font-weight: 700;
        color: #000000;
    }

    .header-alike,
    .af-title p,
    .element-qs input {
        font-family: 'Quicksand', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Quicksand', sans-serif;
        line-height: 1.3;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    h1 a,
    h2 a,
    h3 a,
    h4 a,
    h5 a,
    h6 a,
    h1 a:focus,
    h2 a:focus,
    h3 a:focus,
    h4 a:focus,
    h5 a:focus,
    h6 a:focus {
        color: #000000;
    }

    h1 {
        font-size: 40px;
    }

    h2 {
        font-size: 35px;
    }

    h3 {
        font-size: 30px;
    }

    h4 {
        font-size: 25px;
    }

    h5 {
        font-size: 18px;
    }

    h6 {
        font-size: 16px;
    }

    a:hover,
    .article-title a:hover,
    h1 a:focus:hover,
    h2 a:focus:hover,
    h3 a:focus:hover,
    h4 a:focus:hover,
    h5 a:focus:hover,
    h6 a:focus:hover,
    .styled-radio.active label:before,
    .styled-radio input:checked+label:before,
    .styled-checkbox.active label:before,
    .styled-checkbox input:checked+label:before,
    .owl-video-play-icon:hover:before,
    .adverts-slider .owl-nav>div,
    .account-btn,
    .account-btn:focus,
    .account-btn:active,
    .navigation a:hover,
    .navigation li.current-menu-ancestor>a,
    .navigation li.current_page_ancestor>a,
    .navigation li.current_page_ancestor>a:visited,
    .navigation li.current_page_item>a,
    .navigation li.current_page_item>a:visited,
    .navigation li.current-menu-item>a,
    .navigation li.current-menu-item>a:visited,
    .bid-login,
    .bid-login:active,
    .bid-login:focus,
    .bid-login:hover,
    .error404 .white-block-content i,
    .or-divider h6,
    .cf-loader,
    .layout-view a.active,
    .no-advert-found i,
    .advert-hightlight .white-block-content h5 a,
    .single-advert-actions li a:hover,
    .widget_adifier_advert_locations i,
    body .kc_accordion_header.ui-state-active>a,
    .author-no-listing i,
    .adverts-filter ul li.active a,
    .image-input-wrap a:hover i,
    .mess-loading,
    .con-loading,
    .open-reponse-form,
    .promotion-description-toggle,
    .promotion-description-toggle:focus,
    #purchase .loader,
    .purchase-loader i,
    .video-input-wrap a:hover,
    .another-video:hover,
    .user-rating,
    .rate-user,
    .reset-search:focus:hover,
    .element-categories-tree li a:hover,
    .element-categories-tree .view-more a:hover,
    .advert-item .aficon-heart,
    .random-author-ads .aficon-heart,
    .advert-card .compare-add.active,
    .compare-add.active,
    .compare-add.active:hover,
    .compare-add.active:active,
    .toggle-conversations,
    .toggle-conversations:hover,
    .toggle-conversations:active,
    .element-categories-table>a:hover h6,
    .advert-hightlight .white-block-content .price,
    .advert-hightlight .white-block-content h5 a,
    .user-details-list a,
    .user-details-list a:active,
    .user-details-list a:focus,
    .element-categories-v-list a:hover h5 {
        color: #f92935;
    }

    @media (max-width: 1024px) {

        .small-sidebar-open,
        .special-nav a,
        .special-nav a:focus,
        .special-nav a:active {
            color: #f92935;
        }
    }

    blockquote,
    .owl-carousel .owl-video-play-icon:hover,
    .owl-video-play-icon:hover:before,
    .filter-slider.ui-slider .ui-state-default,
    .filter-slider.ui-slider .ui-widget-content .ui-state-default,
    .filter-slider.ui-slider .ui-state-focus,
    .filter-slider.ui-slider .ui-state-hover,
    .filter-slider.ui-slider .ui-widget-content .ui-state-focus,
    .filter-slider.ui-slider .ui-widget-content .ui-state-hover,
    .promotion:not(.disabled):not(.inactive) .promo-price-item:hover,
    .layout-view a:hover,
    .adverts-filter ul li.active a,
    input:focus,
    textarea:focus,
    select:focus,
    .select2-container--open.select2-container--default .select2-selection--single {
        border-color: #f92935;
    }

    .rtl .conversation-wrap.current,
    .rtl .conversation-wrap:hover {
        border-right-color: #f92935;
    }

    .author-sidebar li.active {
        border-left-color: #f92935;
    }

    .scroll-element .scroll-element_track,
    .scroll-element .scroll-bar,
    .scroll-element:hover .scroll-bar.scroll-element.scroll-draggable .scroll-bar,
    .pagination>span:not(.dots),
    .pagination a.current,
    .af-interactive-slider a {
        background-color: #f92935;
    }

    .af-button,
    input[type="submit"],
    .af-button:focus,
    .af-button:active,
    .filter-slider.ui-slider .ui-slider-range,
    .comment-avatar .icon-user,
    .author-address,
    .single-price,
    .kc-search .af-button,
    .kc-search .af-button:hover,
    .kc-search .af-button:focus,
    .kc-search .af-button:active,
    body .kc_tabs_nav>.ui-tabs-active>a,
    body .kc_tabs_nav>.ui-tabs-active>a:hover,
    body .kc_tabs_nav>.ui-tabs-active>a,
    body .kc_tabs_nav>li>a:hover,
    .message-actions a:not(.disabled):hover,
    .profile-advert .action a:nth-child(1):hover,
    .profile-advert .action a:nth-child(4):hover,
    .status.live {
        background: #f92935;
    }

    @media (min-width: 1025px) {

        .submit-btn,
        .submit-btn:focus,
        .submit-btn:active {
            background: #f92935;
            color: #ffffff;
        }

        .submit-btn:hover {
            background: #008c77;
            color: #ffffff;
        }
    }

    @media (max-width: 1024px) {

        .submit-btn,
        .submit-btn:focus,
        .submit-btn:active {
            color: #f92935;
        }
    }

    .af-button,
    input[type="submit"],
    .af-button:focus,
    .af-button:active,
    .pagination>span:not(.dots),
    .pagination a.current,
    .comment-avatar .icon-user,
    .single-price,
    .single-price .price,
    .single-price .price span:not(.price-symbol):not(.text-price),
    .kc-search .af-button,
    .kc-search .af-button:hover,
    .kc-search .af-button:focus,
    .kc-search .af-button:active,
    body .kc_tabs_nav>.ui-tabs-active>a,
    body .kc_tabs_nav>.ui-tabs-active>a:hover,
    body .kc_tabs_nav>.ui-tabs-active>a,
    body .kc_tabs_nav>li>a:hover,
    .message-actions a:not(.disabled):hover,
    .profile-advert .action a:nth-child(1):hover,
    .profile-advert .action a:nth-child(4):hover,
    .af-interactive-slider a:hover {
        color: #ffffff;
    }

    .af-button:hover,
    .af-button.af-secondary:hover,
    input[type="submit"]:hover,
    .pagination a:hover,
    .author-address i,
    .kc-search .af-button:hover,
    .bidding-history:hover,
    .af-interactive-slider a:hover {
        background: #008c77;
    }

    .element-categories-list svg,
    .element-categories-v-list a:hover svg,
    .element-categories-transparent-wrap svg,
    .element-categories-table svg,
    .widget_adifier_advert_categories a:hover svg,
    .header-cats a:hover svg {
        fill: #008c77;
    }

    .af-button:hover,
    .af-button.af-secondary:hover,
    input[type="submit"]:hover,
    .pagination a:hover,
    .author-address i,
    .kc-search .af-button:hover,
    .bidding-history:hover,
    .af-interactive-slider a:hover {
        color: #ffffff;
    }

    .modal-header a:hover,
    .profile-advert-cats a:hover {
        color: #008c77;
    }

    .header-search>a,
    .header-search>a:hover,
    .header-search>a:focus,
    .af-button.af-cta {
        background: #ff5a5f;
        color: #ffffff;
    }

    .header-search>a:hover,
    .af-button.af-cta:hover {
        background: #d54b4f;
        color: #ffffff;
    }

    .logo {
        height: 75;
    }

    .page-title {
        background-color: #2a2f36;
        background-image: url();
    }

    .page-title,
    .page-title h1,
    .page-title a,
    .breadcrumbs {
        color: #ffffff;
    }

    .bottom-advert-meta .price {
        color: #d54b4f;
    }

    .bottom-sidebar-wrap {
        background: #f92935;
    }

    .bottom-sidebar-wrap,
    .bottom-sidebar-wrap a,
    .bottom-sidebar-wrap a:hover,
    .bottom-sidebar-wrap a:focus {
        color: white;
    }

    .bottom-sidebar-wrap .widget .white-block-title h5,
    .bottom-sidebar-wrap a:hover {
        color: #ffffff;
    }

    .price-table-price {
        background: #374252;
        color: #ffffff;
    }

    .price-table-title h5 {
        background: #2e3744;
        color: #ffffff;
    }

    .price-table-element .af-button:focus,
    .price-table-element .af-button:active,
    .price-table-element .af-button {
        background: #374252;
        color: #ffffff;
    }

    .price-table-element .af-button:hover {
        background: #2e3744;
        color: #ffffff;
    }

    .active-price-table .price-table-price {
        background: #f92935;
        color: #ffffff;
    }

    .active-price-table .price-table-title h5 {
        background: #008c77;
        color: #ffffff;
    }

    .active-price-table.price-table-element .af-button:focus,
    .active-price-table.price-table-element .af-button:active,
    .active-price-table.price-table-element .af-button {
        background: #f92935;
        color: #ffffff;
    }

    .active-price-table.price-table-element .af-button:hover {
        background: #008c77;
        color: #ffffff;
    }

    .copyrights {
        background: white;
    }

    .copyrights div,
    .copyrights a,
    .copyrights a:hover,
    .copyrights a:focus {
        color: #aaaaaa;
    }

    .copyrights a:hover {
        color: #ffffff;
    }

    .subscription-footer {
        background: #ffffff
    }

    .subscription-footer,
    .subscription-footer h4 {
        color: #2d323e
    }

    .subscription-footer .submit-ajax-form,
    .subscription-footer .submit-ajax-form:hover,
    .subscription-footer .submit-ajax-form:active,
    .subscription-footer .submit-ajax-form:visited {
        background: #2d323e;
        color: #ffffff;
    }

    .subscription-footer input {
        border-color: #2d323e;
    }

    /* CTAs */
    .reveal-phone,
    .reveal-phone:focus,
    .reveal-phone:hover {
        color: #ffffff;
        background: #ff5a5f;
    }

    .reveal-phone i {
        background: #d54b4f;
    }

    .contact-seller,
    .contact-seller:focus,
    .contact-seller:hover,
    .bidding-history,
    .bidding-history:focus,
    .phone-code-send-again,
    .phone-code-send-again:focus {
        color: #ffffff;
        background: #4b586b;
    }

    @media (min-width: 415px) {

        .header-3 .account-btn,
        .header-3 .account-btn:focus,
        .header-3 .account-btn:active,
        .header-3 .submit-btn,
        .header-3 .submit-btn:focus,
        .header-3 .submit-btn:active,
        .header-3 .small-sidebar-open,
        .header-3 .small-sidebar-open:focus,
        .header-3 .small-sidebar-open:active {
            color: #ffffff;
        }
    }

    .header-2.sticky-header.header-3:not(.sticky-nav) {
        background: rgba(55, 66, 82, 0.4);
    }

    .header-2.sticky-header {
        background: #374252;
    }

    @media (min-width: 1025px) {
        .header-2 .navigation>li>a {
            color: #ffffff;
        }

        .header-2 .navigation>li.current-menu-ancestor>a,
        .header-2 .navigation>li.current_page_ancestor>a,
        .header-2 .navigation>li.current_page_ancestor>a:visited,
        .header-2 .navigation>li.current_page_item>a,
        .header-2 .navigation>li.current_page_item>a:visited,
        .header-2 .navigation>li.current-menu-item>a,
        .header-2 .navigation>li.current-menu-item>a:visited,
        .header-2 .navigation>li>a:hover {
            color: #ffffff;
        }

        .header-2.sticky-header .account-btn,
        .header-2.sticky-header .account-btn:focus,
        .header-2.sticky-header .account-btn:active {
            color: #ffffff;
        }

        .header-2.sticky-header:not(.header-3) .submit-btn,
        .header-2.sticky-header:not(.header-3) .submit-btn:focus,
        .header-2.sticky-header:not(.header-3) .submit-btn:active {
            color: #ffffff;
            border: 2px solid #ffffff;
        }

        .header-2.sticky-header:not(.header-3) .submit-btn:hover {
            color: #ffffff;
        }
    }

    .header-5 .navigation-wrap,
    body>header.header-5 .special-nav,
    .header-5 {
        background: #374252;
    }

    .header-5 .navigation>li>a {
        color: #ffffff;
    }

    @media (max-width: 1024px) {
        .header-5 .navigation>li a {
            color: #ffffff;
        }
    }

    .header-5 .navigation>li.current-menu-ancestor>a,
    .header-5 .navigation>li.current_page_ancestor>a,
    .header-5 .navigation>li.current_page_ancestor>a:visited,
    .header-5 .navigation>li.current_page_item>a,
    .header-5 .navigation>li.current_page_item>a:visited,
    .header-5 .navigation>li.current-menu-item>a,
    .header-5 .navigation>li.current-menu-item>a:visited,
    .header-5 .navigation>li>a:hover {
        color: #ffffff;
    }

    .header-5.sticky-header .account-btn,
    .header-5.sticky-header .account-btn:focus,
    .header-5.sticky-header .account-btn:active,
    .header-5.sticky-header .small-sidebar-open,
    .header-5.sticky-header .small-sidebar-open:focus,
    .header-5.sticky-header .small-sidebar-open:hover,
    .header-5.sticky-header .submit-btn,
    .header-5.sticky-header .submit-btn:focus,
    .header-5.sticky-header .submit-btn:active {
        color: #ffffff;
        background: transparent;
    }

    @media (min-width: 1025px) {

        .header-5.sticky-header:not(.header-3) .submit-btn,
        .header-5.sticky-header:not(.header-3) .submit-btn:focus,
        .header-5.sticky-header:not(.header-3) .submit-btn:active {
            color: #ffffff;
            border: 2px solid #ffffff;
        }
    }
</style>
<link rel='stylesheet' id='kc-general-css'
    href='https://alquilaclic.com/wp-content/plugins/kingcomposer/assets/frontend/css/kingcomposer.min.css?ver=2.8.2'
    type='text/css' media='all' />
<link rel='stylesheet' id='kc-animate-css'
    href='https://alquilaclic.com/wp-content/plugins/kingcomposer/assets/css/animate.css?ver=2.8.2' type='text/css'
    media='all' />
<link rel='stylesheet' id='kc-icon-1-css'
    href='https://alquilaclic.com/wp-content/plugins/kingcomposer/assets/css/icons.css?ver=2.8.2' type='text/css'
    media='all' />
<script type='text/javascript' src='https://alquilaclic.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://alquilaclic.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'>
</script>
<link rel='https://api.w.org/' href='https://alquilaclic.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://alquilaclic.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://alquilaclic.com/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.1.5" />
<link rel='shortlink' href='https://alquilaclic.com/?p=2216' />
<link rel="alternate" type="application/json+oembed"
    href="https://alquilaclic.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Falquilaclic.com%2Fanuncios%2Falquilo-hermosas-bicicletas%2F" />
<link rel="alternate" type="text/xml+oembed"
    href="https://alquilaclic.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Falquilaclic.com%2Fanuncios%2Falquilo-hermosas-bicicletas%2F&#038;format=xml" />
<script type="text/javascript">
    var kc_script_data={ajax_url:"https://alquilaclic.com/wp-admin/admin-ajax.php"}
</script><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-104361969-7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-104361969-7');
</script>
<style type="text/css">
    .recentcomments a {
        display: inline !important;
        padding: 0 !important;
        margin: 0 !important;
    }
</style>
<link rel="icon" href="https://alquilaclic.com/wp-content/uploads/2019/01/cropped-favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="https://alquilaclic.com/wp-content/uploads/2019/01/cropped-favicon-192x192.png"
    sizes="192x192" />
<link rel="apple-touch-icon-precomposed"
    href="https://alquilaclic.com/wp-content/uploads/2019/01/cropped-favicon-180x180.png" />
<meta name="msapplication-TileImage"
    content="https://alquilaclic.com/wp-content/uploads/2019/01/cropped-favicon-270x270.png" />
<style type="text/css" id="wp-custom-css">
    .col-sm-7 {
        width: 99.33333333%;
    }

    .col-sm-5 {
        width: 99.66666667%;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<body data-rsssl=1 class="advert-template-default single single-advert postid-2216 logged-in kc-css-system">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="single-advert-tags">
                        <div class="advert-tags">
                            @if($anuncio->negotiable)
                            <div class="ribbon negotiable">
                                Negociable </div>
                            @endif
                        </div>
                    </div>
                    <div class="single-advert-media">
                        {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($anuncio->images as $image)
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/'.$image->image_link) }}" class="d-block w-100"
                        alt="Imágen del anuncio">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> --}}

            <img src="{{ asset('storage/'.$anuncio->images->first()->image_link) }}" class="d-block w-100"
                alt="Imágen del anuncio">
        </div>
        <div class="hide-price-big">

            <div class="single-price-wrap">
                <div class="white-block single-price">
                    <i class="aficon-dollar-sign"></i>
                    <div class="white-block-content">
                        <div class="price"><span class="price-symbol">$</span>{{ $anuncio->cost }}<span
                                class="no-strike">/ {{$anuncio->currency}}</span></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="white-block">
            <div class="white-block-content">
                <h1 class="blog-item-title h4-size">{{ $anuncio->title }}</h1>
                <div class="post-content clearfix">
                    <p>{{ $anuncio->description }}</p>
                </div>
                <ul class="list-inline list-unstyled single-meta top-advert-meta">
                    <li>
                        <i class="aficon-info-circle"></i>
                        {{ $anuncio->profile->type }} </li>
                    <li>
                </ul>
            </div>
        </div>

        <div class="hide-print small-screen-last">
        </div>

        </div>
        <div class="col-sm-4">


            <div class="single-price-wrap">
                <div class="white-block single-price">
                    <i class="aficon-dollar-sign"></i>
                    <div class="white-block-content">
                        <div class="price"><span class="price-symbol">$</span>{{ $anuncio->cost }}
                            {{ $anuncio->currency }}<span class="no-strike">/
                                {{ $anuncio->period }}
                            </span></div>
                    </div>
                </div>
            </div>



            <div class="white-block contact-scroll-details">
                <div class="white-block-title">
                    <h5>Información del Alquilador</h5>
                </div>
                <div class="white-block-content">
                    <div class="seller-details flex-wrap flex-start-h">
                        <a href="https://alquilaclic.com/inmob/alexm/" class="avatar-wrap">
                            <img alt=''
                                src='https://secure.gravatar.com/avatar/52af64918cee1b540e665bfb00d6e3b3?s=70&#038;d=mm&#038;r=g'
                                srcset='https://secure.gravatar.com/avatar/52af64918cee1b540e665bfb00d6e3b3?s=140&#038;d=mm&#038;r=g 2x'
                                class='avatar avatar-70 photo' height='70' width='70' /> </a>

                        <div class="seller-name">
                            <h5>
                                <a href="https://alquilaclic.com/inmob/alexm/">
                                    {{ $anuncio->profile->first()->user->email }} </a>
                            </h5>
                            <div class="user-rating">
                                <span class="aficon-star-o"></span><span class="aficon-star-o"></span><span
                                    class="aficon-star-o"></span><span class="aficon-star-o"></span><span
                                    class="aficon-star-o"></span> </div>
                            <div class="online-status offline flex-wrap flex-start-h"><span></span>Desconectado
                            </div>
                        </div>
                    </div>

                    <a href="javascript:void(0);" class="reveal-phone flex-wrap flex-start-h" data-last="999">
                        <i class="aficon-phone"></i>
                        <span class="flex-right">
                            <em>{{ $anuncio->profile->user->phone }}</em>
                        </span>
                    </a>
                    {{--
                            <a href="#" class="contact-seller flex-wrap flex-start-h hide-print" data-toggle="modal"
                                data-target="#contact-seller" data-advert-id="2216">
                                <i class="aficon-envelope"></i>
                                <span class="flex-right">
                                    <em>Contacte Alquilador</em>
                                    <span class="description">Pregunta sobre este alquiler</span>
                                </span>
                            </a> --}}
                </div>
            </div>


            {{-- <div class="white-block hide-print">
                        <div class="white-block-title">
                            <h5>Añadir Acción</h5>
                        </div>
                        <div class="white-block-content">
                            <ul class="list-unstyle list-inline single-advert-actions flex-wrap">
                                <li>
                                    <a href="#" class="share-advert" data-toggle="modal" data-target="#share">
                                        <i class="aficon-share-alt"></i>
                                        Compartir </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="print-advert">
                                        <i class="aficon-print"></i>
                                        Imprimir </a>
                                </li>
                                <li>
                                    <a title="Favoritos" href="javascript:void(0);" class="process-favorites"
                                        data-id="2216">
                                        <i class="aficon-heart-o"></i>
                                        <span>Favoritos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="report-advert">
                                        <i class="aficon-flag"></i>
                                        Reportar </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="white-block hide-print map-wrapper">
                        <div class="location-map" data-lat="5.636499" data-long="-73.52705800000001" data-icon=""
                            data-iconwidth="" data-iconheight=""></div>
                        <a href="javascript:void(0);" target="_blank" class="af-get-directions" title="Get Directions">
                            <img src="https://alquilaclic.com/wp-content/themes/alquilaclic377/images/directions.png"
                                alt="directions">
                        </a>
                    </div> --}}
        </div>
        </div>
        </div>
    </main>
</body>
<script type='text/javascript'
    src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/bootstrap.min.js?ver=5.1.5'></script>
<script type='text/javascript'
    src='//maps.googleapis.com/maps/api/js?libraries=places&#038;v=3&#038;key=AIzaSyA50m5G-WCm7BrcFzRkei6unq_UN8idGRo&#038;language=es&#038;ver=5.1.5'>
</script>
<script type='text/javascript'
    src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/profile/jquery.scrollbar.min.js?ver=5.1.5'>
</script>
<script type='text/javascript'
    src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/owl.carousel.min.js?ver=5.1.5'></script>
<script type='text/javascript'
    src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/jquery.magnific-popup.min.js?ver=5.1.5'>
</script>
<script type='text/javascript' src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/auction.js?ver=5.1.5'>
</script>
<script type='text/javascript'
    src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/location-map.js?ver=5.1.5'></script>
<script type='text/javascript' src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/countdown.js?ver=5.1.5'>
</script>
<script type='text/javascript'
    src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/single-advert.js?ver=5.1.5'></script>
<script type='text/javascript'
    src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/profile/beacon.js?ver=5.1.5'></script>
<script type='text/javascript' src='https://alquilaclic.com/wp-content/themes/alquilaclic377/js/custom.js?ver=5.1.5'>
</script>
<script type='text/javascript'
    src='https://alquilaclic.com/wp-content/plugins/kingcomposer/assets/frontend/js/kingcomposer.min.js?ver=2.8.2'>
</script>
<script type='text/javascript' src='https://alquilaclic.com/wp-includes/js/wp-embed.min.js?ver=5.1.5'></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
@endsection
