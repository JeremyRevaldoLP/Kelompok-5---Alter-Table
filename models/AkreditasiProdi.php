<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akreditasi_prodi".
 *
 * @property int $id_akreditasi_prodi
 * @property string|null $tanggal_mulai
 * @property string|null $tanggal_akhir
 * @property string|null $no_sk
 * @property int $id_lembaga_akreditasi
 * @property int $id_prodi
 * @property int $id_kategori_akreditasi
 *
 * @property KategoriAkreditasi $kategoriAkreditasi
 * @property LembagaAkreditasi $lembagaAkreditasi
 * @property Prodi $prodi
 */
class AkreditasiProdi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akreditasi_prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_akreditasi_prodi', 'id_lembaga_akreditasi', 'id_prodi', 'id_kategori_akreditasi'], 'required'],
            [['id_akreditasi_prodi', 'id_lembaga_akreditasi', 'id_prodi', 'id_kategori_akreditasi'], 'integer'],
            [['tanggal_mulai', 'tanggal_akhir'], 'safe'],
            [['no_sk'], 'string', 'max' => 50],
            [['id_akreditasi_prodi'], 'unique'],
            [['id_kategori_akreditasi'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriAkreditasi::class, 'targetAttribute' => ['id_kategori_akreditasi' => 'id_kategori_akreditasi']],
            [['id_lembaga_akreditasi'], 'exist', 'skipOnError' => true, 'targetClass' => LembagaAkreditasi::class, 'targetAttribute' => ['id_lembaga_akreditasi' => 'id_lembaga_akreditasi']],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::class, 'targetAttribute' => ['id_prodi' => 'id_prodi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_akreditasi_prodi' => 'Id Akreditasi Prodi',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_akhir' => 'Tanggal Akhir',
            'no_sk' => 'No Sk',
            'id_lembaga_akreditasi' => 'Id Lembaga Akreditasi',
            'id_prodi' => 'Id Prodi',
            'id_kategori_akreditasi' => 'Id Kategori Akreditasi',
        ];
    }

    /**
     * Gets query for [[KategoriAkreditasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriAkreditasi()
    {
        return $this->hasOne(KategoriAkreditasi::class, ['id_kategori_akreditasi' => 'id_kategori_akreditasi']);
    }

    /**
     * Gets query for [[LembagaAkreditasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLembagaAkreditasi()
    {
        return $this->hasOne(LembagaAkreditasi::class, ['id_lembaga_akreditasi' => 'id_lembaga_akreditasi']);
    }

    /**
     * Gets query for [[Prodi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Prodi::class, ['id_prodi' => 'id_prodi']);
    }
}
