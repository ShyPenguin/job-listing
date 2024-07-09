<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request) {

        $query = $request->q;
        $jobs = Job::query()
            ->where('title', 'LIKE', '%'. $query .'%')
            ->with(['employer', 'tags'])
            ->get();

        return view('components.results', ['jobs' => $jobs]);
    }
}
