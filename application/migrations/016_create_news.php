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
            array(
                'title'       => 'YesilCMS is now much more powerful.',
                'description' => '<p>Many improvements and features have been added with the latest version.</p><p>Some of them can be listed as;</p><ul dir="auto"><li><strong>Brand new&nbsp;built-in database viewer.</strong><ul dir="auto"><li>Progressive database search (1.2 to 1.12)</li><li>Item search with all related data.</li><li>Spell search with all related data and dev-required data.</li><li>Object, Creature and Quest page is in WIP state.</li></ul></li><li><strong>Brand new&nbsp;customizable armory.</strong><ul dir="auto"><li>Base character info</li><li>3D Model Viewer (Fast: Uses plain&nbsp;displayID, Detailed: Converts old&nbsp;displayID&nbsp;to Classic&nbsp;displayID&nbsp;using Classic\'s DBC. You can also create a separate table instead of remote call.)</li><li>Dynamic Base Stats</li><li>Progressive Armory (1.2 to 1.12 can be selected by user as well)</li><li>Primary &amp; Secondary Professions</li><li>PvP Stats</li><li>Ability to show enchants on items (by using WoWHead\'s tooltip instead of ClassicDB)</li><li>Ability to show all character stats instead of just base-ones</li></ul></li><li><strong>Brand new&nbsp;PvP Page</strong><ul dir="auto"><li>All pvp data that player may want to see.</li><li>Wide filtering option.<ul dir="auto"><li>Ability to filter by All Time and Last Week</li><li>Ability to filter by Faction</li><li>Ability to filter by specific name</li></ul></li></ul></li><li><strong>Unique&nbsp;Timeline Module&nbsp;with responsive design and full flexibility.</strong><ul dir="auto"><li>Ability to add any patch on choice (including custom ones)</li><li>Ability to order automatically or custom regardless of date</li><li>Separated Description, General, PvE and PvP sections better for maintainability.</li><li>Ability to add unique image for each patch.</li></ul></li></ul><p>The project is at the very beginning of the road and there are unlimited options that can be implemented. You can also contribute <a title="YesilCMS Github Page" href="https://github.com/yesilmen-vm/YesilCMS/" target="_blank" rel="noopener">here</a>!</p>',
                'image'       => 'news_default_2.jpg',
                'date'        => '1667908800'
            )
        );
        $this->db->insert_batch('news', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('news');
    }
}
