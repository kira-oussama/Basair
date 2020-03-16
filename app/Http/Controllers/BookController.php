<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Contact;
use Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = DB::table('books')->paginate(6);

        return view('admin.index',['books'=> $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $path = Storage::putfile('public',$request->file('image'));
        $url = Storage::url($path);

        $book->image = $url;
        $book->title = $request->title;
        $book->price = $request->price;
        $book->author = $request->author;
        $book->pub_house = $request->pub_house;
        $book->subject = $request->subject;
        $book->description = $request->description;
        $book->save();
        return redirect()->route('land_page',['book'=>$book]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $books = Book::all();
        
        return view('admin.delete',['books'=>$books]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.edit',['book' => $book]);
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
        $book = Book::findOrFail($id);
        $path = Storage::putfile('public',$request->file('image'));
        $url = Storage::url($path);

        $book->title = $request->title;
        $book->price = $request->price;
        $book->image = $url;
        $book->subject = $request->subject;
        $book->author = $request->author;
        $book->pub_house = $request->pub_house;
        $book->description = $request->description;
        $book->update();

        return redirect()->route('land_page');
    }

    public function add_sell(Request $request, $id){
        $book = Book::findOrFail($id);
        $book->sells +=1;
        $book->update();
        return redirect()->route('land_page');
    }

    public function min_sell(Request $request, $id){
        $book = Book::findOrFail($id);
        $book->sells -=1;
        $book->update();
        return redirect()->route('land_page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('land_page');
    }

    public function search(Request $request){
        $search = $request->get('title');
        $books = DB::table('books')->where('title','like','%'.$search.'%')->paginate(6);
        return view('admin.search',['books'=>$books]);
    }

    public function messages(){
        $contacts = Contact::all();
        return view('admin.messages',['contacts'=> $contacts]);
    }

    public function delmsg(Request $request,$id){
        $message = Contact::findOrFail($id);
        $message->delete();
        return redirect()->route('messages');
    }

    public function showmsg(Request $request,$id){
        $message = Contact::findOrFail($id);
        return view('admin.messageshow',['message'=>$message]);
    }

    public function noregister(){
        return abort(404);
    }

}
