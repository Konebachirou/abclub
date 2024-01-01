<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;
    public string $search = '';

    public function searchEvent()
    {
        $query = \App\Models\Event::query();
        if ($this->search !== '') {
            $query->where('title', 'LIKE', "%{$this->search}%");
            return $events = $query->paginate(4);
        } else {
            return $events = [];
        }
    }

    public function searchRepport()
    {
        $query = \App\Models\Report::query();
        if ($this->search !== '') {
            $query->where('title', 'LIKE', "%{$this->search}%");
            return $report = $query->paginate(4);
        } else {
            return $report = [];
        }
    }

    public function render()
    {
        return view('livewire.component.search-component', ['events' => $this->searchEvent(), 'reports' => $this->searchRepport()]);
    }
}
