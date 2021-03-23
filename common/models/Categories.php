<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property string $id_categories
 * @property string $keterangan
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_categories', 'keterangan'], 'required'],
            [['keterangan'], 'string'],
            [['id_categories'], 'string', 'max' => 30],
            [['id_categories'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_categories' => 'Kategori',
            'keterangan' => 'Keterangan',
        ];
    }
}
