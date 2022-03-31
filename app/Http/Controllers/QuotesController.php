<?php

namespace App\Http\Controllers;
use App\Models\Quotes;
use Illuminate\Http\Request;;

class QuotesController extends Controller {
    public function index() {
        $quotes = Quotes::all();
        return response()->json($quotes);
    }
    public function show($id) {
        $quotes = Quotes::find($id);
        return response()->json($quotes);
    }
    public function create(Request $request) {
        $quotes = new Quotes();

        $quotes->author = $request->author;
        $quotes->title = $request->title;
        $quotes->image = $request->image;

        $quotes->save();

        return response()->json("Quotes created successfully!");
    }
    public function update(Request $request, $id) {
        $quotes = Quotes::find($id);

        $quotes->author = $request->author;
        $quotes->title = $request->title;
        $quotes->image = $request->image;

        $quotes->save();

        return response()->json($quotes);
    }
    public function delete($id) {
        $quotes = Quotes::find($id);
        $quotes->delete();

        return response()->json('Quotes Successfully deleted');
    }
}
