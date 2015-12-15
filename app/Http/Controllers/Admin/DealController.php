<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Partner;
use App\Model\Deal;
use App\Model\Category;


class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.deal.index')
            ->with("deals", Deal::all()->forPage(0,20));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.deal.create')
            ->with('partners', $this->getDropboxOfPartners())
            ->with('categories', $this->getDropboxOfCategories());
    }

    private function getDropboxOfPartners(){
        $partners = Partner::all();
        $map = [];
        foreach ($partners as $partner) {
            $map[$partner->id] = $partner->company_name;
        }
        return $map;
    }

    private function getDropboxOfCategories(){
        $categories = Category::all();
        $map = [];
        foreach ($categories as $category) {
            $map[$category->id] = $category->name;
        }
        return $map;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Deal::create($request->all());
        return redirect("/admin/deals");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Deal::where('id', $id)->get()->first()->images();
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
        Deal::destroy($id);
        return redirect('/admin/deals');
    }
}
