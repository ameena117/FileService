<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>upload</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container m-5">
            <h3 class="text-center text-danger"><b>Upload any file</b> </h3>
            <table class="table table-striped m-5 table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>File</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                 <tr>
                       <th scope="row">{{ $post->id }}</th>
                       <td>{{ $post->title }}</td>
                       <td>
                       <img src="img/{{ $post->img }}" class="img-responsive" style="max-height:100px; max-width:120px" alt="" srcset=""></td>
                       <td>
                         <div class="btn-group">
                              <a href="/edit/{{ $post->id }}" class="btn btn-sm btn-outline-info m-2">Edit</a>    
                        <form action="/delete/{{ $post->id }}" method="post">   
                            <a class="btn btn-sm btn-outline-danger m-2" type="submit">Delete</a>
                            @csrf
                            @method('delete')
                        </form>
                         </div>
                       </td>
                   </tr>
                   @endforeach
                </tbody>
              </table>
              <a href="/create" class="btn btn-outline-secondary m-5">Add New file</a>
        </div>
    </body>
</html>
