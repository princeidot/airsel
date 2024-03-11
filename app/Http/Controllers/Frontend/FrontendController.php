<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\contacts;
use App\Models\blog;

class FrontendController extends Controller
{
    public function index(){
		 $blog=blog::select('id','blog_url', 'blog_title', 'image1', 'created_at')->get();
        return view('layouts.index',compact('blog'));
    }
    public function about(){
		$blog=blog::select('id','blog_url', 'blog_title', 'image1', 'created_at')->get();
        return view('frontend.about',compact('blog'));
    }
	  public function ourproduct(){
		  
		   $blog = blog::select('id', 'blog_url', 'blog_title', 'image1', 'created_at')->get();
		 
        return view('frontend.ourproduct',compact('blog'));
    } 
    public function contact()
    {
        return view('frontend.contact');
    }
	    public function aeropower()
    {
			$blog = blog::select('id', 'blog_url', 'blog_title', 'image1', 'created_at')->get();
        return view('frontend.ourproducts.aeropower',compact('blog'));
    }
    public function grating()
    {
		$blog = blog::select('id', 'blog_url', 'blog_title', 'image1', 'created_at')->get();
        return view('frontend.ourproducts.grating',compact('blog'));
    }
	    public function galvanizing(){
        $blog = blog::select('id', 'blog_url', 'blog_title', 'image1', 'created_at')->get();
        return view('frontend.ourproducts.galvanizing',compact('blog'));
    }
	
	public function airseal(){
        $blog = blog::select('id', 'blog_url', 'blog_title', 'image1', 'created_at')->get();
        return view('frontend.ourproducts.airseal',compact('blog'));
    }
 public function store(Request $request)
    {
      
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'message' => 'required'
        ]);
        $input = $request->all();

        contacts::create($request->all());
      	 Mail::send('emails.contact', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
           
            'message' => $input['message'],
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('info@airseal.in', 'Airseal')->subject('form Contact Form');
        });

       return redirect()->route('contact.thankyou');
    }
	    public function thankyou(){
       return view('frontend.thankyou');
    }
	
	public function csoon(){
		return view('layouts.comingsoon');
					}
    public function sitemap()
    {
       $blog=blog::select('blog_url','updated_at')->get();
		
        return response()->view('sitemap',compact('blog'))->header('Content-Type', 'text/xml');
    }
	
	    public function blog(Request $request)
    {
			
        $blog=blog::orderby('id','DESC')->paginate(12);
        return view('frontend.blog',compact('blog'));
    }

    public function blogsingle($url, Request $request)
    {

        $blogs = blog::where('blog_url', $url)->first();
        $allblog = blog::select('blog_title', 'created_at', 'blog_url', 'image1')->orderBy('id','desc')->limit(3)->get();       
		$previous  =blog::where('id', '>', $blogs->id)->first();
		 $previousid = blog::where('id', '<', $blogs->id)->max('id');
		$next = blog::where('id', $previousid)->first();
		
        return view('frontend.blogdetails',compact('blogs','allblog','previous','next'));
    }


}
