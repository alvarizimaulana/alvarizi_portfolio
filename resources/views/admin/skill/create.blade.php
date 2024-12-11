<x-admin.layout>
<form action="{{ route('admin.skill.store')}}" method="post">
    @csrf
        <div class=" mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input name="description" type="text" class="form-control">
        </div>
        
        <button type="submit" id="updateBtn" class="btn btn-primary">Submit</button>
    </form>
</x-admin.layout>