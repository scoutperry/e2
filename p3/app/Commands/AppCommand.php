<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'name' => 'varchar(255)',
            'aPick' => 'varchar(255)',
            'bPick' => 'varchar(255)',
            'aPenny' => 'varchar(255)',
            'bPenny' => 'varchar(255)',
            'result' => 'varchar(255)',
            'winner' => 'varchar(255)',
            'time' => 'timestamp',
        ]);
        dump('Table created');
    }
    
    public function seed()
    {
        $faker = \Faker\Factory::create();
        
        function pickAGoober($string,$anotherString) {
            $goober = [$string, $anotherString];
            return $goober[rand(0,1)];
        }     
    
        for ($i = 0; $i < 10; $i++) {
            $name = $faker->name;
            $aPick = pickAGoober('odd','even');
            $aPenny = pickAGoober('heads','tails');
            $bPenny = pickAGoober('heads','tails');
            $result = ($aPenny == $bPenny) ? 'even' : 'odd';
                
            $round = [
                'name' => $name,
                'aPick' => $aPick,
                'bPick' => ($aPick == 'odd') ? 'even' : 'odd',
                'aPenny' => $aPenny,
                'bPenny' => $bPenny,
                'result' => $result,
                'winner' => ($result == $aPick) ? $name : 'Player B',
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