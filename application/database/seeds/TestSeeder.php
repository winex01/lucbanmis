<?php

class TestSeeder extends Seeder {

    private $table = 'users';

    public function run() {
        $this->db->truncate($this->table);

        //seed records manually
        $data = [
            'user_name' => 'admin',
            'password' => '9871'
        ];
        $this->db->insert($this->table, $data);

        //seed many records using faker
        $limit = 33;
        echo "seeding $limit user accounts";

        for ($i = 0; $i < $limit; $i++) {
            echo ".";

            $data = array(
                'user_name' => $this->faker->unique()->userName,
                'password' => '1234',
            );

            $this->db->insert($this->table, $data);
        }

        echo PHP_EOL;
    }
}
