<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_DB_forge         $dbforge
 * @property CI_DB_query_builder $db
 */
class Migration_create_votes extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id'     => array(
                'type'           => 'INT',
                'constraint'     => '10',
                'unsigned'       => true,
                'auto_increment' => true
            ),
            'name'   => array(
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ),
            'url'    => array(
                'type' => 'TEXT'
            ),
            'time'   => array(
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true
            ),
            'points' => array(
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true
            ),
            'image'  => array(
                'type' => 'TEXT'
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('votes');

        $data = array(
            array('name' => 'Í¶Æ±²âÊÔ1', 'url' => 'https://baidu.com', 'time' => '720', 'points' => '1', 'image' => 'data:image/png;base64,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'),
            array('name' => 'Í¶Æ±²âÊÔ2', 'url' => 'https://baidu.com', 'time' => '720', 'points' => '1', 'image' => 'data:image/png;base64,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'),
        );
        $this->db->insert_batch('votes', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('votes');
    }
}
