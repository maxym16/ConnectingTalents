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

use yii\db\Migration;

class m170307_114810_en_lang_it_dis_lang_us extends Migration
{
    const TABLE_NAME = '{{%language}}';

    public function safeUp()
    {
        // Enable Italian language
        $this->update(
            self::TABLE_NAME,
            ['status' => '1'],
            ['language_id' => 'it-IT']
        );
        // Disable United States language
        $this->update(
            self::TABLE_NAME,
            ['status' => '0'],
            ['language_id' => 'en-US']
        );
        return true;
    }

    public function safeDown()
    {
        // Disable Italian language
        $this->update(
            self::TABLE_NAME,
            ['status' => '0'],
            ['language_id' => 'it-IT']
        );
        // Enable United States language
        $this->update(
            self::TABLE_NAME,
            ['status' => '1'],
            ['language_id' => 'en-US']
        );
        return true;
    }
}
