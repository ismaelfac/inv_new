<?php

use Illuminate\Database\Seeder;
use App\RegisterPanel;

class RegisterPanelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();
            //obtengo los permisos
            RegisterPanel::create([
                'rol_id' => 1,
                'message_count' => '40',
                'recommended_properties_count' => '2',
                'ads_count' => '8',
                'properties_count' => '20',
                'state' => true
            ]);
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

    }
}
