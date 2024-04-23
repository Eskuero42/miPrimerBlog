
@extends('estateagency.layout.plantilla')
@section('tite',"Blog Grid")
@section('search')
    @include('estateagency.pages.about.propertysearch')
    @include('estateagency.pages.about.introsingle')
@endsection
@section('content')
    @include('estateagency.pages.blog.bloggrid')
@endsection