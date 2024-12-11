<x-admin.layout>
<a href="/admin/project/create"> <button type="button" class="mb-2 btn">create</button></a>
    <table class="table table-striped table-hover" id="myTabel" style="width: 850px;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($project as $item)
            <tr>
                <center>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->date }}</td>
                    <td style="display: flex; gap: 10px; justify-content: flex-start;">
                        <a href="{{ route('admin.project.show', $item) }}" class="mb-4">
                            <button class="btn btn-warning" type="button" style="align-items: center; gap: 5px;">
                                <i class="material-icons">visibility</i></button>
                        </a>
                        <a href="{{ route('admin.project.edit', $item) }}" class="mb-4">
                            <button class="btn btn-primary" type="button" style="align-items: center; gap: 5px;"><i
                                    class="material-icons">edit</i></button>
                        </a>
                        <form id="delete-form-{{ $item->id }}" action="{{ route('admin.project.destroy', $item->id) }}"
                            method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="sumbit" class="btn btn-danger" onclick="confirmDelete('{{ $item->id }}')">
                                <i class="material-icons">delete</i>
                            </button>
                        </form>
                    </td>
                </center>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-admin.layout>
