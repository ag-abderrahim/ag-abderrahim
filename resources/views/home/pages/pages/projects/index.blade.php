@extends('home.layouts.v2')

@section('content')

<section class="projects-page">
    <div class="container">

        <!-- HERO -->
        <div class="projects-page-header">
            <span class="section-label">Portfolio</span>
            <h1>Projects & Case Studies</h1>
            <p>
                Explore selected projects, SaaS products and business systems
                I’ve designed and built for real businesses.
            </p>
        </div>

        <!-- PROJECTS GRID -->
        @include('home.pages.partials.projects-grid')

        <!-- PAGINATION -->
        <div class="pagination-wrap">
            {{ $projects->links() }}
        </div>

    </div>
</section>

@endsection
