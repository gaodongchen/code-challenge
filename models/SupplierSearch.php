<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id
 * @property string $name
 * @property string|null $code
 * @property string $t_status
 */
class SupplierSearch extends Supplier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'code', 't_status'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            't_status' => 'T Status',
        ];
    }

    /**
     * Supplier Search
     *
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search(array $params): ActiveDataProvider
    {
        $query =  Supplier::find();
        
        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5
                ]
            ]
        );
            
        if ($this->load($params) && $this->validate()) {
            // TODO 如何使用Gridview设置字段的范围？
            $query->andFilterWhere(['>=', 'id', $this->id]);
            $query->andFilterWhere(['=', 't_status', $this->t_status]);
            $query->andFilterWhere(['like', 'code', $this->code]);
            $query->andFilterWhere(['like', 'name', $this->name]);
        }

        return $provider;
    }

    /**
     * Supplier Query
     *
     * @param array $params
     * @return ActiveQuery
     */
    public function query(array $params): ActiveQuery
    {
        $query =  Supplier::find();
            
        if ($this->load($params) && $this->validate()) {
            $query->andFilterWhere(['>=', 'id', $this->id]);
            $query->andFilterWhere(['=', 't_status', $this->t_status]);
            $query->andFilterWhere(['like', 'code', $this->code]);
            $query->andFilterWhere(['like', 'name', $this->name]);
        }

        return $query;
    }
}
