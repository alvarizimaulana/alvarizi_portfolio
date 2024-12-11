<x-admin.layout>
    <a href="/admin/certificate/create"> <button type="button" class="mb-2 btn ">create</button></a>
    <table class="table " id="myTabel" style="width: 1000px;">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Title</th>
                <th scope="col">Issued By</th>
                <th scope="col">Issued At</th> <!-- Remove colspan to match number of columns -->
                <th scope="col">description</th>
                <th scope="col">File</th>
                <!-- <th scope="col">Description</th>} -->
                <th scope="col">Action</th> <!-- Add separate column for delete action -->
            </tr>
        </thead>
        <tbody>
            @foreach($certificate as $certificate)
            <tr>
                <th scope="row">{{$certificate->id}}</th>
                <td>{{$certificate->name}}</td>
                <td>{{$certificate->issued_by}}</td>
                <td>{{$certificate->issued_at}}</td>
                <td>{{$certificate->description}}</td>
                <td>@if ($certificate->file)
                    <a href="{{ asset('storage/certificates/' . $certificate->file) }}"
                    class="btn btn-info" target="_blank">View Certificate</a>
                @else
                    <span>No file upload</span>
                @endif</td>
                <td>
                    <form action="{{ route('admin.certificate.destroy', $certificate->id) }}" method="post" onsubmit="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" id="deleteBtn" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('admin.certificate.edit', $certificate) }}" class="mb-4">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-admin.layout>
