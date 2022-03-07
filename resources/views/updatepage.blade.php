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
          <a class="nav-link" href={{  route('posts.all') }} >ALL Posts <span class="sr-only">(current)</span></a>
        </li>
  
      </ul>
    
    </div>
  </nav>
  

  {{--  --}}
  <div class="container py-5">
    <form  action={{route("posts.updateDB",$post->id)}} method="post">
      @csrf
      @method("put")
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ID</label>
          <input disabled name="id" value={{$post["id"]}} type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input name="title" value={{$post["title"]}} type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <textarea name="description"  id="" cols="30" rows="5" class="form-control">{{$post["description"]}}</textarea>
        </div>
        
        <div class="mb-3">
          <select value="{{$post->user_id}}" class="form-control" aria-label="Default select example" name="user">
            @foreach ($users as $user)
            @if ($user->id == $post->user_id)
            <option selected value="{{$user->id}}">{{$user->name}}</option>
            @else
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endif
            @endforeach
          </select>
        </div>
       
        
        <input type="submit" class="btn btn-success" value="Submit"/>
      </div>
    </form>
    </div>
</body>
</html>