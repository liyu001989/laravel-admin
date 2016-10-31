<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use Illuminate\Auth\AuthManager;

class AdminComposer
{
    protected $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function compose(View $view)
    {
        $view->with('admin', $this->auth->user());
    }
}
