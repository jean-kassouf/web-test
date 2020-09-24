<?php
    
    namespace App\Http\Controllers\API;
    
    use App\Http\Controllers\Controller;
    use App\Models\Post;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use App\Http\Resources\PostsResource;
    
    class PostsController extends Controller
    {
        /**
            * Display a listing of the resource.
            *
            * @return \Illuminate\Http\Response
        */
        public function index()
        {
            $posts = Post::all();
            return response([ 'post' => PostsResource::collection($posts), 'message' => 'Retrieved successfully'], 200);
        }
        
        /**
            * Store a newly created resource in storage.
            *
            * @param  \Illuminate\Http\Request  $request
            * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
            $data = $request->all();
            
            $validator = Validator::make($data, [
            'title' => 'required|max:255',
            'type' => 'max:255',
            'content' => 'required',
            'img' => 'max:255'
            ]);
            
            if($validator->fails()){
                return response(['error' => $validator->errors(), 'Validation Error']);
            }
            
            $post = Post::create($data);
            
            return response([ 'post' => new PostsResource($post), 'message' => 'Created successfully'], 200);
        }
        
        /**
            * Display the specified resource.
            *
            * @param  \App\Models\Post  $post
            * @return \Illuminate\Http\Response
        */
        public function show(Post $post)
        {
            return response([ 'post' => new PostsResource($post), 'message' => 'Retrieved successfully'], 200);
        }
        
        /**
            * Update the specified resource in storage.
            *
            * @param  \Illuminate\Http\Request  $request
            * @param  \App\Models\Post  $post
            * @return \Illuminate\Http\Response
        */
        public function update(Request $request, Post $post)
        {
            $post->update($request->all());
            
            return response([ 'post' => new PostsResource($post), 'message' => 'Retrieved successfully'], 200);
        }
        
        /**
            * Remove the specified resource from storage.
            *
            * @param  \App\Models\Post  $post
            * @return \Illuminate\Http\Response
        */
        public function destroy(Post $post)
        {
            $post->delete();
            
            return response(['message' => 'Deleted']);
        }
    }
