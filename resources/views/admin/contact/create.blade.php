<x-admin.layout>
    <h1 class="h3 mb-4 text-gray-800">Create Contact</h1>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form id="projectForm" action="{{ route('admin.contact.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Contact Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email')}}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone')}}">
                </div>
                <div class="mb-3">
                    <label for="sosial_media" class="form-label">Sosial Media</label>
                    <input type="text" name="sosial_media" class="form-control" id="sosial_media"
                        value="{{ old('sosial_media')}}">
                </div>
                <button type="submit" id="updateBtn" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-admin.layout>