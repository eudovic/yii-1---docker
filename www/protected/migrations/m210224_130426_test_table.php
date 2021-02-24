<?php

class m210224_130426_test_table extends CDbMigration
{
	public function up()
	{
		$this->execute("CREATE TABLE test_table (
			`id` int(11) NOT NULL auto_increment,
			`value` varchar(255) default NULL,
			PRIMARY KEY  (`id`)
		  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
	}

	public function down()
	{
		$this->dropTable('test_table');
		return true;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}