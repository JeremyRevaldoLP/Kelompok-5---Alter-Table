<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penilaian_prodi".
 *
 * @property int $id_penilaian_prodi
 * @property string|null $tahun
 * @property float|null $nilai
 * @property int $id_prodi
 * @property int $id_indikator
 *
 * @property Indikator $indikator
 * @property Prodi $prodi
 */
class PenilaianProdi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penilaian_prodi', 'id_prodi', 'id_indikator'], 'required'],
            [['id_penilaian_prodi', 'id_prodi', 'id_indikator'], 'integer'],
            [['nilai'], 'number'],
            [['tahun'], 'string', 'max' => 4],
            [['id_penilaian_prodi'], 'unique'],
            [['id_indikator'], 'exist', 'skipOnError' => true, 'targetClass' => Indikator::class, 'targetAttribute' => ['id_indikator' => 'id_indikator']],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::class, 'targetAttribute' => ['id_prodi' => 'id_prodi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penilaian_prodi' => 'Id Penilaian Prodi',
            'tahun' => 'Tahun',
            'nilai' => 'Nilai',
            'id_prodi' => 'Id Prodi',
            'id_indikator' => 'Id Indikator',
        ];
    }

    /**
     * Gets query for [[Indikator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIndikator()
    {
        return $this->hasOne(Indikator::class, ['id_indikator' => 'id_indikator']);
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
