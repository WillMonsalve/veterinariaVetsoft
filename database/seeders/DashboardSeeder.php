<?php

namespace Database\Seeders;

use App\Models\Dashboard;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            array('mes'=>'Enero','cantidad'=>20),
            array('mes'=>'Febrero','cantidad'=>34),
            array('mes'=>'Marzo','cantidad'=>27),
            array('mes'=>'Abril','cantidad'=>34),
            array('mes'=>'Mayo','cantidad'=>36),
            array('mes'=>'Junio','cantidad'=>21),
            array('mes'=>'Julio','cantidad'=>20),
            array('mes'=>'Agosto','cantidad'=>39),
        ];
        Dashboard::insert($data);
    }
}
