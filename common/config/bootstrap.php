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

Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

function pr($var, $info = '') {
    if ($info) {
        $info = "<strong>$info: </strong>";
    }
    $result = "<pre style='font-size:11px;text-align:left;background:#fff;color:#000;'>$info";
    $dump = print_r($var, true);
    $dump = highlight_string("<?php\n" . $dump, true);
    $dump = preg_replace('/&lt;\\?php<br \\/>/', '', $dump, 1);
    $result .= "$dump</pre>";

    echo $result;
}
