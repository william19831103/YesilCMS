<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_DB_forge         $dbforge
 * @property CI_DB_query_builder $db
 */
class Migration_create_download extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id'       => array(
                'type'           => 'INT',
                'constraint'     => '10',
                'unsigned'       => true,
                'auto_increment' => true
            ),
            'fileName' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ),
            'type'     => array(
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'null'       => false
            ),
            'weight'   => array(
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ),
            'category' => array(
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true,
                'default'    => '1'
            ),
            'image'    => array(
                'type'     => 'TEXT',
                'unsigned' => true
            ),
            'url'      => array(
                'type'     => 'TEXT',
                'unsigned' => true
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('download');

        $data = array(
            array('fileName' => '客户端下载', 'type' => 'Zip', 'weight' => '5.5 GB ~', 'category' => '1', 'image' => 'wow-vanilla.png', 'url' => 'http://www.nfuwow.com/Simple/detail/artid/75.h'),
            array('fileName' => '下载插件', 'type' => 'Zip', 'weight' => 'N/A', 'category' => '2', 'image' => '../game-icons/chest.png', 'url' => 'http://www.nfuwow.com/plugin/lists/catid/1.html')
        );
        $this->db->insert_batch('download', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('download');
    }
}
