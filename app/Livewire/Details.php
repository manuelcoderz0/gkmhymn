<?php

namespace App\Livewire;

use App\Models\Hymn;
use App\Models\Pref;
use Livewire\Component;

class Details extends Component {
    public $hymn, $theme;

    public function mount(Hymn $hymn) {
        $this->hymn = $hymn;
        $this->theme = setting('theme');
    }

    public function save($theme) {
        info('theme', [$theme]);

        Pref::where('key', 'theme')->update([
            'value' => $theme,
        ]);
    }

    public function render() {
        $title  = $this->hymn->title;

        return view('details', compact('title'))->title($title);
    }
}
