<?php

class Migration_FK_group_in_users extends CI_Migration {

    public function up() {
        $this->dbforge->add_column('users',[
            'CONSTRAINT fk_id FOREIGN KEY(group_id) REFERENCES groups(id) ON DELETE CASCADE'
        ]);
    }

    public function down() {


    }

}