<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\Contact;

class GeustController extends Controller
{
    public function show(Request $request){
        $best_books = Book::orderBy('sells','desc')->limit(6)->get();
        $new_books = Book::orderBy('updated_at','desc')->limit(6)->get();
        return view('index',['bestbooks'=> $best_books,'newbooks'=> $new_books]);
    }

    public function search(Request $request){
        if(isset($request->title)){
            $search = $request->get('title');
            $books = DB::table('books')->where('title','like','%'.$search.'%')->paginate(8);
        }else if(isset($request->pub_house)){
            $search = $request->get('pub_house');
            $books = DB::table('books')->where('pub_house','like','%'.$search.'%')->paginate(8);
        }else if(isset($request->subject)){
            $search = $request->get('subject');
            $books = DB::table('books')->where('subject','like','%'.$search.'%')->paginate(8);
        }else{
            $search = $request->get('title');
            $books = DB::table('books')->where('title','like','%'.$search.'%')->paginate(8);
        }
        
        return view('library',['books'=> $books]);
    }

    public function contact(Request $request){
        $this->validate(request(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:512',
        ]);
        $msg = new Contact ;
        $msg->fullname = $request->fullname;
        $msg->email = $request->email;
        $msg->msg = $request->message;
        $msg->save();
        return redirect()->route('index');
    }

    public function showcontact(){
        return view('contactus');
    }

    public function showdetails(Request $request,$id){
        $book = Book::findOrFail($id);
        return view('bookdetail',['book'=>$book]);
    }


}
