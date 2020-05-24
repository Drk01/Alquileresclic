@extends('panel.layouts.panel')

@section('title')
Crear anuncio
@endsection

@section('subtitle')
¡Cree su anuncio!
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/categorySelector.css') }}">

<div class="row">
    <div class="col">
        <h5>Seleccione la categoría de su anuncio: </h5>
        <div>
            <div class="mt-6" id="categorySelector">
            </div>


        </div>
    </div>
    <div class="col">
        <ul id="secondaryCategories" class="categoryList">

        </ul>
    </div>
</div>
<script>
    window.onload = function (){
        $('#categorySelector').append('<ul id="categoryList"></ul>');
        $.get(route('getMainCategories').url()).done((categories) => {
            categories.forEach(category => {
                $('#categoryList').append(`<li onclick="getSecondaries(${category.id})" class="primaryItem">${category.name} <i class="fas fa-chevron-right rightArrow"></i></li>`);
            });
        })

        getSecondaries = function (id){
            console.log(id)
            $('#secondaryCategories').empty();
            $.get(route('getSecondaryCategories',id).url()).done((subcategories) => {
                subcategories.forEach(subcategory => {
                    $('#secondaryCategories').append(`
                     <li class="primaryItem" onclick="subcatSelected(${subcategory.id})">${subcategory.name}</li>
                    `)
                });
            })
        }

        subcatSelected = function(id){
            console.log(id);
        }
    }
</script>
@endsection
