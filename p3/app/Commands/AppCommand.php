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
    { # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        //theres probably a neater way of doing this...
        function flipPenny() {
            $penny = ['heads', 'tails'];
            return $penny[rand(0,1)];
        }
        function PickAPick() {
            $penny = ['odd', 'even'];
            return $penny[rand(0,1)];
        }
    
        for ($i = 0; $i < 10; $i++) {
            $name = $faker->name;
            $Apick = PickAPick();
            $APenny = flipPenny();
            $BPenny = flipPenny();
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
            
            /*
            $round = [
                'move' => $moves[$randomMove],
                'move' => 'heads',
                'win' => rand(0,1),
                'win' => '1',
                'time' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
                'time' => '2020-12-7 11:48:03',
            ];
            */
    
        # Insert the round
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