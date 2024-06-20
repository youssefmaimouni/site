<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Requests\SiteRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function index()
    {
        return View('welcome', [
            'site' => DB::table('sites')->paginate(8),
        ]);
    }
    public function store(SiteRequest $request)
    {
        $site = new Site();
        $site->lien = $request->lien;
        $site->titre = $request->titre;
        $site->description = $request->description;
        if ($request->file('logo') != null) {
            $site->logo =  $request->file('logo')->store('logos', 'public');
        }
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
