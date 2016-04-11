<?php

namespace Multiversum\Http\ViewComposers;

use Auth;
use Illuminate\View\View;

class GlobalComposer
{
    public function compose(View $view)
    {
        $view->with('user', Auth::user());
    }
}
