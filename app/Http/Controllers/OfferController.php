<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
//use Intervention\Image;
use Illuminate\Support\Facades\Storage;
use Image;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.offer.index',[
            'projects'=>  Offer::all()

            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $project = new Offer();
        $project -> offer_name = $request->input('offer_name');
        $project -> desc_offer = $request->input('desc_offer');
        $project -> price_per_offer = $request->input('price_per_offer');
        $project -> number_shares_offer = $request->input('number_shares_offer');
        $project -> end_date_offer = $request->input('end_date_offer');

        if ($request->hasFile('picture_offer')){
            $project -> picture_offer = $request ->file('picture_offer')->store('picture_offer','public');


//            \Intervention\Image\Facades\Image::make('picture_offer')->resize(300,300)->save(public_path('picture_offer/'));
        }
        $project->save();
        return redirect()->route('projects.index')->with('alert','Оффер успешно создан');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Offer $project)
    {
        return view('admin.offer.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $old_picture = null;
        $offer = $request->all();
        if ($request->hasFile('picture_offer'))
        {
            $offer -> picture_offer = $request ->file('picture_offer')->store('picture_offer','public');
        }


        $old_picture = $offer->picture_offer;


        if ($offer->picture_offer){
            Storage::delete("storage/'. $offer->picture_offer");
        }

        return redirect('')->route('offers.index')->with('Успешно обновлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $project
     * @return RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Offer $project)
    {
        if ($project->picture_offer){
            Storage::delete("storage/'. $project->picture_offer");
        }
        $project->delete();
        return redirect()->route('projects.index');
    }
}
