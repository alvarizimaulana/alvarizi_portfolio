<x-admin.layout>
    <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="string" name="medsos" value="{{old('medsos', $contact->medsos)}} ">
        <input type="string" name="akun" value="{{old('akun', $contact->akun)}} ">

        <button type="submit">kirim</button>

    </form>
</x-admin.layout>