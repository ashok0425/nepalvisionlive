<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

use File;
use Illuminate\Support\Facades\DB;
use Throwable;

class BlogController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::orderBy('id','desc')->get();
       return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('admin.blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $url = $this->toAscii($request->title);

        $request->validate([
            'title'=>'required|max:255',

        ]);
        // try {
       $blog=[];
            $file=$request->file('image');

            if($file){
                $fname=rand().'blog.'.$file->getClientOriginalExtension();
                $blog['guid']='upload/blog/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move(public_path().'/upload/blog/',$fname);
            }

            $cover_image=$request->file('cover_image');
            if($cover_image){
                $fname=rand().'cover_image.'.$cover_image->getClientOriginalExtension();
                $blog['cover_image']='upload/blog/'.$fname;
                $cover_image->move(public_path().'/upload/blog/',$fname);
            }

            $blog['post_title']=$request->title;
            $blog['url']=$url;
            $blog['meta_title']=$request->meta_title;
            $blog['meta_description']=$request->meta_description;
            $blog['keyword']=$request->keyword;
            $blog['post_date']=today();
            $blog['post_status']='publish';
            $blog['post_content']=$request->content;
           DB::table('blogs')->insert($blog);
          
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Blog  updated',

                 );
                 return redirect()->route('admin.blogs.index')->with($notification);
            


        // } catch (\Throwable $th) {
        //     $notification=array(
        //         'alert-type'=>'error',
        //         'messege'=>'Something went wrong. Please try again later.',

        //      );
        //      return redirect()->back()->with($notification);

        // }

    }

    public function edit(Blog $blog)
    {
              $blog=Blog::find($blog->ID);
        return view('admin.blog.edit',compact('blog'));
    }


    public function update(Request $request,$id)
    {
        $url = $this->toAscii($request->title);

        $request->validate([
            'title'=>'required|max:255',

        ]);
        // try {
       $blog=[];

            $file=$request->file('image');

            if($file){
                $category=Blog::where('ID',$id)->first();
                File::delete(public_path($category->image));
                $fname=rand().'category.'.$file->getClientOriginalExtension();
                $blog['guid']='upload/blog/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move(public_path().'/upload/blog/',$fname);
            }



            $cover_image=$request->file('cover_image');

            if($cover_image){
                $category=Blog::where('ID',$id)->first();
                File::delete(public_path($category->cover_image));
                $fname=rand().'cover_image.'.$cover_image->getClientOriginalExtension();
                $blog['cover_image']='upload/blog/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $cover_image->move(public_path().'/upload/blog/',$fname);
            }
            $blog['post_title']=$request->title;
            $blog['url']=$url;
            $blog['meta_title']=$request->meta_title;
            $blog['meta_description']=$request->meta_description;
            $blog['keyword']=$request->keyword;

            $blog['post_content']=$request->content;
           DB::table('blogs')->where('ID',$id)->update($blog);
          
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Blog  updated',

                 );
                 return redirect()->route('admin.blogs.index')->with($notification);
            


        // } catch (\Throwable $th) {
        //     $notification=array(
        //         'alert-type'=>'error',
        //         'messege'=>'Something went wrong. Please try again later.',

        //      );
        //      return redirect()->back()->with($notification);

        // }

    }

    public function destroy($id)
    {
        try {
        DB::table('blogs')->where('ID',$id)->delete();
            $notification=array(
                'alert-type'=>'success',
                'messege'=>'Successfully deleted .',
               
             );
        } catch (Throwable $e) {
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Failed to delete , Try again.',
               
             );
        }

        return redirect()->back()->with($notification);
    }











    protected function active($id,$table){
        DB::table($table)->where('ID',$id)->update([
             'post_status'=>'publish',
         ]);
         $notification=array(
             'alert-type'=>'success',
             'messege'=>'Status: Activated.',

          );
          return redirect()->back()->with($notification);
     }

     protected function deactive($id,$table){
        DB::table($table)->where('ID',$id)->update([
            'post_status'=>'disable',
        ]);
        $notification=array(
            'alert-type'=>'info',
            'messege'=>'Status: Deactivated',

         );
         return redirect()->back()->with($notification);
    }


    
    private function toAscii($str) {
        $clean = preg_replace('~[^\\pL\d]+~u', '-', $str);
        $clean = strtolower(trim($clean, '-'));

        return $clean;
    }

}
