<?php

namespace App\Livewire\Job;

use Livewire\Component;
use Livewire\WithPagination;

class ListJobComponent extends Component
{
    use WithPagination;
    public string $search = '';
    public array $contractTypes = [];
    public string $selectedDomain = '';

    public function render()
    {
        $domains = \App\Models\Job::select('domain')->distinct()->pluck('domain')->toArray();
        $query = \App\Models\Job::query();

        if ($this->search !== '') {
            $query->where('job_title', 'LIKE', "%{$this->search}%")
                ->orWhere('location', 'LIKE', "%{$this->search}%");
        }

        if (!empty($this->contractTypes)) {
            $query->whereIn('type', $this->contractTypes);
        }

        if ($this->selectedDomain !== '') {
            $query->where('domain', $this->selectedDomain);
        }


        $jobs = $query->paginate(5);

        return view('livewire.job.list-job-component', ['jobs' => $jobs, 'domains' => $domains]);
    }
}
