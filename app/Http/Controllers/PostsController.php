<?php
namespace App\Http\Controllers;
use App\Models\Post ;
use App\Models\User ;
use Carbon\Carbon ;

class PostsController extends Controller
{


function posts (){
   // $posts=Post::all();
    $posts = Post::paginate(2);
        return view("homepage",["posts"=>$posts]);
    }

    function viewpost($id){
    //     foreach ($this->data as $post)
    //     {
    //         if ($post["id"]==$id){
    //             return view("viewpost",["post"=>$post]);
                
    //         }
    //     }
    //  return NULL ; 
    //$date = new Carbon() ; 
    //dd($date);
    $data = Post::find($id);
    $date=Carbon::parse($data['created_at'])->format("d-m-y");
    return view("viewpost",["post"=>$data , "date"=>$date]);
    }

    function add(){
        $users=User::all();
                return view("addpage",["users"=>$users]);
    }
                
         
    function update($id){
    //     foreach ($this->data as $post)
    //     {
    //         if ($post["id"]==$id){
    //             return view("updatepage",["post"=>$post]);
                
    //         }
    //     }
    //  return NULL ; 
    $users=User::all();
//    return view("addpage",["users"=>$users]);
    $data = Post::find($id);
    return view("updatepage",["post"=>$data,"users"=>$users]);
}

function add_DB(){

$request_data = request()->all();

        $p = new Post();

        $p->title =$request_data["title"];
        $p->description =$request_data["description"];
        $p->user_id =$request_data["user"];
        $p->save();


        return to_route("posts.all");
}

function update_DB($id){
    $updatedpost = Post::find($id);
        $updatedpost->title =request("title");
        $updatedpost->description =request("description");
        $updatedpost->user_id =request("user");
        $updatedpost->save();
        return to_route("posts.all");
}

function delete_DB($id){
    Post::find($id)->delete();
    return to_route("posts.all");
}

}