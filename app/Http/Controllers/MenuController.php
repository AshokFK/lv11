<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::paginate(10);
        return view("menus.index", compact("menus"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentMenus = Menu::whereNull('parent_id')->get();
        return view("menus.create", compact("parentMenus"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        Menu::create($request->all());
        // Alert::flash('success', 'Created successfully');
        return redirect()->route("menus.index");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        dd($menu);
        $parentMenus = Menu::whereNull('parent_id')->get();
        return view('menus.edit', compact('menu', 'parentMenus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update($request->all());

        // Alert::flash('success', 'Updated successfully');
        return redirect()->route('menus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        // Alert::flash('success', 'Deleted successfully');
        return redirect()->route('menus.index');
    }
}
