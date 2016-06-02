<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

use DB;
use App\Blog;
use App\Http\Requests;

class BlogController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(5);
        //$blogs = DB::table('blog')->paginate(2);
        return view('blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'title'   => 'required',
          'subject' => 'required',
        ]);

        $blog = new Blog;
        $blog->title   = $request->title;
        $blog->subject = $request->subject;
        $blog->slug    = str_slug($request->title, '-');

        $blog->save();
        return redirect('blog')->with('message', 'Blog sudah diupdate!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //$blog = Blog::find($id);
        $blog = Blog::where('slug', $title)->first();

        if(!$blog){
          abort(404);
        }

        return view('blog.single')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $blog = Blog::find($id);

      if(!$blog){
        abort(404);
      }

      return view('blog.edit')->with('blog', $blog);
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
      $this->validate($request, [
        'title'   => 'required',
        'subject' => 'required',
      ]);

      $blog = Blog::find($id);
      $blog->title   = $request->title;
      $blog->subject = $request->subject;
      $blog->slug    = str_slug($request->title, '-');

      $blog->save();
      return redirect('blog')->with('message', 'Blog sudah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('blog')->with('message', 'Blog sudah dihapus!');
    }
}
