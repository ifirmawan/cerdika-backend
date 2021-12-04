<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\Models\Question;
use App\Http\Requests\SurveyStore;

class CerdikaApiController extends Controller
{
    public function index(Request $request, Page $pages)
    {
        return response()->success($pages->all());
    }

    public function questions(Request $request, Question $questions)
    {
        return response()->success($questions->all());
    }

    public function survey(SurveyStore $request)
    {
        $request->user()->submissions()->createMany($request->get('submit'));
        return response()->success($request->user()->load(['membership','submissions']));
    }
}
