<x-admin.layout>
    <form id="updateForm"  action="{{ route('admin.certificate.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Certificate Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $certificate->name) }}" required>
        </div>

        <div class="form-group">
            <label for="issued_by">Issued By</label>
            <input type="text" class="form-control" id="issued_by" name="issued_by" value="{{ old('issued_by', $certificate->issued_by) }}" required>
        </div>

        <div class="form-group">
            <label for="issued_at">Issued At</label>
            <input type="date" class="form-control" id="issued_at" name="issued_at" value="{{ old('issued_at', $certificate->issued_at) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $certificate->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="file">Replace Certificate File (optional)</label>
            <input type="file" class="form-control-file" id="file" name="file">
            @if ($certificate->file)
                <p>Current file: <a href="{{ asset('storage/' . $certificate->file) }}" target="_blank">View</a></p>
            @endif
        </div>
        <button id="updateBtn" type="button" onclick="confirmUpdate()">kirim</button>
    </form>
</x-admin.layout>