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

        $section_data = [];
        $content_data = [];

        for ($p = 0; $p < count($post_data); $p++) {
            $section_data[] = DB::table('sections')
                ->select('sections.*')
                ->where('sections.post_id', '=', $post_data[$p]->id)
                ->get();
        }

        for ($p = 0; $p < count($post_data); $p++) {
            for ($s = 0; $s < count($section_data[$p]); $s++) {
                $content_data[] = DB::table('contents')
                    ->join('sections', 'contents.section_id', '=', 'sections.id')
                    ->select('contents.*')
                    ->where([
                        ['sections.post_id', '=', $post_data[$p]->id],
                        ['contents.section_id', '=', $section_data[$p][$s]->id],
                    ])->get();
            }
        }

        return view('week', [
            'week_data' => $week_data,
            'post_data' => $post_data,
            'section_data' => $section_data,
            'content_data' => $content_data,
        ]);
    }
}
