<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    public $menus;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = auth()->user();

        $this->menus = [
            [
                 'type' => 'label',
                 'key'  => 'HIGHLIGHT'
            ]
        ];

        // if ($user->hasRole($user->accountRoles[0])) {
            $this->menus = array_merge($this->menus, [
                [
                    'key'   => 'Dashboard',
                    'name'  => 'dashboard',
                    'icon'  => 'fas fa-fire-flame-curved',
                    'route' => route('admin.dashboard')
                ],
                // [
                //     'key'   => 'Candidate',
                //     'name'  => 'candidate',
                //     'icon'  => 'fas fa-users',
                //     'route' => route('admin.candidate.index')
                // ],
            ]);
        // }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation');
    }
}
