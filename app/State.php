<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    public function getStatesForDropdown() {

        $states = \App\State::orderby('id','ASC')->get();

        $states_for_dropdown = [];
        foreach ($states as $state) {
            $states_for_dropdown[$state->id] = $state->name;
        }

        return $states_for_dropdown;

    }
}
