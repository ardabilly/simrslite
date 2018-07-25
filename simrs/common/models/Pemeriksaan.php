<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pemeriksaan".
 *
 * @property int $id_pemeriksaan
 * @property int $id_pasien
 * @property string $keluhan
 * @property string $perawatan
 * @property string $tindakan
 * @property string $status
 */
class Pemeriksaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemeriksaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'keluhan', 'perawatan', 'tindakan', 'status'], 'required'],
            [['id_pasien'], 'integer'],
            [['status'], 'string'],
            [['keluhan', 'perawatan', 'tindakan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemeriksaan' => 'Id Pemeriksaan',
            'id_pasien' => 'Id Pasien',
            'keluhan' => 'Keluhan',
            'perawatan' => 'Perawatan',
            'tindakan' => 'Tindakan',
            'status' => 'Status',
        ];
    }
    public function getPasien()
    {
        return $this->hasOne(Pasien::className(),['id_pasien' => 'id_pasien']);
    }
}
