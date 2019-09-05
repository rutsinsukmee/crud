<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Newcalendar;
use Illuminate\Http\Request;

class NewcalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $newcalendar = Newcalendar::where('appointment', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('time', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $newcalendar = Newcalendar::latest()->paginate($perPage);
        }

        return view('newcalendar.index', compact('newcalendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('newcalendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Newcalendar::create($requestData);

        return redirect('newcalendar')->with('flash_message', 'Newcalendar added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $newcalendar = Newcalendar::findOrFail($id);

        return view('newcalendar.show', compact('newcalendar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $newcalendar = Newcalendar::findOrFail($id);

        return view('newcalendar.edit', compact('newcalendar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $newcalendar = Newcalendar::findOrFail($id);
        $newcalendar->update($requestData);

        return redirect('newcalendar')->with('flash_message', 'Newcalendar updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Newcalendar::destroy($id);

        return redirect('newcalendar')->with('flash_message', 'Newcalendar deleted!');
    }
}
