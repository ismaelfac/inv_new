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
            $permissions = RegisterPanel::getSessionClient('parameters');
            if ($permissions) {
                RegisterPanel::create([
                    'name' => 'Administrador',
                    'slug' => 'administrador',
                    'description' => 'Acceso total al sistema',
                    'special' => 'all-access'
                ]);
            }
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

    }
}
