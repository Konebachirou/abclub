<?php

namespace App\Livewire\Component;

use App\Models\Partner;
use Livewire\Component;

class AmidPartnerComponent extends Component
{
    public function render()
    {
        $partners = Partner::withPoleName('Pôle AMID')->orderBy('id', 'desc')->get();
        
        return view('livewire.component.amid-partner-component', ['partners' => $partners]);
    }
}
