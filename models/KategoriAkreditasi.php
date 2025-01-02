<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori_akreditasi".
 *
 * @property int $id_kategori_akreditasi
 * @property string|null $deskripsi
 *
 * @property AkreditasiProdi[] $akreditasiProdis
 */
class KategoriAkreditasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_akreditasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori_akreditasi'], 'required'],
            [['id_kategori_akreditasi'], 'integer'],
            [['deskripsi'], 'string', 'max' => 100],
            [['id_kategori_akreditasi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kategori_akreditasi' => 'Id Kategori Akreditasi',
            'deskripsi' => 'Deskripsi',
        ];
    }

    /**
     * Gets query for [[AkreditasiProdis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkreditasiProdis()
    {
        return $this->hasMany(AkreditasiProdi::class, ['id_kategori_akreditasi' => 'id_kategori_akreditasi']);
    }
}
