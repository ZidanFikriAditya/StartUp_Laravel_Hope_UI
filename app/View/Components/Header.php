<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $show;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $show = 'false',
        $text = ''
    )
    {
        $this->text = $text;
        $this->show = $show;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
