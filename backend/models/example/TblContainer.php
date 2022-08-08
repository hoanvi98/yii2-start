<?php
namespace app\models\example;

use yii\db\ActiveRecord;
use yii;

class TblContainer extends ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->example;
    }

    public static function tableName(): string
    {
        return '{{%tbl_container}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_vendor' => 'Vendor',
            'id_measurement_system' => 'System',
            'price' => 'Price',
            'created_at' => 'Date'
        ];
    }
    public function attributes()
    {
        return[
            'id',
            'id_vendor', 'id_measurement_system',
            'price', 'created_at'
        ];
    }

    public function rules(){
        return [
            [
                ['id', 'id_vendor', 'id_measurement_system', 'price', 'created_at'], 'required',
                'message' => '{attribute} not value ',
            ],
            [
                ['id'], 'unique', 'message'=>'{attribute}:{value} already exists!',
            ],
        ];
    }
}