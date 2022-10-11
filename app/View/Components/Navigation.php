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
                [
                    'type' => 'label',
                    'key'  => 'FEATURE'
                ],
                [
                    'type'  => 'dropdown',
                    'key'   => 'Transaksi',
                    'name'  => 'transaksi',
                    'icon'  => 'fas fa-chart-column',
                    'childs' => [
                        [
                            'key'   => 'Penjualan',
                            'name'  => 'penjualan',
                            'icon'  => 'fas fa-cash-register',
                            'route' => route('admin.dashboard')
                        ],
                        [
                            'key'   => 'Pembelian',
                            'name'  => 'pembelian',
                            'icon'  => 'fas fa-chart-simple',
                            'route' => route('admin.dashboard')
                        ],
                        [
                            'key'   => 'Persediaan',
                            'name'  => 'persediaan',
                            'icon'  => 'fas fa-boxes-stacked',
                            'route' => route('admin.dashboard')
                        ],
                    ]
                ],
                [
                    'type'  => 'dropdown',
                    'key'   => 'Keuangan',
                    'name'  => 'keuangan',
                    'icon'  => 'fas fa-wallet',
                    'childs' => [
                        [
                            'key'   => 'Penggajian',
                            'name'  => 'penggajian',
                            'icon'  => 'fas fa-money-bill-trend-up',
                            'route' => route('admin.dashboard')
                        ],
                        [
                            'key'   => 'Tabungan',
                            'name'  => 'tabungan',
                            'icon'  => 'fas fa-piggy-bank',
                            'route' => route('admin.dashboard')
                        ],
                    ]
                ],
                [
                    'key'   => 'Pengumuman',
                    'name'  => 'pengumuman',
                    'icon'  => 'fas fa-bullhorn',
                    'route' => route('admin.dashboard')
                ],
                [
                    'type' => 'label',
                    'key'  => 'MASTER'
                ],
                [
                    'key'   => 'Cabang',
                    'name'  => 'cabang',
                    'icon'  => 'fas fa-store',
                    'route' => route('admin.cabang.index')
                ],
                [
                    'type'  => 'dropdown',
                    'key'   => 'Kepegawaian',
                    'name'  => 'kepegawaian',
                    'icon'  => 'fas fa-users-gear',
                    'childs' => [
                        [
                            'key'   => 'Hak Akses',
                            'name'  => 'privilege',
                            'icon'  => 'fas fa-users-rectangle',
                            'route' => route('admin.dashboard')
                        ],
                        [
                            'key'   => 'Pegawai',
                            'name'  => 'pegawai',
                            'icon'  => 'fas fa-users',
                            'route' => route('admin.dashboard')
                        ],
                    ]
                ],
                [
                    'type'  => 'dropdown',
                    'key'   => 'Catalog',
                    'name'  => 'catalog',
                    'icon'  => 'fas fa-bowl-rice',
                    'childs' => [
                        [
                            'key'   => 'Persediaan',
                            'name'  => 'persediaan',
                            'icon'  => 'fas fa-stairs',
                            'route' => route('admin.dashboard')
                        ],
                        [
                            'key'   => 'Category',
                            'name'  => 'category',
                            'icon'  => 'fas fa-cubes-stacked',
                            'route' => route('admin.dashboard')
                        ],
                        [
                            'key'   => 'Menu',
                            'name'  => 'menu',
                            'icon'  => 'fas fa-clipboard-list',
                            'route' => route('admin.dashboard')
                        ],
                    ]
                ],
                
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
