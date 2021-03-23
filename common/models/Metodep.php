<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "metodep".
 *
 * @property string $nama_metode
 * @property string $deskripsi
 */
class Metodep extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metodep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_metode', 'deskripsi'], 'required'],
            [['deskripsi'], 'string'],
            [['nama_metode'], 'string', 'max' => 100],
            [['nama_metode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_metode' => 'Nama Metode',
            'deskripsi' => 'Deskripsi',
        ];
    }
}
