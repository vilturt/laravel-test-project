<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

// document controller

class DocumentController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storeDocument(){

        $oneDocument = new Document();

        $oneDocument->title = request('titleOf');

        $oneDocument->user_id = auth()->user()->id;

        $oneDocument->save();

        return redirect('/home');

    }

    public function updateDocument(){

        // couldn't get this method to update, or touch() the updated_at timestamp

        // should have created an instance of model and update the variable to now() or...

        // ... call the touch() mathod so the below code isn't currently working - so it's commented out

        /*
        $titleOfThisDocument = Input::get('toUpdate');

        $current_timestamp = Carbon::now()->timestamp;

        $documentToUpdate = DB::table('documents')->select()->where('title', $titleOfThisDocument); //->update(['updated_at' => $current_timestamp]);



        $documentToUpdate->updated_at = Carbon::now();
        $documentToUpdate->save();
*/
        return redirect('/home');
    }

    public function deleteDocument() {

        // didn't have time to get this to work

        // should get instance of model and run delete-function

        // softdeletes-column is found inside database table

        return redirect('/home');
    }

// below functions were generated but weren't used...

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
