@extends('FrontEnd.layouts.basePage')

@section('content')

<body data-rsssl=1
    class="home page-template page-template-page-tpl_home page-template-page-tpl_home-php page page-id-1593 logged-in kingcomposer kc-css-system">



    <main class="clearfix">
        <div class="kc_clfw"></div>
        <section class="kc-elm kc-css-126101 kc-animated kc-animate-eff-fadeInLeft kc_row row-slider-section">
            <div class="row-slider" data-unique="rs_5ed32c44bfa6d"><img width="1280" height="609"
                    src="{{ asset('img/Imagén Banner Alquilaclic.png') }}" class="attachment-full size-full" alt="" />
            </div>
            <div class="kc-row-container  kc-container">
                <div class="kc-wrap-columns">
                    <div class="kc-elm kc-css-370072 kc_col-sm-1 kc_column kc_col-sm-1">
                        <div class="kc-col-container"></div>
                    </div>
                    <div class="kc-elm kc-css-415659 kc_col-sm-10 kc_column kc_col-sm-10">
                        <div class="kc-col-container">
                            <div class="kc-elm kc-css-520400 kc_text_block">
                                <h2 style="color: #fff; text-shadow: 2px 2px 2px black;">Para qué comprar, Si puedes
                                    ALQUILAR!</h2>
                            </div>
                            <div class="af-title text-left">
                                <h1 class="af-heading"></h1>
                                <p><span style="color: #fff">Únete sin costo, a la única comunidad de alquiler <b>de
                                            Colombia </b> </span></p>
                            </div>
                            <div class="kc-elm kc-css-673405" style="height: 35px; clear: both; width:100%;"></div>
                            <div class="kc-search ">

                                <form action="{{ route('searchAd') }}" class="header-search flex-wrap" id="searchForm"
                                    method="POST">
                                    @csrf
                                    <div class="keyword-wrap">
                                        <input type="text" class="form-control" name="keyword"
                                            placeholder="Busca código o palabra...">
                                    </div>


                                    <div class="header-location">
                                        <input type="text" class="form-control place-lookup location" name="location"
                                            placeholder="Lo necesito en...">
                                        <input type="hidden" name="latitude" class="latitude">
                                        <input type="hidden" name="longitude" class="longitude">
                                    </div>


                                    <div class="styled-select">
                                        <select name="category">
                                            @foreach (\App\Category::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach

                                        </select>
                                    </div> <a class="af-button submit-form" onclick="$('#searchForm').submit()"
                                        style="cursor: pointer">Buscar </a>
                                </form>

                            </div>
                            <div class="kc-elm kc-css-747042" style="height: 25px; clear: both; width:100%;"></div>
                        </div>
                    </div>
                    <div class="kc-elm kc-css-252385 kc_col-sm-1 kc_column kc_col-sm-1">
                        <div class="kc-col-container"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kc-elm kc-css-466579 kc_row">
            <div class="kc-row-container  kc-container">
                <div class="kc-wrap-columns">
                    <div class="kc-elm kc-css-221981 kc_col-sm-12 kc_column kc_col-sm-12">
                        <div class="kc-col-container">
                            <div data-open-on-mouseover="" data-tab-active="1" data-effect-option=""
                                class="kc-elm kc-css-914186 kc-animated kc-animate-eff-fadeInLeft kc_tabs group">
                                <div class="kc_wrapper ui-tabs kc_clearfix">
                                    <ul class="kc_tabs_nav ui-tabs-nav kc_clearfix">
                                        <li><a href="#ultimos-anuncios" data-prevent="scroll">Últimos Anuncios</a></li>
                                        <li><a href="#terminan-pronto" data-prevent="scroll">Terminan Pronto</a></li>
                                    </ul>
                                    <div id="ultimos-anuncios"
                                        class="kc-elm kc-css-96591 kc_tab ui-tabs-panel kc_ui-tabs-hide kc_clearfix ">
                                        <div class="kc_tab_content">
                                            <div class="kc-elm kc-css-543802"
                                                style="height: 30px; clear: both; width:100%;"></div>
                                            <div class="adverts-list clearfix af-items-3" data-visibleitems=""
                                                data-autoplay="">

                                                {{-- Anuncio  --}}
                                                @foreach ($ultimosAnuncios as $anuncio)
                                                <div class="af-item-wrap">
                                                    <div class="white-block hover-shadow advert-item advert-grid ">

                                                        <div class="advert-tags">
                                                            @if ($anuncio->negotiable)
                                                            <div class="ribbon negotiable">
                                                                Negociable </div>
                                                            @endif
                                                        </div>

                                                        <a href="{{ route('getAnuncio', $anuncio->slug) }}"
                                                            class="advert-media">
                                                        </a>

                                                        <div class="white-block-content">

                                                            <div class="top-advert-meta flex-wrap">
                                                                <img width="355" height="250"
                                                                    src="{{ asset('storage/'.$anuncio->images->first()->image_link) }}"
                                                                    class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                                    alt="">
                                                            </div>
                                                            <h5 class="adv-title">
                                                                <a href="{{ route('getAnuncio', $anuncio->slug) }}""
                                                                    class=" text-overflow"
                                                                    title="{{ $anuncio->title }}">
                                                                    {{ $anuncio->title }} </a>
                                                            </h5>
                                                            <div class="bottom-advert-meta flex-wrap">
                                                                <div class="price"><span
                                                                        class="price-symbol">$</span>{{ $anuncio->cost }}
                                                                    {{ $anuncio->currency }}<span class="no-strike">/
                                                                        {{ $anuncio->period }}</span></div>
                                                                <div class="flex-right">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            </>
                                        </div>
                                        {{-- <div id="terminan-pronto"
                                        class="kc-elm kc-css-586669 kc_tab ui-tabs-panel kc_ui-tabs-hide kc_clearfix ">
                                        <div class="kc_tab_content">
                                            <div class="kc-elm kc-css-963619"
                                                style="height: 30px; clear: both; width:100%;"></div>
                                            <div class="adverts-list clearfix af-items-3" data-visibleitems=""
                                                data-autoplay="">
                                                <div class="af-item-wrap">
                                                    <div
                                                        class="white-block hover-shadow advert-item advert-grid advert-card ">

                                                        <div class="advert-tags">
                                                            <div class="ribbon urgent">
                                                                Confiable </div>
                                                            <div class="ribbon negotiable">
                                                                Negociable </div>
                                                        </div>

                                                        <a href="https://alquilaclic.com/anuncios/inflables-para-tu-fiesta-infantil/"
                                                            class="advert-media">
                                                            <img width="355" height="250"
                                                                src="https://alquilaclic.com/wp-content/uploads/2019/06/inflable2-355x250.jpg"
                                                                class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                                alt="" /> </a>


                                                        <div class="top-advert-meta flex-wrap">
                                                            <div class="advert-cat text-overflow">
                                                            </div>
                                                            <div class="advert-city text-overflow">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                                Bogotá </div>
                                                        </div>
                                                        <div class="adv-bottom-card">
                                                            <h5 class="adv-title">
                                                                <a href="https://alquilaclic.com/anuncios/inflables-para-tu-fiesta-infantil/"
                                                                    class="text-overflow"
                                                                    title="INFLABLES PARA TU FIESTA INFANTIL">
                                                                    INFLABLES PARA TU FIESTA INFANTIL </a>
                                                            </h5>
                                                            <div class="bottom-advert-meta flex-wrap">
                                                                <div class="price"><span
                                                                        class="price-symbol">$</span>100,000<span
                                                                        class="no-strike">/ día</span></div>
                                                                <div class="flex-right">

                                                                    <a title="Favoritos" href="javascript:void(0);"
                                                                        class="process-favorites" data-id="2170">
                                                                        <i class="aficon-heart-o"></i>
                                                                        <span>Favoritos</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="search-map-la-long hidden" data-id="2170"
                                                            data-longitude="-74.11835474" data-latitude="4.51199281"
                                                            data-icon="" data-iconwidth="" data-iconheight=""></div>
                                                    </div>
                                                </div>
                                                <div class="af-item-wrap">
                                                    <div
                                                        class="white-block hover-shadow advert-item advert-grid advert-card ">

                                                        <div class="advert-tags">
                                                            <div class="ribbon negotiable">
                                                                Negociable </div>
                                                        </div>

                                                        <a href="https://alquilaclic.com/anuncios/alquiler-de-luces-sonido-camara-de-humo-eventos-bogota/"
                                                            class="advert-media">
                                                            <img width="355" height="250"
                                                                src="https://alquilaclic.com/wp-content/uploads/2019/08/foto0149-355x250.jpg"
                                                                class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                                alt="" /> </a>


                                                        <div class="top-advert-meta flex-wrap">
                                                            <div class="advert-cat text-overflow">
                                                            </div>
                                                            <div class="advert-city text-overflow">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                                Bogota </div>
                                                        </div>
                                                        <div class="adv-bottom-card">
                                                            <h5 class="adv-title">
                                                                <a href="https://alquilaclic.com/anuncios/alquiler-de-luces-sonido-camara-de-humo-eventos-bogota/"
                                                                    class="text-overflow"
                                                                    title="Alquiler de Luces Sonido Camara de Humo Eventos Bogota">
                                                                    Alquiler de Luces Sonido Camara de Humo Eventos
                                                                    Bogota </a>
                                                            </h5>
                                                            <div class="bottom-advert-meta flex-wrap">
                                                                <div class="price"></div>
                                                                <div class="flex-right">

                                                                    <a title="Favoritos" href="javascript:void(0);"
                                                                        class="process-favorites" data-id="2192">
                                                                        <i class="aficon-heart-o"></i>
                                                                        <span>Favoritos</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="search-map-la-long hidden" data-id="2192"
                                                            data-longitude="-74.08012390" data-latitude="4.71672459"
                                                            data-icon="" data-iconwidth="" data-iconheight=""></div>
                                                    </div>
                                                </div>
                                                <div class="af-item-wrap">
                                                    <div
                                                        class="white-block hover-shadow advert-item advert-grid advert-card ">


                                                        <a href="https://alquilaclic.com/anuncios/renta-una-moto-en-bogota/"
                                                            class="advert-media">
                                                            <img width="355" height="250"
                                                                src="https://alquilaclic.com/wp-content/uploads/2019/10/RENT-A-BIKE-BOGOTÁ.-355x250.png"
                                                                class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                                alt="" /> </a>


                                                        <div class="top-advert-meta flex-wrap">
                                                            <div class="advert-cat text-overflow">
                                                            </div>
                                                            <div class="advert-city text-overflow">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                                Bogotá </div>
                                                        </div>
                                                        <div class="adv-bottom-card">
                                                            <h5 class="adv-title">
                                                                <a href="https://alquilaclic.com/anuncios/renta-una-moto-en-bogota/"
                                                                    class="text-overflow"
                                                                    title="RENTA UNA MOTO EN BOGOTA">
                                                                    RENTA UNA MOTO EN BOGOTA </a>
                                                            </h5>
                                                            <div class="bottom-advert-meta flex-wrap">
                                                                <div class="price"><span
                                                                        class="price-symbol">$</span>160,000<span
                                                                        class="no-strike">/ semanal</span></div>
                                                                <div class="flex-right">

                                                                    <a title="Favoritos" href="javascript:void(0);"
                                                                        class="process-favorites" data-id="2200">
                                                                        <i class="aficon-heart-o"></i>
                                                                        <span>Favoritos</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="search-map-la-long hidden" data-id="2200"
                                                            data-longitude="-74.07209200" data-latitude="4.71098860"
                                                            data-icon="" data-iconwidth="" data-iconheight=""></div>
                                                    </div>
                                                </div>
                                                <div class="af-item-wrap">
                                                    <div
                                                        class="white-block hover-shadow advert-item advert-grid advert-card ">

                                                        <div class="advert-tags">
                                                            <div class="ribbon negotiable">
                                                                Negociable </div>
                                                        </div>

                                                        <a href="https://alquilaclic.com/anuncios/alquilo-hermosas-bicicletas/"
                                                            class="advert-media">
                                                            <img width="355" height="250"
                                                                src="https://alquilaclic.com/wp-content/uploads/2019/10/20191020_201228_edited-355x250.jpg?v=1571621098"
                                                                class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                                alt="" /> </a>


                                                        <div class="top-advert-meta flex-wrap">
                                                            <div class="advert-cat text-overflow">
                                                            </div>
                                                            <div class="advert-city text-overflow">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                                Villa de Leyva </div>
                                                        </div>
                                                        <div class="adv-bottom-card">
                                                            <h5 class="adv-title">
                                                                <a href="https://alquilaclic.com/anuncios/alquilo-hermosas-bicicletas/"
                                                                    class="text-overflow"
                                                                    title="Alquilo Hermosas Bicicletas">
                                                                    Alquilo Hermosas Bicicletas </a>
                                                            </h5>
                                                            <div class="bottom-advert-meta flex-wrap">
                                                                <div class="price"><span
                                                                        class="price-symbol">$</span>10,000<span
                                                                        class="no-strike">/ Hora</span></div>
                                                                <div class="flex-right">

                                                                    <a title="Favoritos" href="javascript:void(0);"
                                                                        class="process-favorites" data-id="2216">
                                                                        <i class="aficon-heart-o"></i>
                                                                        <span>Favoritos</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="search-map-la-long hidden" data-id="2216"
                                                            data-longitude="-73.52705800" data-latitude="5.63649900"
                                                            data-icon="" data-iconwidth="" data-iconheight=""></div>
                                                    </div>
                                                </div>
                                                <div class="af-item-wrap">
                                                    <div
                                                        class="white-block hover-shadow advert-item advert-grid advert-card ">

                                                        <div class="advert-tags">
                                                            <div class="ribbon negotiable">
                                                                Negociable </div>
                                                        </div>

                                                        <a href="https://alquilaclic.com/anuncios/alquilo-hermosa-camioneta/"
                                                            class="advert-media">
                                                        </a>


                                                        <div class="top-advert-meta flex-wrap">
                                                            <div class="advert-cat text-overflow">
                                                                <i class="aficon-dot-circle-o"></i>
                                                                <a
                                                                    href="https://alquilaclic.com/categoria-del-anuncio/inmuebles/">Inmuebles</a>
                                                            </div>
                                                            <div class="advert-city text-overflow">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                                Cartagena </div>
                                                        </div>
                                                        <div class="adv-bottom-card">
                                                            <h5 class="adv-title">
                                                                <a href="https://alquilaclic.com/anuncios/alquilo-hermosa-camioneta/"
                                                                    class="text-overflow"
                                                                    title="ALQUILO HERMOSA CAMIONETA">
                                                                    ALQUILO HERMOSA CAMIONETA </a>
                                                            </h5>
                                                            <div class="bottom-advert-meta flex-wrap">
                                                                <div class="price"><span
                                                                        class="price-symbol">$</span>10,000<span
                                                                        class="no-strike">/ Hora</span></div>
                                                                <div class="flex-right">

                                                                    <a title="Favoritos" href="javascript:void(0);"
                                                                        class="process-favorites" data-id="2221">
                                                                        <i class="aficon-heart-o"></i>
                                                                        <span>Favoritos</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="search-map-la-long hidden" data-id="2221"
                                                            data-longitude="-75.47781304" data-latitude="10.39276338"
                                                            data-icon="" data-iconwidth="" data-iconheight=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="kc-elm kc-css-369184 kc_row">
            <div class="kc-row-container  kc-container">
                <div class="kc-wrap-columns">
                    <div class="kc-elm kc-css-161250 kc_col-sm-12 kc_column kc_col-sm-12">
                        <div class="kc-col-container">
                            <div class="af-title text-center">
                                <h3 class="af-heading">Cómo Funciona </h3>
                                <p>Comienza con 3 sencillos Pasos</p>
                            </div>
                            <div class="kc-elm kc-css-248280" style="height: 25px; clear: both; width:100%;"></div>
                            <div class="hiw-wrapper hiw-wrapper-3 flex-wrap flex-start-v">
                                <div class="hiw-item service hiw-1590897732">
                                    <div class="service-icon animation" style="background: #f92935; color: #ffffff"><img
                                            src="{{asset('img/Icono-12.png')}}" alt=""></div>
                                    <div class="service-content">
                                        <h5>Crea una cuenta</h5>
                                        <p>Crear una cuenta es muy fácil y lo puedes hacer con tu red social</p>
                                        <div class="hiw-item-style hidden">
                                            .hiw-1590897732:hover .service-icon{
                                            color:#f92935!important;
                                            background:#ffffff!important;
                                            }
                                            .hiw-1590897732.hiw-item:before{
                                            border-color:#f92935!important;
                                            } </div>
                                    </div>
                                </div>
                                <div class="hiw-item service hiw-1590897732">
                                    <div class="service-icon animation" style="background: #f92935; color: #ffffff"><img
                                            src="{{ asset('img/Icono-13.png') }}" alt=""></div>
                                    <div class="service-content">
                                        <h5>Crea Tu Anuncio Gratis </h5>
                                        <p>Puedes Publicar anuncios totalmente gratis por tiempo ilimitado</p>
                                        <div class="hiw-item-style hidden">
                                            .hiw-1590897732:hover .service-icon{
                                            color:#f92935!important;
                                            background:#ffffff!important;
                                            }
                                            .hiw-1590897732.hiw-item:before{
                                            border-color:#f92935!important;
                                            } </div>
                                    </div>
                                </div>
                                <div class="hiw-item service hiw-1590897732">
                                    <div class="service-icon animation" style="background: #f92935; color: #ffffff"><img
                                            src="{{ asset('img/Icono-14.png') }}" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h5>AlquilaCLIC</h5>
                                        <p>Espera a que te contacten para alquilar </p>
                                        <div class="hiw-item-style hidden">
                                            .hiw-1590897732:hover .service-icon{
                                            color:#f92935!important;
                                            background:#ffffff!important;
                                            }
                                            .hiw-1590897732.hiw-item:before{
                                            border-color:#f92935!important;
                                            } </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>
@endsection
