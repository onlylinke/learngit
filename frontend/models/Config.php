<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property string $id
 * @property string $value
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'value'], 'required'],
            [['value'], 'string'],
            [['id'], 'string', 'max' => 64],
            [['id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
        ];
    }
}
