<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Brand extends Component
{
    public $myclass,$type,$message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($myclass,$type,$message)
    {
      $this->myclass = $myclass;
      $this->type = $type;
      $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'emon'
    <div class="{{ $myclass}} {{$type}}">
      {{$message}}
    </div>
   emon;
    }
}
