<x-admin.layout>
    <form id="updateForm" action="{{ route('admin.skill.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{old('title', $skill->title)}} ">
        <input type="text" name="description" value="{{old('description', $skill->description)}} ">

        <button id="updateBtn" type="button" onclick="confirmUpdate()">kirim</button>

    </form>
</x-admin.layout>