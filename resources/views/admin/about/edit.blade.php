<x-admin.layout>
    <h1 class="h3 mb-0 text-gray-800">Edit About</h1>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form action="{{ route('admin.about.update', $about->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class=" mb-3">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $about->name)}}" required>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Gender:</label>
                    <select name="gender" class="form-control">
                        <option value="lelaki" {{ $about->gender == 'lelaki' ? 'selected' : '' }}>Lelaki</option>
                        <option value="perempuan" {{ $about->gender == 'perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                    @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Pekerjaan:</label>
                    <input type="text" name="pekerjaan" class="form-control"
                        value="{{ old('pekerjaan', $about->pekerjaan)}}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"
                        required>{{ old('description', $about->description) }}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.about') }}"><button type="" class=" btn btn-warning">Back</button></a>
            </form>
        </div>
    </div>
</x-admin.layout>