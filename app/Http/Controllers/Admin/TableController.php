<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables = Table::all();
        return view('admin.tables.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tables.create');
    }


    public function store(TableStoreRequest $request)
    {
        $image = $request->file('image')->store('public/tables');

        Table::create([
            'name' => $request->name,
            'guestNumber' => $request->guestNumber,
            'status' => $request->status,
            'location' => $request->location,
            'image' => $image
        ]);

        return to_route('Admin.tables.index')->with('success', 'Success create data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table)
    {
        return view('admin.tables.edit', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        $image = $table->image;
        if ($request->hasFile('image')) {
            Storage::delete($table->image);
            $image = $request->file('image')->store('public/tables');
        }

        $request->validate([
            'name' => 'required',
            'guestNumber' => 'required',
            'status' => 'required',
            'location' => 'required',
        ]);

        $table->update([
            'name' => $request->name,
            'guestNumber' => $request->guestNumber,
            'status' => $request->status,
            'location' => $request->location,
            'image' => $image
        ]);
        return to_route('Admin.tables.index')->with('success', 'Success update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        Storage::delete($table->image);
        $table->delete();

        return to_route('Admin.tables.index')->with('danger', 'Success delete data');
    }
}