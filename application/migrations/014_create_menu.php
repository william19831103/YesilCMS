<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_DB_forge         $dbforge
 * @property CI_DB_query_builder $db
 */
class Migration_create_menu extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id'    => array(
                'type'           => 'INT',
                'constraint'     => '10',
                'unsigned'       => true,
                'auto_increment' => true
            ),
            'name'  => array(
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ),
            'url'   => array(
                'type' => 'TEXT',
                'null' => false
            ),
            'icon'  => array(
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ),
            'main'  => array(
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true,
                'default'    => '0'
            ),
            'child' => array(
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true,
                'default'    => '0'
            ),
            'type'  => array(
                'type'       => 'INT',
                'constraint' => '10',
                'unsigned'   => true,
                'default'    => '1'
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('menu');
        $data = array(
            array('name' => 'PvP', 'url' => 'pvp', 'icon' => 'fas fa-fist-raised', 'main' => '1', 'child' => '0', 'type' => '1'),
            array('name' => '论坛', 'url' => 'forum', 'icon' => 'fas fa-comments', 'main' => '1', 'child' => '0', 'type' => '1'),
            array('name' => '在线玩家', 'url' => 'online', 'icon' => 'fas fa-user', 'main' => '1', 'child' => '0', 'type' => '1'),
            array('name' => '玩家英雄榜', 'url' => 'armory', 'icon' => 'fas fa-users', 'main' => '1', 'child' => '0', 'type' => '1'),
            array('name' => '账号管理', 'url' => '#', 'icon' => 'fas fa-house-user', 'main' => '2', 'child' => '0', 'type' => '1'),
            array('name' => '捐助', 'url' => 'donate', 'icon' => 'fas fa-hand-holding-dollar', 'main' => '1', 'child' => '5', 'type' => '1'),
            array('name' => '投票', 'url' => 'vote', 'icon' => 'fas fa-check-to-slot', 'main' => '1', 'child' => '5', 'type' => '1'),
            array('name' => '在线商城', 'url' => 'store', 'icon' => 'fas fa-store', 'main' => '1', 'child' => '5', 'type' => '1'),
            array('name' => '提交BUG', 'url' => 'bugtracker', 'icon' => 'fas fa-bug', 'main' => '1', 'child' => '5', 'type' => '1'),
            array('name' => '更新补丁内容', 'url' => 'changelogs', 'icon' => 'fas fa-scroll', 'main' => '1', 'child' => '5', 'type' => '1'),
            array('name' => '在线', 'url' => 'download', 'icon' => 'fas fa-download', 'main' => '1', 'child' => '5', 'type' => '1'),
            array('name' => '使用协议', 'url' => 'page/terms-of-use', 'icon' => 'fas fa-book-open', 'main' => '1', 'child' => '0', 'type' => '1')
        );
        $this->db->insert_batch('menu', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('menu');
    }
}
