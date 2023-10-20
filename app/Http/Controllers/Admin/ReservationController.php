<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tables = Table::where('status', TableStatus::Avaliable)->get();
        return view('admin.reservations.create', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guestNumber > $table->guestNumber) {
            return back()->with('warning', 'Please Choose Table base on guest');
        }

        $request_date = Carbon::parse($request->reservation_date);
        foreach ($table->reservations as $res) {
            if ($res->reservation_date) {
                return back()->with('warning', 'This table is reserved for this date');
            }
        }

        Reservation::create($request->validated());

        return to_route('Admin.reservations.index')->with('success', 'Success create data');
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
    public function edit(Reservation $reservation)
    {
        $tables = Table::where('status', TableStatus::Avaliable)->get();
        return view('admin.reservations.edit', compact('reservation', 'tables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guestNumber > $table->guestNumber) {
            return back()->with('warning', 'Please Choose Table base on guest');
        }

        // $request_date = Carbon::parse($request->reservation_date);
        $reservations = $table->reservations()->where('id', '!=', $reservation->id)->get();
        foreach ($reservations as $res) {
            if ($res->reservation_date) {
                return back()->with('warning', 'This table is reserved for this date');
            }
        }

        $reservation->update($request->validated());
        return to_route('Admin.reservations.index')->with('success', 'Success update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return to_route('Admin.reservations.index')->with('danger', 'Success delete data');
    }
}