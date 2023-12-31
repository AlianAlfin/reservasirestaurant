<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        $tables = Table::all();
        $maxGuestNumber = $tables->max('guestNumber');
        // $earliestTime = Carbon::createFromTimeString('00:00:00');
        // $lastTime = Carbon::createFromTimeString('16:59:00');
        // $last = Carbon::createFromTimeString('19:59:00');
        return view('reservations.step-one', compact('reservation', 'min_date', 'max_date', 'tables', 'maxGuestNumber'));
    }

    public function StoreStepOne(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'telp' => ['required'],
            'reservation_date' => ['required', 'date', new DateBetween],
            'reservation_time' => ['required'],
            'guestNumber' => ['required'],
        ]);

        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }

        return to_route('reservations.step.two');
    }

    public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $res_table_ids = Reservation::orderBy('reservation_time')->get()->filter(function ($value) use ($reservation) {
            return $value->reservation_time == $reservation->reservation_time && $value->reservation_date == $reservation->reservation_date;
        })->pluck('table_id');

        $tables = Table::where('status', TableStatus::Avaliable)->where('guestNumber', '>=', $reservation->guestNumber)
            ->whereNotIn('id', $res_table_ids)->get();
        return view('reservations.step-two', compact('reservation', 'tables'));
    }

    public function storeStepTwo(Request $request)
    {
        $validated = $request->validate([
            'table_id' => ['required']
        ]);
        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');

        Alert::success('Success Book Table');
        return to_route('reservations.step.one');
    }
}
