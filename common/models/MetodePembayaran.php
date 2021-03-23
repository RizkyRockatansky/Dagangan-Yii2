<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "metode_pembayaran".
 *
 * @property string $id_metode
 * @property string $deskripsi
 */
class MetodePembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metode_pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_metode', 'deskripsi'], 'required'],
            [['deskripsi'], 'string'],
            [['id_metode'], 'string', 'max' => 30],
            [['id_metode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_metode' => 'Id Metode',
            'deskripsi' => 'Deskripsi',
        ];
    }
}
