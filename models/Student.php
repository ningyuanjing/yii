<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $sno
 * @property string $name
 * @property string $sex
 * @property string $pwd
 * @property string $sbir
 * @property string $identity
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sno', 'name', 'sex', 'pwd', 'sbir', 'identity'], 'required'],
            [['sbir'], 'safe'],
            [['sno', 'name', 'sex', 'pwd', 'identity'], 'string', 'max' => 45],
            [['sno'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sno' => 'Sno',
            'name' => 'Name',
            'sex' => 'Sex',
            'pwd' => 'Pwd',
            'sbir' => 'Sbir',
            'identity' => 'Identity',
        ];
    }
}
