<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteRequest;
use App\Models\Site;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function index()
    {
        $site = Site::all();
        return View('welcome', [
            'site' => $site,
        ]);
    }
    public function store(SiteRequest $request)
    {
        $site = new Site();
        $site->lien = $request->lien;
        $site->titre = $request->titre;
        $site->description = $request->description;
        $site->logo = $request->file('logo')->store('logos', 'public');
        $site->save();
        return redirect('/')->with('success', 'Site created successfully');
    }


    function site_create()
    {
        return View('creat_site');
    }
    function update(SiteRequest $request, Site $site)
    {
        $site->lien = $request->lien;
        $site->logo = $request->logo;
        $site->titre = $request->titre;
        $site->description = $request->description;
        $site->save();
        return redirect('/')->with('success', 'Site updated successfully');
    }

    function delete(Site $site)
    {
        $site->delete();
        return redirect('/')->with('success', 'Site deleted successfully');
    }
}
