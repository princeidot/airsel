<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogadminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function listblog()
    {
        
        $blogs = blog::select('blog.id', 'blog.blog_title', 'blog.blog_category', 'blog.image1', 'blog.blog_url')->get();
        
        return view('admin.list', compact('blogs'));
    }

    public function add()
    {
        return view('admin.addblog');
    }

    public function saveblog(Request $request)
    {

        $datas = $request->input();
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|google_captcha'
        ]);
        
        $req = new blog();
        $req->blog_title = $datas['blog_title'];
        $req->blog_category = $datas['blog_category'];
        $req->description = $datas['summary-ckeditor'];
        $req->description1 = $datas['headdescription'];
        $req->blog_url = $datas['url'];
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $image1->move("blogimg/", $image1->getClientOriginalName());
            $image = $image1->getClientOriginalName();
            $req->image1 = $image;
         
        }
        $req->save();
       return redirect()->route('admin.listblog')->with('success', 'Blog Upload');
    }


    public function editblog($id, Request $request)
    {
        $blogs = blog::where('id', $id)->first();
        return view('admin.blogedit',compact('blogs'));
    }

    public function updateblog($id, Request $request)
    {
        $datas = $request->input();
        $req = blog::find($request->id);

        $image1 = $request->file('image1');

        if ($request->hasFile('image1')) {
            $image1->move("blogimg/", $image1->getClientOriginalName());
            $image = $image1->getClientOriginalName();
            $req->image1 = $image;
        } else if (!$request->hasFile('image1')) {
            $image1 = $request->image1;
        }
        if (!$request->blog_category == null) {
            $req->blog_category = $datas['blog_category'];
        }
        $req->blog_title = $datas['blog_title'];
        $req->description = $datas['summary-ckeditor'];
        $req->blog_url = $datas['url'];
        $req->description1 = $datas['headdescription'];

        $req->save();

        return redirect('dashboard/listblog')->with('success', 'Blog updated');
    }


    public function bdelete($id)
    {
        
        //blog::find($id)->delete();
        return redirect()->back()->with('success', 'Data deleted successfully form Contact form');
    }
}
