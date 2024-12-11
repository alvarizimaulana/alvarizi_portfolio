<x-admin.layout>
    <div class="container mt-4">
        <h2>Detail Contact</h2>
        <div class="mb-4">
            <a href="{{ route('admin.contact') }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name:</h5>
                <p class="card-text">{{ $contact->name }}</p>

                <h5 class="card-title">Email:</h5>
                <p class="card-text">{{ $contact->email }}</p>

                <h5 class="card-title">Phone:</h5>
                <p class="card-text">{{ $contact->phone }}</p>

                <h5 class="card-title">Sosial Media:</h5>
                <p class="card-text">{{ $contact->sosial_media }}</p>
            </div>
        </div>
    </div>
</x-admin.layout>