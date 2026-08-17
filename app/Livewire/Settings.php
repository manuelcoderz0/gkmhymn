<?php

namespace App\Livewire;

use App\Models\Pref;
use Livewire\Component;

class Settings extends Component {

    public array $form;

    public function mount() {
        $this->form = [
            'font'  => setting('font'),
        ];
    }

    public function save() {
        foreach ($this->form as $key => $value) {
            Pref::where('key', $key)->update([
                'value' => $value,
            ]);
        }
    }

    public function render() {
        $title  = __('Preferences');

        return view('settings', compact('title'))->title($title);
    }
}
