<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Week;
use DB;

class WeekController extends Controller
{
    public function show($week_number)
    {
        $week_data = DB::table('weeks')
            ->where('weeks.id', '=', $week_number)
            ->get();
        
        $post_data = DB::table('posts')
            ->select('posts.*')
            ->where('posts.week_id', '=', $week_number)
            ->get();

        $section_data;
        $content_data;

        foreach ($post_data as $post) {
            $section_data = DB::table('sections')
                ->select('sections.*')
                ->where('sections.post_id', '=', $post->id)
                ->get();
        }

        foreach ($section_data as $section) {
            $content_data = DB::table('contents')
                ->select('contents.*')
                ->where('contents.section_id', '=', $section->id)
                ->get();
        }

        return view('week', [
            'week_data' => $week_data,
            'post_data' => $post_data,
            'section_data' => $section_data,
            'content_data' => $content_data,
        ]);
    }
}
