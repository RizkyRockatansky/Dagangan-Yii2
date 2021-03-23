<?php

namespace common\models;
use yii\db\ActiveQuery;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id_produk
 * @property string $nama_produk
 * @property int $harga
 * @property string $deskripsi
 * @property string $kategori
 * @property string $gambar
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_produk', 'harga', 'deskripsi', 'kategori', 'gambar'], 'required'],
            [['harga', 'status'], 'integer'],
            [['deskripsi','kategori'], 'string'],
            [['nama_produk'], 'string', 'max' => 255],
            [['gambar'],'file','extensions'=>'jpeg,jpg,png,gif', 'skipOnEmpty'=>false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'nama_produk' => 'Nama Produk',
            'harga' => 'Harga',
            'deskripsi' => 'Deskripsi',
            'kategori' => 'Kategori',
            'gambar' => 'Gambar',
            'status'=> 'Status',
        ];
    }

    // public function getIdKategori()
    // {
    //     return $this->hashOne(Kategori::className(), ['id_kategori'=> 'id_kategori']);
    // }
}
