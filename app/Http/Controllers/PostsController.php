<?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Models\Post;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\DB;
    
    class PostsController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
        }
        /**
            * Display a listing of the resource.
            *
            * @return \Illuminate\Http\Response
        */
        public function index()
        {
            $pages = DB::table('posts')->get();
            return view('admin.posts.index')->with('pages', $pages);
        }
        
        /**
            * Show the form for creating a new resource.
            *
            * @return \Illuminate\Http\Response
        */
        public function create()
        {
            return view('admin.posts.create');
        }
        
        /**
            * Store a newly created resource in storage.
            *
            * @param  \Illuminate\Http\Request  $request
            * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
            $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts', 
            ]);
            
            if ($validator->fails()) {
                return redirect()->route('Posts.create')
                ->withErrors($validator)
                ->withInput();
            }
            
            
            $Post = Post::create([
            'title' =>  $request->input('title'),
            'type' =>  $request->input('type'),
            'content' =>  $request->input('post_content'),
            'img' =>  $request->input('post_img')
            ]);
            return redirect()->route('Posts.index');
        }
        
        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
            //
        }
        
        /**
            * Show the form for editing the specified resource.
            *
            * @param  int  $id
            * @return \Illuminate\Http\Response
        */
        public function edit($id)
        {
            $post= Post::findOrFail($id);
            return view('admin.posts.edit',compact('post'));
        }
        
        /**
            * Update the specified resource in storage.
            *
            * @param  \Illuminate\Http\Request  $request
            * @param  int  $id
            * @return \Illuminate\Http\Response
        */
        public function update(Request $request, $id)
        {
            $post= Post::findOrFail($id);
            $post->title =  $request->input('title');
            $post->type = $request->input('type');
            $post->content = $request->input('post_content');
            $post->img = $request->input('post_img');
            $post->save();
            return redirect()->route('Posts.index');
        }
        
        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
            $post= Post::findOrFail($id);
            $post->delete();
            return redirect()->route('Posts.index');
        }
    }
