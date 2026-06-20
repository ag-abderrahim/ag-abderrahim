<section class="project-hero">
    <div class="container">

        <div class="project-hero-grid">

            <div>

                <span class="project-tag">
                    {{ $project->category }}
                </span>

                <h1>{{ $project->name }}</h1>

                <p>
                    {{ $project->short_desc }}
                </p>

                <div class="hero-actions">

                    @if($project->live_url)
                    <a href="{{ $project->live_url }}" target="_blank" class="btn-primary">
                        Live Demo
                    </a>
                    @endif

                    <a href="{{ route('public.projects') }}" class="btn-ghost">
                        Back to Projects
                    </a>

                </div>

            </div>

            <div>
                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                     class="project-main-image">
            </div>

        </div>

    </div>
</section>
