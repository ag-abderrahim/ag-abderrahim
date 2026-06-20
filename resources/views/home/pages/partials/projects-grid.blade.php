<section class="projects-grid-section">

    <div class="projects-grid">

        @forelse($projects as $project)

            <div class="project-card">

                <div class="project-img-wrap">

                    <img src="{{ asset('storage/' . $project->thumbnail) }}"
                         alt="{{ $project->name }}">

                    <div class="project-overlay">
                        {{-- <a href="{{ route('public.projects.show', $project->slug) }}"
                        class="project-link-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a> --}}

                        <a href="{{ $project->live_url }}"
                        target="_blank"
                        class="project-link-icon">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>

                </div>

                <div class="project-body">

                    <span class="project-tag">
                        {{ $project->category }}
                    </span>

                    <h3>{{ $project->name }}</h3>

                    <p>{{ $project->short_desc }}</p>

                    <div class="project-actions">
                        <a href="{{ route('public.projects.show', $project->slug) }}"
                        class="project-read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                </div>

            </div>

        @empty

            <div class="no-projects">
                <h3>No projects found</h3>
                <p>Projects will appear here soon.</p>
            </div>

        @endforelse

    </div>

</section>
