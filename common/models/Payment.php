<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property integer $id
 * @property integer $account
 * @property integer $user_id
 * @property integer $validity
 * @property integer $cvv
 * @property string $payment
 * @property string $date
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account', 'user_id', 'validity', 'cvv', 'payment', 'date'], 'required'],
            [['account', 'user_id', 'validity', 'cvv'], 'integer'],
            [['payment'], 'number'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account' => 'Credit card number',
            'user_id' => 'User ID',
            'validity' => 'Validity',
            'cvv' => 'Cvv',
            'payment' => 'Amount of Payment',
            'date' => 'Date',
        ];
    }
}
