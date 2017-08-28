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

namespace common\models;


/**
 * This is the model class for table "italia_regioni".
 *
 * @property integer $id
 * @property string $nome
 *
 * @property ItaliaComuni[] $italiaComunis
 * @property ItaliaProvince[] $italiaProvinces
 */
class ItaliaRegioni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'italia_regioni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('amosplatform', 'ID'),
            'nome' => \Yii::t('amosplatform', 'Nome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItaliaComunis()
    {
        return $this->hasMany(ItaliaComuni::className(), ['regione_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItaliaProvinces()
    {
        return $this->hasMany(ItaliaProvince::className(), ['regione_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ItaliaRegioniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItaliaRegioniQuery(get_called_class());
    }
}
