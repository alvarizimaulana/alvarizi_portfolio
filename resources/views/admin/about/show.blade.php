<x-admin.layout>
    <div class="container mt-4">
        <h2>Detail About</h2>
        <div class="mb-4">
            <a href="{{ route('admin.about') }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name:</h5>
                <p class="card-text">{{ $about->name }}</p>

                <h5 class="card-title">Gender:</h5>
                <p class="card-text">{{ $about->gender }}</p>

                <h5 class="card-title">Work:</h5>
                <p class="card-text">{{ $about->pekerjaan }}</p>

                <h5 class="card-title">Description:</h5>
                <p class="card-text">{{ $about->description }}</p>
            </div>
        </div>
    </div>
</x-admin.layout>