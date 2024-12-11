<x-admin.layout>
    <a href="/admin/skill/create"> <button type="button" class="mb-2 btn">Tambah skill</button></a>
    <table class="table " id="myTabel" style="width: 1000px;">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th> <!-- Remove colspan to match number of columns -->
                <th scope="col">Delete</th> <!-- Add separate column for delete action -->
            </tr>
        </thead>
        <tbody>
            @foreach($skill as $skill)
            <tr>
                <th scope="row">{{$skill->id}}</th>
                <td>{{$skill->title}}</td>
                <td>{{$skill->description}}</td>
                <td>
                    <a href="{{ route('admin.skill.edit', $skill) }}" class="mb-4">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>
                </td>
                <td>
                    <form id="deleteForm-{{$skill->id}}" action="{{ route('admin.skill.destroy', $skill->id) }}" method="post" onsubmit="return confirm('are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="button" id="deleteBtn" onclick="confirmDelete('{{ $skill->id }}')" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-admin.layout>
