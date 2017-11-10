<?php

class Migration_Users extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'middle_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ),
            'birth_date' => array(
                'type' => 'DATE'
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'group_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => 1
            ),
            'created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'active' => array(
                'type' => 'TINYINT',
                'null' => false,
                'default' => 1
            )

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down() {
        $this->dbforge->drop_table('users');
    }

}