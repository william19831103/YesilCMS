<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_DB_forge         $dbforge
 * @property CI_DB_query_builder $db
 */
class Migration_create_slides extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id'          => array(
                'type'           => 'INT',
                'constraint'     => '10',
                'unsigned'       => true,
                'auto_increment' => true
            ),
            'title'       => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false
            ),
            'description' => array(
                'type' => 'TEXT',
                'null' => false
            ),
            'type'        => array(
                'type'       => 'INT',
                'constraint' => '1',
                'unsigned'   => true
            ),
            'route'       => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('slides');

        $data = array(
            array(
                'title'       => '暗黑魔兽 - 欢迎来到暗黑魔兽.',
                'description' => '2022超魔幻RPG之作，无可挑剔的简单操作，无与伦比的爽快打击感，无处不在的惊喜！气势磅礴的游戏背景，让您在游戏中找到身临其境的感觉，带给您显示与魔兽世界中的强力视觉冲击感。.',
                'type'        => '1',
                'route'       => 's-1.jpg'
            ),
            array('title' => '暗黑魔兽 - 2', 'description' => '百种装备等您打造，千余任务等您接手。遍布世界地图中的给类BOSS，等您组队挑战！重温魔兽激情！', 'type' => '1', 'route' => 's-2.jpg'),
        );
        $this->db->insert_batch('slides', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('slides');
    }
}
