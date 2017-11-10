<?php

class GroupsSeeder extends Seeder {

    private $table = 'groups';

    public function run() {
        $this->db->query('SET FOREIGN_KEY_CHECKS = 0;');
        $this->db->truncate($this->table);
        $this->db->query('SET FOREIGN_KEY_CHECKS = 1;');

        //seed records manually
        $data = [
            'administrator',
            'cashier',
            'encoder',
            'registrar'
        ];

        $i = 1;
        foreach ($data as $description) {
            # code...
            $this->db->insert($this->table, compact('description'));
            $i++;
        }

        echo PHP_EOL;
        echo 'Seeding '.$i. ' groups.';
        echo PHP_EOL;
    }
}
