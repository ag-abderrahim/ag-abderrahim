<section class="project-content">
    <div class="container">

        <div class="content-block">
            <h2>Project Overview</h2>
            {!! $project->overview !!}
        </div>

        <div class="content-grid">

            <div class="content-card">
                <h3>The Challenge</h3>
                {!! $project->problem !!}
            </div>

            <div class="content-card">
                <h3>The Solution</h3>
                {!! $project->solution !!}
            </div>

        </div>

        @if($project->tools)
        <div class="tech-stack">
            <h3>Tech Stack</h3>

            <div class="tech-list">
                @foreach($project->tools as $tool)
                    <span>{{ $tool }}</span>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
