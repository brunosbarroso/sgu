<?php

/**
 * This is the model class for table "tbl_perfil".
 *
 * The followings are the available columns in table 'tbl_perfil':
 * @property integer $id
 * @property string $descricao
 * @property integer $populacao_minima
 * @property integer $populacao_maxima
 * @property integer $area_fisica
 * @property integer $medicos_por_plantao
 * @property integer $atendimento_em_24h
 * @property integer $leitos_minimo
 * @property integer $leitos_maximo
 *
 * The followings are the available model relations:
 * @property EstruturaFisicaPerfil[] $estruturaFisicaPerfils
 * @property Unidade[] $unidades
 */
class Perfil extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Perfil the static model class
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
		return 'tbl_perfil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao', 'required'),
			array('populacao_minima, populacao_maxima, area_fisica, medicos_por_plantao, atendimento_em_24h, leitos_minimo, leitos_maximo', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, populacao_minima, populacao_maxima, area_fisica, medicos_por_plantao, atendimento_em_24h, leitos_minimo, leitos_maximo', 'safe', 'on'=>'search'),
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
			'estruturaFisicaPerfils' => array(self::HAS_MANY, 'EstruturaFisicaPerfil', 'perfil_id'),
			'unidades' => array(self::HAS_MANY, 'Unidade', 'perfil_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descricao' => 'Descricao',
			'populacao_minima' => 'Populacao Minima',
			'populacao_maxima' => 'Populacao Maxima',
			'area_fisica' => 'Area Fisica',
			'medicos_por_plantao' => 'Medicos Por Plantao',
			'atendimento_em_24h' => 'Atendimento Em 24h',
			'leitos_minimo' => 'Leitos Minimo',
			'leitos_maximo' => 'Leitos Maximo',
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
		$criteria->compare('populacao_minima',$this->populacao_minima);
		$criteria->compare('populacao_maxima',$this->populacao_maxima);
		$criteria->compare('area_fisica',$this->area_fisica);
		$criteria->compare('medicos_por_plantao',$this->medicos_por_plantao);
		$criteria->compare('atendimento_em_24h',$this->atendimento_em_24h);
		$criteria->compare('leitos_minimo',$this->leitos_minimo);
		$criteria->compare('leitos_maximo',$this->leitos_maximo);

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