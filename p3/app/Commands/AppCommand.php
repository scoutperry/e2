<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'name' => 'varchar(255)',
            'Apick' => 'varchar(255)',
            'Bpick' => 'varchar(255)',
            'APenny' => 'varchar(255)',
            'BPenny' => 'varchar(255)',
            'result' => 'varchar(255)',
            'winner' => 'varchar(255)',
            'time' => 'timestamp',
        ]);
        dump('Table created');
    }
    
    public function seed()
    {
        $faker = \Faker\Factory::create();
        
        function PickAGoober($string,$anotherString) {
            $goober = [$string, $anotherString];
            return $goober[rand(0,1)];
        }     
    
        for ($i = 0; $i < 10; $i++) {
            $name = $faker->name;
            $Apick = PickAGoober('odd','even');
            $APenny = PickAGoober('heads','tails');
            $BPenny = PickAGoober('heads','tails');
            $result = ($APenny == $BPenny) ? "even" : "odd";
                
            $round = [
                'name' => $name,
                'Apick' => $Apick,
                'Bpick' => ($Apick == 'odd') ? 'even' : 'odd',
                'APenny' => $APenny,
                'BPenny' => $BPenny,
                'result' => $result,
                'winner' => ($result == $Apick) ? $name : "Player B",
                'time' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),

            ];
    
        $this->app->db()->insert('rounds', $round);
        }
        dump('rounds table seeded');
    }

    public function fresh()
    {   
        $this->migrate();
        $this->seed();

        dump('Seeding complete; check the database for your new data.');
    }

}