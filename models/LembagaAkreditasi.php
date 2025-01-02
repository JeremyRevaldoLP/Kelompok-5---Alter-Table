<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lembaga_akreditasi".
 *
 * @property int $id_lembaga_akreditasi
 * @property string|null $nama_lembaga
 *
 * @property AkreditasiProdi[] $akreditasiProdis
 */
class LembagaAkreditasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lembaga_akreditasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lembaga_akreditasi'], 'required'],
            [['id_lembaga_akreditasi'], 'integer'],
            [['nama_lembaga'], 'string', 'max' => 200],
            [['id_lembaga_akreditasi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lembaga_akreditasi' => 'Id Lembaga Akreditasi',
            'nama_lembaga' => 'Nama Lembaga',
        ];
    }

    /**
     * Gets query for [[AkreditasiProdis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkreditasiProdis()
    {
        return $this->hasMany(AkreditasiProdi::class, ['id_lembaga_akreditasi' => 'id_lembaga_akreditasi']);
    }
}
