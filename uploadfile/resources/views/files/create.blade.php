


<form action="{{ route('files.store') }}" method="Post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"  >
    <input type="submit" name="submit">
    </form>
