@extends('FrontEnd.layouts.basePage')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="white-block filters-toggle">
                    <div class="white-block-content">
                        <h6>
                            <a href="javascript:void(0);" class="toggle-filters">Buscar con filtros</a>
                        </h6>
                    </div>
                </div>
                <form method="post" class="search-form" action="https://alquilaclic.com/mostrar-anuncios/">
                    <div class="white-block no-margin">
                        <div class="white-block-title">
                            <h5>Filtro de Anuncios</h5>
                            <a href="javascript:void(0);" class="reset-search" title="Reset Search"><i
                                    class="aficon-undo"></i></a>
                        </div>

                        <div class="white-block-content">
                            <div class="form-group">
                                <label for="keyword">Palabra</label>
                                <input type="text" class="keyword" name="keyword" id="keyword" value=""
                                    placeholder="Busca código o palabra...">
                            </div>

                            <div class="form-group">
                                <label class="label-bottom-margin">Categoría</label>
                                <ul class="list-unstyled taxonomy-filter category-filter">
                                    <div class="styled-radio">
                                        <input type="radio" name="category" value="" id="category"
                                            checked=&quot;checked&quot;>
                                        <label for="category">Todos</label>
                                    </div>
                                    <li class="">
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="381" id="category-381">
                                            <label for="category-381">Inmuebles</label>

                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="category-custom-fields">
                            </div>

                            <div class="form-group">
                                <label for="location">Ubicación</label>
                                <input type="text" class="location" name="location" id="location" value=""
                                    placeholder="Digita la ciudad de alquiler ...">
                                <input type="hidden" name="latitude" class="latitude" value="">
                                <input type="hidden" name="longitude" class="longitude" value="">

                                <div class="radius-slider hidden">
                                    <label class="margin-above label-bottom-margin">Radius</label>
                                    <div class="slider-wrap">
                                        <div class="filter-slider" data-min="0" data-max="30" data-default="30"
                                            data-sufix="km"></div>
                                        <input type="hidden" name="radius" class="radius" value="30">
                                        <div class="slider-value"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="label-bottom-margin">Precio</label>
                                <div class="slider-wrap slider-range">
                                    <div class="filter-slider" data-range="true" data-min="0" data-decimal="."
                                        data-thousands="," data-max="5000000"></div>
                                    <input type="hidden" name="price" class="price" value="">
                                    <div class="slider-value"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="styled-select">
                                        <label for="currency">5. - Moneda</label>
                                        <select name="currency" id="currency" class="currency-swap">
                                            <option value="COP">COP ($)</option>
                                            <option value="USD">USD ($)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="label-bottom-margin">Tipo </label>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="type" value="" id="type-0" checked="checked">
                                            <label for="type-0">Todos</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="type" value="6" id="type-6">
                                            <label for="type-6">Alquiler</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="form-group">
                                <label class="label-bottom-margin">6. - Tipo de Anunciante</label>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="cond" value="" id="cond-0" checked="checked">
                                            <label for="cond-0">Todos</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="cond" value="1" id="cond-1">
                                            <label for="cond-1">Inmobiliaria</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="cond" value="2" id="cond-2">
                                            <label for="cond-2">Empresa de Alquiler</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="cond" value="3" id="cond-3">
                                            <label for="cond-3">Alquilador Independiente</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="cond" value="4" id="cond-4">
                                            <label for="cond-4">Otros</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="form-group">
                                <div class="styled-checkbox">
                                    <input type="checkbox" name="image-only" value="1" id="image-only">
                                    <label for="image-only">Mostrar anuncios con imagenes únicamente</label>
                                </div>
                            </div>
                            <div class="submit-search-form">
                                <a href="javascript:void(0);" class="af-button filter-adverts">Aplicar Filtros</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-9">
                <div class="ajax-search">
                    <div class="af-items-3 af-listing-grid">

                        @foreach ($ads as $ad)
                        <div class="af-item-wrap">
                            <div class="white-block hover-shadow advert-item advert-grid ">

                                <div class="advert-tags">
                                    @if ($ad->negotiable)
                                    <div class="ribbon negotiable">
                                        Negociable </div>
                                    @endif
                                </div>

                                <a href="{{ route('getAnuncio', $ad->slug) }}" class="advert-media">
                                    <img width="355" height="250"
                                        src="{{ asset('storage/'.$ad->images->first()->image_link) }}"
                                        class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" />
                                </a>

                                <div class="white-block-content">

                                    <div class="top-advert-meta flex-wrap">
                                        <div class="advert-cat text-overflow">
                                        </div>
                                        {{-- <div class="advert-city text-overflow">
                                        <i class="aficon-map-marker-alt-o"></i>
                                        Villa de Leyva
                                    </div> --}}
                                    </div>
                                    <h5 class="adv-title">
                                        <a href="{{ route('getAnuncio', $ad->slug) }}" class="text-overflow"
                                            title="{{ $ad->title }}">
                                            {{ $ad->title }} </a>
                                    </h5>
                                    <div class="bottom-advert-meta flex-wrap">
                                        <div class="price"><span class="price-symbol">$</span>{{ $ad->cost }}
                                            {{ $ad->currency }}<span class="no-strike">/ {{ $ad->period }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
