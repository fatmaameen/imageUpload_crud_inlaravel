


<form action="{{ route('files.update' ,$image->id) }}" method="Post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="file" name="file"   >
    <input type="submit" name="submit">
    </form>




    