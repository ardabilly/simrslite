<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "poliklinik".
 *
 * @property int $id_poliklinik
 * @property string $nama_poliklinik
 */
class Poliklinik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poliklinik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_poliklinik'], 'required'],
            [['nama_poliklinik'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_poliklinik' => 'Id Poliklinik',
            'nama_poliklinik' => 'Nama Poliklinik',
        ];
    }
    
}
