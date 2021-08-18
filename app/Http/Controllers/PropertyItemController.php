<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PropertyItem;
use Illuminate\Http\Request;

class PropertyItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties=PropertyItem::all();
        dd($properties[0]->property);
        return view('backend.admin',['propertyitems'=>$properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['name_am']=$request->name_am;
        $data['name_en']=$request->name_en;

        $propertyitem = new PropertyItem($data);
        $propertyitem->save();
        return $propertyitem;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $propertyitem = PropertyItem::find($id);
        $propertyitem['name_am']=$request->name_am;
        $propertyitem['name_en']=$request->name_en;

        $propertyitem->save();
        return $propertyitem;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propertyitem = PropertyItem::find($id);
        $propertyitem->delete();
    }
}
