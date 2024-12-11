<x-admin.layout>
    <a href="{{ route('admin.about.create') }}" class="mb-4">
        <button type="button" class="btn text-white" style=" background-color: #b1b493; color: #ffffff;
            font-weight: bold; border: none; border-radius: 5px; transition: all 0.3s ease;"
            onmouseover="this.style.backgroundColor='#4caf50'; this.style.boxShadow='0 2px 5px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1.05)';"
            onmouseout="this.style.backgroundColor='#b1b493'; this.style.boxShadow='none'; this.style.transform='scale(1)';">Create
            About</button>
    </a>

    <table class="table table-striped table-hover" id="myTabel" style="width: 850px;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Work</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($about as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->pekerjaan }}</td>
                <td style="display: flex; gap: 10px; justify-content: flex-start;">
                    <a href="{{ route('admin.about.show', $item) }}" class="mb-4">
                        <button class="btn btn-warning" type="button" style="align-items: center; gap: 5px;">
                            <i class="material-icons">visibility</i></button>
                    </a>
                    <a href="{{ route('admin.about.edit', $item) }}" class="mb-4">
                        <button class="btn btn-primary" type="button" style="align-items: center; gap: 5px;"><i
                                class="material-icons">edit</i></button>
                    </a>
                    <form id="delete-form-{{ $item->id }}" action="{{ route('admin.about.destroy', $item->id) }}"
                        method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $item->id }}')">
                            <i class="material-icons">delete</i>
                        </button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-admin.layout>