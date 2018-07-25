<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $alamat_pasien
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $telp_pasien
 * @property string $tgl_pendaftaran
 * @property int $id_poliklinik
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'alamat_pasien', 'jenis_kelamin', 'tanggal_lahir', 'telp_pasien', 'tgl_pendaftaran', 'id_poliklinik'], 'required'],
            [['tanggal_lahir', 'tgl_pendaftaran'], 'safe'],
            [[ 'id_poliklinik'], 'integer'],
            [['nama_pasien', 'alamat_pasien'], 'string', 'max' => 255],
            [['jenis_kelamin'], 'string', 'max' => 100],
            [['telp_pasien'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'alamat_pasien' => 'Alamat Pasien',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'telp_pasien' => 'Telp Pasien',
            // 'tgl_pendaftaran' => 'Tgl Pendaftaran',
            'id_poliklinik' => 'Id Poliklinik',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->tgl_pendaftaran = date('Y-m-d H:i:s');
            $this->tanggal_lahir = $this->saveDateFormat($this->tanggal_lahir);
            return true;
        }
        else{
            return false;
        }
    }
    public function getPoliklinik()
    {
        return $this->hasOne(Poliklinik::className(),['id_poliklinik' => 'id_poliklinik']);
    }
    public function dateFormat($date)
    {
        if ($date !=null && $date != '1970-01-01')
            return Yii::$app->formatter->asDate($date, "MM/dd/yyy");
        else
            return null;
    }

    public function saveDateFormat($date)
    {
        if ($date != "0000-00-00")
            return Yii::$app->formatter->asDate($date,'yyyy-MM-dd');
        else
            return null;
    }
}
