<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ITIBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href={{  route('posts.all') }}>ALL Posts <span class="sr-only">(current)</span></a>
        </li>
      
      </ul>
      <button type="button" class="btn btn-success"><a href={{  route('posts.add')}} style="color: white; text-decoration:none;">Add Post</a> </button>
      
    </div>
  </nav>

    <table class="table table-light">
        <thead>
      
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Desc</th>
            <th scope="col">Creted AT</th>
            
          </tr>
      
      
           
    <tr>
    <td> {{$post["id"] }} </td>
    <td> {{$post["title"] }} </td>
    <td> {{$post["description"] }} </td>
    <td> {{$date }} </td>
    
    </tr>
    
      </tbody>
      </table>
</body>
</html>