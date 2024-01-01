<?php

namespace App\Livewire\Component;

use App\Models\Partner;
use Livewire\Component;

class PartnerComponent extends Component
{
    public function render()
    {
        $partners = Partner::where('pole_id', null)->get();
        return view('livewire.component.partner-component', ['partners' => $partners]);
    }
}
