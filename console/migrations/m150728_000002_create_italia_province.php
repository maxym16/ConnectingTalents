<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 * @see http://example.com Developers'community
 * @license GPLv3
 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License version 3
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 * @author     Lombardia Informatica S.p.A.
 */

use yii\db\Schema;

class m150728_000002_create_italia_province extends \yii\db\Migration
{/*
    const TABLE = '{{%italia_province}}';

    public function up()
    {
        if ($this->db->schema->getTableSchema(self::TABLE, true) === null) {
   
        $this->createTable(self::TABLE, [
            'id' => Schema::TYPE_PK,
            'nome' => Schema::TYPE_STRING . "(255) NOT NULL",
            'regione_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'sigla' => 'CHAR(2) NOT NULL'
        ], $this->db->driverName === 'mysql' ? 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB AUTO_INCREMENT=1' : null);               
        }
        else{
            echo "Nessuna creazione eseguita in quanto la tabella esiste già";
            return true;
        } 

    }

    public function down()
    {
        if ($this->db->schema->getTableSchema(self::TABLE, true) !== null) {            
            $this->dropTable(self::TABLE);
        }
        else{
            echo "Nessuna cancellazione eseguita in quanto la tabella non esiste";
            return true;
        }
    }
*/
}