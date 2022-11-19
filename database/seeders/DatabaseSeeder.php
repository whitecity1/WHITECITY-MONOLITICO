<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Servicio;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        // \App\Models\User::factory(10)->create();
              
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
  
        $this->call(tipo_personaSeeder::class);
  
        $this->call(Rutas_TuristicasSeeder::class);
        $this->call(RutasaccesoSeeder::class);
        $user=new User;
            $user->nombres ='Tatiana';
            $user-> apellidos = 'Salamanca Erazo';
            $user->documento ='1061686280';
            $user->direccion = 'Cra 39 #17-02';
            $user->telefono ='3053331932';
            $user->email ='salamanca@gmail.com';
            $user->password = '12345';
            $user->tipo_persona_id = ('2');
            $user->notificacion_id= ('2');
            $user->save();

            $user=new User;
            $user->nombres ='Nathalia';
            $user-> apellidos = 'Alvarado';
            $user->documento ='1002807969';
            $user->direccion = 'Cra 3 #10-16';
            $user->telefono ='3128602469';
            $user->email ='nathalia@gmail.com';
            $user->password ='12345';
            $user->tipo_persona_id = ('2');
            $user->notificacion_id= ('2');
            $user->save();

       $this->call(PuntosAtencionSeeder::class);
       $this->call(EventosSeeder::class);
       $this->call(HotelSeeder::class);
       $this->call(FotografiaSeeder::class);
       $this->call(EstacionSeeder::class);
       $this->call(TipoConvenioSeeder::class);
       $this->call(ComentarioSeeder::class);
       $this->call(CcomercialSeeder::class);
       $this->call(AutoridadSeeder::class);
       $this->call(RecomendadoSeeder::class);
       $this->call(RestauranteSeeder::class);
       $this->call(ConvenioSeeder::class);
       $this->call(LugarturisticoSeeder::class);

        }
    

    }

