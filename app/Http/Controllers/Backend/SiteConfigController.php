<?php

namespace App\Http\Controllers\Backend;

use App\Models\SiteConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SiteConfigStore;
use RealRashid\SweetAlert\Facades\Alert;
class SiteConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteconfig = SiteConfig::first();
        return view('backend.siteconfig.index', compact('siteconfig'));
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
    public function store(SiteConfigStore $request)
    {
        $request->storeSiteConfig();
        Alert::success('Success', 'Site Config Data Inserted Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteConfig  $siteConfig
     * @return \Illuminate\Http\Response
     */
    public function show(SiteConfig $siteConfig)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteConfig  $siteConfig
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteConfig $siteConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteConfig  $siteConfig
     * @return \Illuminate\Http\Response
     */
    public function update(SiteConfigStore $request, SiteConfig $siteConfig)
    {
        $request->updateSiteConfig($siteConfig);
        Alert::success('Success', 'Site Config Data Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteConfig  $siteConfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteConfig $siteConfig)
    {
        //
    }
}
