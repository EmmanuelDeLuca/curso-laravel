<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {   
        $search = request('search');
        if ($search) {
            
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $events = Event::all();
        }

        

        return view('welcome',['events'=> $events, 'search' => $search]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->description = $request->description;
        $event->private = $request->private;

        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso!');

    }

    public function show($id) {

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}
