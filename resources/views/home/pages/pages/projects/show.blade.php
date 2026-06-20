@extends('home.layouts.v2')

@section('content')

<!-- HERO -->
@include('home.pages.pages.projects.partials.project-hero')

<!-- OVERVIEW -->
@include('home.pages.pages.projects.partials.project-overview')

<!-- GALLERY -->
@include('home.pages.pages.projects.partials.project-gallery')

<!-- CTA -->
@include('home.pages.pages.projects.partials.project-cta')

@endsection
