<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD With Multiple Image Upload</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Edit Post</b> </h3>
				    <div class="form-group">
                        <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                         <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $posts->title }}">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="Description">{{ $posts->body }}</Textarea>
                         <label class="m-2">File</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="img">
                        <button type="submit" class="btn btn-outline-success mt-3 ">Save Changes</button>
                        </form>
                   </div>
                </div>
                

                <div class="col-lg-3 m-5">
                    <p>The file Uploaded:</p>
                    <img src="/img/{{ $posts->img }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    <br>
                </div>
            </div>
         </body>
</html>









