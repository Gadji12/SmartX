<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\UserProduct;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = UserProduct::all();
        return view('user.product.index',[
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
       return view('user.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $product = new UserProduct();
        $product -> user_offer_name = $request->input('user_offer_name');
        $product -> user_desc_offer = $request->input('user_desc_offer');
        $product -> user_price_per_offer = $request->input('user_price_per_offer');
        $product -> user_number_shares_offer = $request->input('user_number_shares_offer');
        $product -> user_end_date_offer = $request->input('user_end_date_offer');

        if ($request->hasFile('user_picture_offer')){
            $product -> user_picture_offer = $request ->file('user_picture_offer')->store('user_picture_offer','public');


//            \Intervention\Image\Facades\Image::make('picture_offer')->resize(300,300)->save(public_path('picture_offer/'));
        }
        $product->save();
        return redirect()->route('products.index')->with('alert','Оффер успешно создан');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(UserProduct $product)
    {
        return view('user.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
