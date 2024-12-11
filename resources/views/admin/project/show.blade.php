<x-admin.layout>
    <div class="container mt-4">
        <h2>Detail Project</h2>
        <div class="mb-4">
            <a href="{{ route('admin.project.index') }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Project Name:</h5>
                <p class="card-text">{{ $project->name }}</p>

                <h5 class="card-title">Project Description:</h5>
                <p class="card-text">{{ $project->description }}</p>

                <h5 class="card-title">Project Link:</h5>
                <a href="{{ $project->link }}">
                    <p class="card-text">{{ $project->link }}</p>
                </a>

                <h5 class="card-title">Project Photo:</h5>
                @if ($project->photo)
                <img src="{{ asset('storage/' . $project->photo) }}" alt="{{ $project->name }}" width="200"
                    class="mb-2">
                @endif

                <h5 class="card-title">Date:</h5>
                <p class="card-text">{{ $project->date }}</p>
            </div>
        </div>
    </div>
</x-admin.layout>