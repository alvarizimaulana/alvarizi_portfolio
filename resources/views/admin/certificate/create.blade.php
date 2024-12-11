<x-admin.layout>
    <h1 class="h3 mb-4 text-gray-800">Create Certificate</h1>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form action="{{ route('admin.certificate.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" mb-3">
                    <label for="name" class="form-label">Certificate Name</label>
                    <input name="name" class="form-control" id="name">
                </div>
                <div class=" mb-3">
                    <label for="issued_by" class="form-label">Issued By</label>
                    <input name="issued_by" class="form-control" id="issued_by">
                </div>
                <div class=" mb-3">
                    <label for="issued_at" class="form-label">Issued At</label>
                    <input type="date" name="issued_at" class="form-control" id="issued_at">
                </div>
                <div class=" mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" name="file" class="form-control" id="file">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('admin.certificate.index')}}"><button type="button" class=" btn btn-warning">Back</button></a>
            </form>
        </div>
    </div>
</x-admin.layout>

