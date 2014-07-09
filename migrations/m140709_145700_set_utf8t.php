<?php
/**
 * Initial application schema
 */
class m140709_145700_set_utf8t extends CDbMigration
{
	public function up()
	{
		// SHOW VARIABLES LIKE 'have_innodb'



		$this->alterColumn('wiki_page', 'page_uid', 'VARCHAR(255) CHARSET utf8 NULL');
		$this->alterColumn('wiki_page', 'namespace', 'VARCHAR(255) CHARSET utf8 NULL');
		$this->alterColumn('wiki_page', 'content', 'TEXT CHARSET utf8 NULL');
        
		$this->alterColumn('wiki_page_revision', 'comment', 'VARCHAR(255) CHARSET utf8 NULL');
		$this->alterColumn('wiki_page_revision', 'content', 'TEXT CHARSET utf8 NULL');
        
		$this->alterColumn('wiki_link', 'wiki_uid', 'VARCHAR(255) CHARSET utf8 NULL');
		$this->alterColumn('wiki_link', 'title', 'VARCHAR(255) CHARSET utf8 NULL');
		
	}

	public function down()
	{

	}
}