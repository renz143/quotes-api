<?php

namespace App\Http\Controllers;
use App\Models\Quotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuotesController extends Controller {
    public function index() {
        $quotes_count = DB::table('quotes_table')->count();
        $quotes = Quotes::findOrFail(rand(1,$quotes_count));
        return response()->json($quotes);
    }
    public function show($id) {
        $quotes = Quotes::find($id);
        return response()->json($quotes);
    }
    public function create(Request $request) {
        $quotes = new Quotes();

        $quotes->content = $request->content;
        $quotes->author = $request->author;

        $quotes->save();

        return response()->json("Quotes created successfully!");
    }
    public function update(Request $request, $id) {
        $quotes = Quotes::find($id);

        $quotes->content = $request->content;
        $quotes->author = $request->author;

        $quotes->save();

        return response()->json($quotes);
    }
    public function delete($id) {
        $quotes = Quotes::find($id);
        $quotes->delete();

        return response()->json('Quotes Successfully deleted');
    }
}
