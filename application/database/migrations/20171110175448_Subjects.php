<?php

class Migration_Subjects extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'subcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
            ),
            'descriptions' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('subjects');
    }

    public function down() {
        $this->dbforge->drop_table('subjects');
    }

}