<x-admin.layout>
    <h1 class="h3 mb-0 text-gray-800">Edit Project</h1>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form action="{{ route('admin.project.update', $project->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class=" mb-3">
                    <label>Project Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $project->name)}}"
                        required>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"
                        required>{{ old('description', $project->description) }}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link Project</label>
                    <input type="url" name="link" class="form-control" id="link"
                        value="{{ old('link', $project->link)}}">
                    @error('link')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Project Photo:</label>
                    <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                    @if($project->photo)
                    <img src="{{ asset('storage/' . $project->photo) }}" alt="Current Photo" width="150">
                    @endif
                    @error('photo')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Date:</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date', $project->date)}}"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.project.index') }}"><button type="" class=" btn btn-warning">Back</button></a>
            </form>
        </div>
    </div>
</x-admin.layout>