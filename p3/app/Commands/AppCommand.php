<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'Apick' => 'varchar(255)',
            'Bpick' => 'varchar(255)',
            'APenny' => 'varchar(255)',
            'BPenny' => 'varchar(255)',
            'result' => 'varchar(255)',
            'winner' => 'varchar(255)',
            'time' => 'timestamp',
            //'available' => 'int',
            //'weight' => 'decimal(10,2)',
            //'perishable' => 'tinyint(1)'
        ]);
        dump('Table created');
    }
    
    public function seed()
    { # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();
    
        # Use a loop to create 10 past rounds
        for ($i = 0; $i < 10; $i++) {
            /*

            $moves = ['heads', 'tails'];
            $randomMove = array_rand($moves);
            */
    
            # Set up a round
            
            $round = [
                'Apick' => 'odd',
                'Bpick' => 'even',
                'APenny' => 'heads',
                'BPenny' => 'heads',
                'result' => 'even',
                'winner' => 'Player B',
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