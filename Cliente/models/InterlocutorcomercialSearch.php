<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Interlocutorcomercial;

/**
 * InterlocutorcomercialSearch represents the model behind the search form about `app\models\Interlocutorcomercial`.
 */
class InterlocutorcomercialSearch extends Interlocutorcomercial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'Celular', 'Telefono', 'ReportsTo', 'NumeroDoc', 'Fax', 'Zona', 'Rol', 'TipoDocumento_codigo'], 'integer'],
            [['Nombres', 'Apellidos', 'Direccion', 'Ciudad', 'Distrito', 'Correo', 'Estado', 'Sexo', 'EstadoCivil', 'Ocupacion', 'FecNacimiento', 'FecContratacion', 'CodPostal', 'PaginaWeb'], 'safe'],
            [['Descuento'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Interlocutorcomercial::find()->andFilterWhere(['like', 'Rol', 1]);

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
            'codigo' => $this->codigo,
            'Celular' => $this->Celular,
            'NumeroDoc' => $this->NumeroDoc,
            'TipoDocumento_codigo' => $this->TipoDocumento_codigo,
            'Telefono' => $this->Telefono,
            'ReportsTo' => $this->ReportsTo,
            'Fax' => $this->Fax,
            'Zona' => $this->Zona,
            'Rol' => $this->Rol,
        ]);

        $query->andFilterWhere(['like', 'Nombres', $this->Nombres])
            ->andFilterWhere(['like', 'Apellidos', $this->Apellidos])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Ciudad', $this->Ciudad])
            ->andFilterWhere(['like', 'Distrito', $this->Distrito])
            ->andFilterWhere(['like', 'Correo', $this->Correo])
            ->andFilterWhere(['like', 'Estado', $this->Estado])
            ->andFilterWhere(['like', 'Sexo', $this->Sexo])
            ->andFilterWhere(['like', 'EstadoCivil', $this->EstadoCivil])
            ->andFilterWhere(['like', 'Ocupacion', $this->Ocupacion])
            ->andFilterWhere(['like', 'FecNacimiento', $this->FecNacimiento])
            ->andFilterWhere(['like', 'FecContratacion', $this->FecContratacion])
            ->andFilterWhere(['like', 'CodPostal', $this->CodPostal])
            ->andFilterWhere(['like', 'PaginaWeb', $this->PaginaWeb]);

        return $dataProvider;
    }

    public function search2($params)
    {
        $query = Interlocutorcomercial::find()->orFilterWhere(['like', 'Rol', 2])->orFilterWhere(['like', 'Rol', 3]);

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
            'codigo' => $this->codigo,
            'Celular' => $this->Celular,
            'NumeroDoc' => $this->NumeroDoc,
            'TipoDocumento_codigo' => $this->TipoDocumento_codigo,
            'Telefono' => $this->Telefono,
            'ReportsTo' => $this->ReportsTo,
            'Fax' => $this->Fax,
            'Zona' => $this->Zona,
            'Rol' => $this->Rol,
        ]);

        $query->andFilterWhere(['like', 'Nombres', $this->Nombres])
            ->andFilterWhere(['like', 'Apellidos', $this->Apellidos])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Ciudad', $this->Ciudad])
            ->andFilterWhere(['like', 'Distrito', $this->Distrito])
            ->andFilterWhere(['like', 'Correo', $this->Correo])
            ->andFilterWhere(['like', 'Estado', $this->Estado])
            ->andFilterWhere(['like', 'Sexo', $this->Sexo])
            ->andFilterWhere(['like', 'EstadoCivil', $this->EstadoCivil])
            ->andFilterWhere(['like', 'Ocupacion', $this->Ocupacion])
            ->andFilterWhere(['like', 'FecNacimiento', $this->FecNacimiento])
            ->andFilterWhere(['like', 'FecContratacion', $this->FecContratacion])
            ->andFilterWhere(['like', 'CodPostal', $this->CodPostal])
            ->andFilterWhere(['like', 'PaginaWeb', $this->PaginaWeb]);

        return $dataProvider;
    }

    public function search3($params)
    {
        $query = Interlocutorcomercial::find()->andFilterWhere(['like', 'Rol', 1]);

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
            'codigo' => $this->codigo,
            'Celular' => $this->Celular,
            'NumeroDoc' => $this->NumeroDoc,
            'TipoDocumento_codigo' => $this->TipoDocumento_codigo,
            'Telefono' => $this->Telefono,
            'ReportsTo' => $this->ReportsTo,
            'Fax' => $this->Fax,
            'Zona' => $this->Zona,
            'Rol' => $this->Rol,
        ]);

        $query->andFilterWhere(['like', 'Nombres', $this->Nombres])
            ->andFilterWhere(['like', 'Apellidos', $this->Apellidos])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Ciudad', $this->Ciudad])
            ->andFilterWhere(['like', 'Distrito', $this->Distrito])
            ->andFilterWhere(['like', 'Correo', $this->Correo])
            ->andFilterWhere(['like', 'Estado', $this->Estado])
            ->andFilterWhere(['like', 'Sexo', $this->Sexo])
            ->andFilterWhere(['like', 'EstadoCivil', $this->EstadoCivil])
            ->andFilterWhere(['like', 'Ocupacion', $this->Ocupacion])
            ->andFilterWhere(['like', 'FecNacimiento', $this->FecNacimiento])
            ->andFilterWhere(['like', 'FecContratacion', $this->FecContratacion])
            ->andFilterWhere(['like', 'CodPostal', $this->CodPostal])
            ->andFilterWhere(['like', 'PaginaWeb', $this->PaginaWeb]);

        return $dataProvider;
    }
}
