<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property int $codigo
 * @property string $nombre
 *
 * @property Producto[] $productos
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'nombre'], 'required'],
            [['codigo'], 'integer'],
            [['nombre'], 'string', 'max' => 255],
            [['codigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
  /*  public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'nombre' => 'Nombre',
        ];
    }*/

    /**
     * @return \yii\db\ActiveQuery
     */
  /*  public function getProductos()
    {
        return $this->hasMany(Producto::className(), ['categoria' => 'codigo']);
    }*/
}
