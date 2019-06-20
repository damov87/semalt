<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Event;

class EventsController extends Controller
{
    public function task3()
    {
        $events = DB::table('events')
        	->select('caption')
        	->leftJoin('bids', 'events.id', '=', 'bids.id_event')
        	->whereNull('bids.id_event')
            ->get();

        return view('events.index', compact('events'));
    }

    public function task4()
    {
        $events = DB::table('events')
        	->select('caption', DB::raw('COUNT(*) as cnt'))
        	->join('bids', 'events.id', '=', 'bids.id_event')
            ->groupBy('bids.id_event')
            ->havingRaw('COUNT(*) > 3')
            ->get();

        return view('events.index', compact('events'));
    }

    public function task5()
    {
        $events = DB::table('events')
        	->select('caption', DB::raw('COUNT(*) as cnt'))
        	->join('bids', 'events.id', '=', 'bids.id_event')
            ->orderBy('cnt', 'DESC')
            ->groupBy('bids.id_event')
            ->limit(1)
            ->get();

        return view('events.index', compact('events'));
    }
}
