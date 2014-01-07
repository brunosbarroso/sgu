<?php

/**
 * This is the model class for table "tbl_estrutura_fisica".
 *
 * The followings are the available columns in table 'tbl_estrutura_fisica':
 * @property integer $id
 * @property string $descricao
 * @property string $unidade
 * @property integer $pai_id
 *
 * The followings are the available model relations:
 * @property EstruturaFisicaPerfil[] $estruturaFisicaPerfils
 */
class EstruturaFisica extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EstruturaFisica the static model class
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
		return 'tbl_estrutura_fisica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pai_id', 'numerical', 'integerOnly'=>true),
			array('descricao, unidade', 'length', 'max'=>150),
                        array('pai_id', 'compare', 'compareAttribute'=>'id','operator'=>'!=', 'allowEmpty'=>false , 'message'=>'{attribute} deve ser outro item diferente deste.', 'on'=>'create, update'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, unidade, pai_id', 'safe', 'on'=>'search'),
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
			'estruturaFisicaPerfils' => array(self::HAS_MANY, 'EstruturaFisicaPerfil', 'item_id'),
			//'estruturaFisicaPai' => array(self::BELONGS_TO, 'EstruturaFisica', 'item_id'),
                        'estruturaFisicaPai' => array(self::MANY_MANY, 'EstruturaFisica', 'Relation(id, pai_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descricao' => 'Descrição',
			'unidade' => 'Unidade',
			'pai_id' => 'Item pai',
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
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('unidade',$this->unidade,true);
		$criteria->compare('pai_id',$this->pai_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        
        /*
         * Tratar dados antes de validar
         * 
         */
        protected function beforeValidate()
        {       
                $this->descricao = MString::strtolower($this->descricao);
                
                return parent::beforeValidate ();
        }
        

        /**
         * Tratar dados antes de passar para as views
         * 
         */
        protected function afterFind()
        {
                $this->descricao = MString::strtoupper($this->descricao);
                
                parent::afterFind ();
        }
}