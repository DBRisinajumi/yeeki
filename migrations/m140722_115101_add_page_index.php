<?php

class m140722_115101_add_page_index extends CDbMigration
{

	/**
	 * Creates initial version of the table
	 */
	public function up()
	{
		$this->execute("
           ALTER TABLE `wiki_page`   
            ADD COLUMN `page_index` VARCHAR(20) CHARSET utf8 NULL AFTER `is_redirect`,
            ADD COLUMN `page_title` text CHARSET utf8 NULL AFTER `page_index`;

        ");
	}

	/**
	 * Drops the table
	 */
	public function down()
	{
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
