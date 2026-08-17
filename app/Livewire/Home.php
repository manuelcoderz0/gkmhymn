<?php

namespace App\Livewire;

use App\Models\Hymn;
use App\Models\Pref;
use Livewire\Component;

class Home extends Component {

    public $search = '', $filter = 'all', $theme;

    public function mount() {
        $this->theme = setting('theme', 'light');
    }

    public function save($theme) {
        info('theme', [$theme]);

        Pref::where('key', 'theme')->update([
            'value' => $theme,
        ]);
    }

    public function set_filter($filter) {
        $this->filter = $filter;
    }

    public function render() {

        $title  = __('Home');

        $query  = Hymn::query();

        if ($this->filter === 'fav') {
            $query->where('fav', 1);
        } elseif ($this->filter === 'sav') {
            $query->where('sav', 1);
        } elseif ($this->filter === 'spe') {
            $query->where('spe', 1);
        }

        $query->where('title', 'like', '%' . $this->search . '%');

        $hymns = $query->get();

        return view('home', compact('title', 'hymns'))->title($title);
    }
}
