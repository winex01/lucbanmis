<?php

class Migration_default_value_birthday_users extends CI_Migration {

    public function up() {
        
        $fields = array(
                'birth_date' => array(
                        'type' => 'DATE',
                        'null' => true
                ),
        );
        $this->dbforge->modify_column('users', $fields);

    }

    public function down() {
        
    }

}

