<?php 

namespace Thoughtco\Scaffold;

use System\Classes\BaseExtension;

/**
 * Choose Time Extension Information File
 */
class Extension extends BaseExtension
{
    public function boot()
    {   
    }
    
    public function registerNavigation()
    {
        return [
            'sales' => [
                'child' => [
                    'scaffold' => [
                        'priority' => 10,
                        'class' => 'pages',
                        'href' => admin_url('thoughtco/scaffold/test'),
                        'title' => 'Scaffold'
                        //'permission' => 'Thoughtco.KitchenDisplay.View',
                    ],
                ],
            ],
        ];
    }
}