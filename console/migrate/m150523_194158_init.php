<?php
use yii\db\Schema;
use yii\db\Migration;


class m150523_194158_init extends Migration
{
	 public function safeUp()
	 {
		 return $this->createTable('kullanicilar', [
		 'id' => Schema::TYPE_PK,
		 // $this->primaryKey()
		 'email' => Schema::TYPE_STRING,
		 // $this->string(255) // String with 255 characters
		 'password' => Schema::TYPE_STRING,
		 'name' => Schema::TYPE_STRING,
		 'created_at' => Schema::TYPE_INTEGER,
		 // $this->integer()
		 'updated_at' => Schema::TYPE_INTEGER
 ]);
 }

 public function Down()
 {
 return $this->dropTable('kullanicilar');
 }
}





?>