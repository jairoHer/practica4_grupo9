<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property int $codigo
 * @property int $categoria
 * @property string $nombre
 * @property string $descripcion
 * @property double $precio
 * @property int $estado
 *
 * @property Categoria $categoria0
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoria', 'estado'], 'integer'],
            [['nombre', 'descripcion', 'precio'], 'required'],
            [['precio'], 'number'],
            [['nombre', 'descripcion'], 'string', 'max' => 255],
            [['categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['categoria' => 'codigo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'categoria' => 'Categoria',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'precio' => 'Precio',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    /*public function getCategoria0()
    {
        return $this->hasOne(Categoria::className(), ['codigo' => 'categoria']);
    }*/
}
