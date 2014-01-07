<?php

/**
 * This is the model class for table "tbl_estrutura_fisica_perfil".
 *
 * The followings are the available columns in table 'tbl_estrutura_fisica_perfil':
 * @property integer $id
 * @property integer $item_id
 * @property integer $perfil_id
 * @property string $quantidade
 *
 * The followings are the available model relations:
 * @property Perfil $perfil
 * @property EstruturaFisica $item
 */
class EstruturaFisicaPerfil extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EstruturaFisicaPerfil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_estrutura_fisica_perfil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, perfil_id', 'required'),
			array('item_id, perfil_id', 'numerical', 'integerOnly'=>true),
                        array('item_id', 'CompositeUniqueKeyValidator', 'keyColumns' => 'perfil_id, item_id', 'on'=>'save'),
			array('quantidade', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item_id, perfil_id, quantidade', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'perfil' => array(self::BELONGS_TO, 'Perfil', 'perfil_id'),
			'item' => array(self::BELONGS_TO, 'EstruturaFisica', 'item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_id' => 'Item',
			'perfil_id' => 'Perfil',
			'quantidade' => 'Quantidade',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('perfil_id',$this->perfil_id);
		$criteria->compare('quantidade',$this->quantidade,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                            'defaultOrder'=>'item_id ASC, perfil_id ASC',
                        ),
		));
	}
}