<x-admin.layout>
    <h1 class="h3 mb-4 text-gray-800">Create Project</h1>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Project Name</label>
                    <input name="name" class="form-control" id="name" value="{{ old('name')}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"
                        value="{{ old('description')}}"></textarea>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Project Link</label>
                    <input type="url" name="link" class="form-control" id="link" value="{{ old('link')}}">
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Project Photo:</label>
                    <input type="file" name="photo" id="photo" class="form-control" accept="image/*"
                        value="{{ old('photo')}}">
                    @error('photo')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" id="date" value="{{ old('date')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('admin.project.store') }}">
                    <button type="button" class="btn btn-warning">Back</button>
                </a>
            </form>
        </div>
    </div>
</x-admin.layout>