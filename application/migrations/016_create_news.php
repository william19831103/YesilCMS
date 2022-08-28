<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_DB_forge         $dbforge
 * @property CI_DB_query_builder $db
 */
class Migration_create_news extends CI_Migration
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
                'constraint' => '100'
            ),
            'description' => array(
                'type' => 'TEXT',
                'null' => false
            ),
            'image'       => array(
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ),
            'date'        => array(
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true,
                'default'    => '0'
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('news');
        $data = array(
            array(
                'title'       => '欢迎来到怀旧体验服',
                'description' => '<p>欢迎来到叶枫魔兽4区,游戏内容原汁原味,微变,3倍回蓝,2倍怒气/能量,5倍经验,1.5倍天赋,3倍技能,10个专业技能.</p>
<p>经典随机词条设置,斗转星移,泰坦之握,吸星大法, 爆本一小时7次,尽情刷本 QQ群:652376092</p>',
                'image'       => 'news_default.jpg',
                'date'        => '1659139200'
            ),
        );
        $this->db->insert_batch('news', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('news');
    }
}
