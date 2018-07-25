<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "resep".
 *
 * @property int $id_resep
 * @property int $id_pasien
 * @property int $id_user
 * @property int $id_obat
 * @property int $jumlah_obat
 */
class Resep extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_user', 'id_obat', 'jumlah_obat'], 'required'],
            [['id_pasien', 'id_user', 'id_obat', 'jumlah_obat'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_resep' => 'Id Resep',
            'id_pasien' => 'Id Pasien',
            'id_user' => 'Id User',
            'id_obat' => 'Id Obat',
            'jumlah_obat' => 'Jumlah Obat',
        ];
    }
    public function getPasien()
    {
        return $this->hasOne(Pasien::className(),['id_pasien' => 'id_pasien']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(),['id' => 'id_user']);
    }
    public function getObat()
    {
        return $this->hasOne(Obat::className(),['id_obat' => 'id_obat']);
    }

    // public function beforeSave($insert)
    // {
    //     $query = Obat::find();


    //     if (parent::beforeSave($insert)) {
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }
}
