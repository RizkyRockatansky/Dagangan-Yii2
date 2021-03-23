<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "metode".
 *
 * @property string $id_metode
 * @property string $deskripsi
 */
class Metode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metode';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_metode', 'deskripsi'], 'required'],
            [['deskripsi'], 'string'],
            [['id_metode'], 'string', 'max' => 100],
            [['id_metode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_metode' => 'Metode Pembayaran',
            'deskripsi' => 'Deskripsi',
        ];
    }
}
