<x-admin.layout>
    <h1 class="h3 mb-4 text-gray-800">Create About</h1>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form action="{{ route('admin.about.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" class="form-control" id="name" value="{{ old('name')}}">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="lelaki" {{ old('gender') == 'lelaki' ? 'selected' : '' }}>Lelaki</option>
                        <option value="perempuan" {{ old('gender') == 'perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" id="pekerjaan"
                        value="{{ old('pekerjaan')}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"
                        value="{{ old('description')}}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('admin.certificate.store') }}">
                    <button type="button" class="btn btn-warning">Back</button>
                </a>
            </form>
        </div>
    </div>
</x-admin.layout>