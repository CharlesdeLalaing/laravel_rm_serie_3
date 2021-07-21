@extends('back-office.layout.base')

@section('content')
    @include('back-office.partials.home.header_top')
    @include('back-office.partials.about.bo_about')
    @include('back-office.partials.service.bo_service')
    @include('back-office.partials.portofolio.bo_portofolio')
    @include('back-office.partials.portofolio.bo_portofolio_grid')
    @include('back-office.partials.contact.bo_contact')
@endsection