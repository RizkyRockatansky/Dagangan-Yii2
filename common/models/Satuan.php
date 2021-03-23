<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "satuan".
 *
 * @property string $id_satuan
 * @property string $nama_satuan
 */
class Satuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_satuan', 'nama_satuan'], 'required'],
            [['id_satuan'], 'string', 'max' => 10],
            [['nama_satuan'], 'string', 'max' => 200],
            [['id_satuan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_satuan' => 'Nama Satuan',
            'nama_satuan' => 'Ket',
        ];
    }
}
