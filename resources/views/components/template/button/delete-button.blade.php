<form action="{{ url($url, $id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
    @csrf
    @method('delete')
    <button class="btn btn-danger m-r-5"><i class="fas fa-trash"></i></button>
</form>