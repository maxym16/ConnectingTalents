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

class m170612_000001_bypass_cwhconfiguration extends \yii\db\Migration
{
    public function up()
    {
        $sql = "
		INSERT INTO `cwh_config_contents` (`id`, `classname`, `label`, `status_attribute`, `status_value`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
		(1,	'lispa\\amos\\events\\models\\Event',	'Event',	'status',	'EventWorkflow/DRAFT',	'2017-06-12 09:57:47',	'2017-06-12 09:57:47',	NULL,	1,	1,	NULL),
		(2,	'lispa\\amos\\projectmanagement\\models\\Projects',	'Projects',	'status',	'ProjectsWorkflow/DRAFT',	'2017-06-12 09:58:28',	'2017-06-12 09:58:28',	NULL,	1,	1,	NULL),
		(3,	'lispa\\amos\\news\\models\\News',	'News',	'status',	'NewsWorkflow/BOZZA',	'2017-06-12 09:58:40',	'2017-06-12 09:58:40',	NULL,	1,	1,	NULL),
		(4,	'lispa\\amos\\discussioni\\models\\DiscussioniTopic',	'DiscussioniTopic',	'status',	'DiscussioniTopicWorkflow/BOZZA',	'2017-06-12 09:58:53',	'2017-06-12 09:58:53',	NULL,	1,	1,	NULL),
		(5,	'lispa\\amos\\documenti\\models\\Documenti',	'Documenti',	'status',	'DocumentiWorkflow/BOZZA',	'2017-06-12 09:59:09',	'2017-06-12 09:59:09',	NULL,	1,	1,	NULL);
        ";
        $this->execute($sql);

    }

    public function down()
    {


    }
}
