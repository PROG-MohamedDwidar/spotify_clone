<?php

namespace App\View\Components\playlists;

use Illuminate\View\Component;

class carousel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $playlists;

    public function __construct($playlists)
    {
        $this->playlists=$playlists;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.playlists.carousel');
    }
}
