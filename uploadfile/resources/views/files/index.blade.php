
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>photos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

</body>
</html>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">path</th>
        <th scope="col" >action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($images as $image)

      <tr>
        <th scope="row">{{ $image->id}}</th>
        <td><img src="{{asset('imgs/'.$image->path)}}" height="30px" width="30px" > </td>
        <td>

        <a href="{{ route('files.edit' ,$image->id) }}" class="btn btn-primary">edit</a>

      <form action="{{route('files.destroy' ,$image->id)}}" method="POST">
            @csrf
              @method('DELETE')

         <button type="submit" >delete</button>
        </form>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>




  