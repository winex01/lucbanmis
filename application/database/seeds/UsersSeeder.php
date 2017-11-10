<?php

class UsersSeeder extends Seeder {

    private $table = 'users';

    public function run() {
        $this->db->query('SET FOREIGN_KEY_CHECKS = 0;');
        $this->db->truncate($this->table);
        $this->db->query('SET FOREIGN_KEY_CHECKS = 1;');

        $limit = 1;
        //seed records manually
        $constData = [
            array(
                'first_name' => 'Administrator',
                'username' => 'admin',
                'password' => md5('password'),
                'group_id' => 1
            ),
            array(
                'first_name' => 'Registrar',
                'username' => 'registrar',
                'password' => md5('password'),
                'group_id' => 4
            ),
            array(
                'first_name' => 'Encoder',
                'username' => 'encoder',
                'password' => md5('password'),
                'group_id' => 3
            ),
            array(
                'first_name' => 'Cashier',
                'username' => 'cashier',
                'password' => md5('password'),
                'group_id' => 2
            ),

        ];
        
        foreach ($constData as $user) {
            $this->db->insert($this->table, $user);
            $limit++;
        }

        // dummy accounts
        $limit = 96;
        for ($i = 0; $i < $limit; $i++) {
            echo ".";

            $data = array(
                'first_name' => $this->faker->lastName,
                'middle_name' => $this->faker->lastName,
                'last_name' => $this->faker->lastName,
                'birth_date' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
                'username' => $this->faker->unique()->userName,
                'password' => md5('password'),
                'group_id' => $this->faker->randomElement([1,2,3,4])
            );

            $this->db->insert($this->table, $data);
        }


        $limit += count($constData);
        echo PHP_EOL;
        echo "seeding $limit user accounts";
        echo PHP_EOL;
    }
}
