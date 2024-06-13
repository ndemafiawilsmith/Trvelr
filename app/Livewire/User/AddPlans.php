<?php

namespace App\Livewire\User;

use App\Models\country;
use App\Models\itinerarie;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AddPlans extends Component
{
    public $country;
    public $budget;
    public $title;
    public $start_date;
    public $end_date;
    public $remark;
    public $travelCompanion;
    public $step = 1;
    public $loading = false;


    // Real-time validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
    }


    #[Layout('layouts.dashboard')]
    public function render()
    {
        $countries = country::all();
        return view('livewire.user.add-plans', with(compact('countries')));
    }

    // protected $rules = [
    //     'title' => 'required|min:3|max:255',
    //     'budget' => 'required|numeric',
    //     'remark' => 'required',
    // ];

    public function addTitle()
    {
        $this->validate([
            'title' => 'required|min:3|max:255',
        ]);
        $this->step += 1;
    }

    public function addBudget()
    {
        $this->validate([
            'budget' => 'required|numeric',
        ]);
        $this->step += 1;
    }

    public function addRemark()
    {
        $this->validate([
            'remark' => 'required',
        ]);
        $this->step += 1;
    }

    public function addDate()
    {
        $this->validate([
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        $this->step += 1;
    }

    public function updatePlan($function, $value)
    {
        if ($function == 'country') {
            $this->country = $value;
            $this->step += 1;
        }
    }

    public function Submit()
    {

        $itinerary = new itinerarie();

        // Assign values from the dump (replace with actual properties from your component)
        $itinerary->user_id = Auth::user()->id;
        $itinerary->destination = $this->country;
        $itinerary->title = $this->title;
        $itinerary->start_date = $this->start_date;
        $itinerary->end_date = $this->end_date;
        $itinerary->budget = $this->budget;
        $itinerary->remark = $this->remark;
        $itinerary->status = 'start';

        // Save the itinerary
        $itinerary->save();

        $this->loading = true;

        return redirect(route('compute', ['id' => $itinerary->id]));
    }

    public function next()
    {
        $this->step += 1;
    }

    public function prev()
    {
        $this->step -= 1;
    }
}
