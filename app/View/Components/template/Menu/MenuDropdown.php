<?php

namespace App\View\Components\Template\Menu;

use Illuminate\View\Component;

class MenuDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $url;
    public $title;
    public $active;
    // public $show;
    public function __construct(
        $url,
        $title
        // $show
    ) {
        $this->url = $url;
        $this->title = $title;
        // $this->show = $show;
        $this->active = $this->checkActive();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */

    public function checkActive()
    {
        $state = true;
        $url = $this->url;
        $arr_url = explode('/', $url);
        foreach ($arr_url as $key => $value) {
            $segment = request()->segment($key + 1);
            if ($segment != $value) $state = false;
        }
        return $state;
    }
    public function render()
    {
        return view('components.template.menu.menu-dropdown');
    }
}
