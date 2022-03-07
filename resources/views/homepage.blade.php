<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ITIBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/homepage">ALL Posts <span class="sr-only">(current)</span></a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> --}}
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}
      </ul>
      <button type="button" class="btn btn-success"><a href="/addpage" style="color: white; text-decoration:none;">Add
          Post</a> </button>
      {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}
    </div>
  </nav>

  <table class="table table-dark">
    <thead>

      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Desc</th>
        <th scope="col">Created At</th>

      </tr>


      @foreach($posts as $p)

      <tr>
        <td> {{$p["id"] }} </td>
        <td> {{$p["title"] }} </td>
        <td> {{$p["description"] }} </td>
        <td> {{$p->created_at->format( "d-m-y") }} </td>
        <td> <a href={{ route('posts.view', [$p['id']]) }} class="btn btn-info">View</a> </td>
        <td> <a href={{ route('posts.update', [$p['id']]) }} class="btn btn-warning">Update</a> </td>
        <td>

          <form action={{ route('posts.deleteDB', [$p['id']]) }} method="POST" class="d-inline">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-danger"
              onclick="return confirm('Are you sure you want to delete this item')">Delete</button>

          </form>

        </td>
      </tr>
      @endforeach

      </tbody>
 
    </table>
    <div class="row d-flex justify-content-center ">
      <div>{{$posts->links("pagination::bootstrap-4")}}</div>
    </div>

</body>

</html>