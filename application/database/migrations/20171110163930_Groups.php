<?php

class Migration_Groups extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('groups');

    }

    public function down() {
        $this->dbforge->drop_table('groups');
    }

}