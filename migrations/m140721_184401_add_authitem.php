<?php

class m140721_184401_add_authitem extends CDbMigration
{

	/**
	 * Creates initial version of the table
	 */
	public function up()
	{
		$this->execute("
            INSERT INTO `authitem` VALUES('WikiEditor', 2, 'Edit wiki help pages', NULL, 'N;');
        ");
	}

	/**
	 * Drops the table
	 */
	public function down()
	{
		$this->execute("
            DELETE FROM `authitem` WHERE `name` = 'WikiEditor';
        ");
	}

	/**
	 * Creates initial version of the table in a transaction-safe way.
	 * Uses $this->up to not duplicate code.
	 */
	public function safeUp()
	{
		$this->up();
	}

	/**
	 * Drops the table in a transaction-safe way.
	 * Uses $this->down to not duplicate code.
	 */
	public function safeDown()
	{
		$this->down();
	}
}
