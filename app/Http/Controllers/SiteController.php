<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Requests\SiteRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\categorier;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function index()
    {
        return View('welcome', [
            'site' => Site::paginate(8),
            'categorier' => categorier::all()
        ]);
    }
    public function site($id)
    {
        $sites = Site::where('id_cat', $id)->paginate(10);
        $category=categorier::where('id',$id)->first();;
        if (!$category) {
            return abort(404);
        }
        return view('welcome', [
            'site' => $sites,
            'categorier' => categorier::all(),
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
        if ($request->categorier == -1) {
            $category = new categorier();
            $category->categorier = strtolower($request->new_cat);
            $category->save();
            $site->id_cat = $category->id;
        } else {
            $site->id_cat =  $request->categorier;
        }
        $site->save();
        return redirect('/')->with('success', 'Site created successfully');
    }


    function site_create()
    {
        return View('creat_site', ['categorier' => categorier::all()]);
    }
    function site_update(Site $site)
    {
        return View('update_site', [
            'site' => $site,
            'categorier' => categorier::all()
        ]);
    }
    function update(SiteRequest $request, Site $site)
    {
        $site->lien = $request->lien;
        $site->titre = $request->titre;
        $site->description = $request->description;
        if ($request->file('logo') != null) {
            $site->logo =  $request->file('logo')->store('logos', 'public');
        }
        if ($request->categorier == -1) {
            $category = new categorier();
            $category->categorier = strtolower($request->new_cat);
            $category->save();
            $site->id_cat = $category->id;
        } else {
            $site->id_cat =  $request->categorier;
        }
        $site->save();
        return redirect('/')->with('success', 'Site updated successfully');
    }

    function delete(Site $site)
    {
        $site->delete();
        return redirect('/')->with('success', 'Site deleted successfully');
    }
}
