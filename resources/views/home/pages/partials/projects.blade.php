<section class="projects" id="projects">
    <div class="container">
        <div class="projects-header">
            <span class="section-label">Featured Projects</span>
            <h2>Real Solutions<br>For Real Businesses</h2>
        </div>

        <div class="projects-grid">

            @foreach($projects as $project)

                <div class="project-card">

                    <div class="project-img-wrap">

                        <img src="{{ asset('storage/' . $project->thumbnail) }}"
                             alt="{{ $project->name }}">

                        <div class="project-overlay">

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

            @endforeach

        </div>
    </div>
</section>
