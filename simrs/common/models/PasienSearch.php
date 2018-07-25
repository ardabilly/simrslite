<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pasien;
use common\models\Poliklinik;

/**
 * PasienSearch represents the model behind the search form of `common\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'telp_pasien', 'tgl_pendaftaran', 'id_poliklinik'], 'integer'],
            [['nama_pasien', 'alamat_pasien', 'jenis_kelamin', 'tanggal_lahir'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pasien' => $this->id_pasien,
            'tanggal_lahir' => $this->tanggal_lahir,
            'telp_pasien' => $this->telp_pasien,
            'tgl_pendaftaran' => $this->tgl_pendaftaran,
            'id_poliklinik' => $this->id_poliklinik,
        ]);

        $query->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'alamat_pasien', $this->alamat_pasien])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin]);

        return $dataProvider;
    }


}
