<?php

/**
 * This is the model class for table "tbl_unidade".
 *
 * The followings are the available columns in table 'tbl_unidade':
 * @property string $id
 * @property string $nome
 * @property integer $perfil_id
 * @property string $encarregado
 * @property string $telefone
 * @property double $area_fisica
 * @property double $populacao
 * @property double $media_diaria_atendimentos
 * @property double $qtd_plantonistas
 * @property double $qtd_funcionarios
 * @property integer $empresa_alimento_id
 * @property integer $empresa_limpeza_id
 *
 * The followings are the available model relations:
 * @property Perfil $perfil
 * @property Empresa $empresaAlimento
 * @property Empresa $empresaLimpeza
 */
class Unidade extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Unidade the static model class
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
		return 'tbl_unidade';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome', 'required'),
			array('perfil_id, empresa_alimento_id, empresa_limpeza_id', 'numerical', 'integerOnly'=>true),
			array('area_fisica, populacao, media_diaria_atendimentos, qtd_plantonistas, qtd_funcionarios', 'numerical'),
			array('nome, encarregado', 'length', 'max'=>512),
			array('telefone', 'length', 'max'=>13),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, perfil_id, encarregado, telefone, area_fisica, populacao, media_diaria_atendimentos, qtd_plantonistas, qtd_funcionarios, empresa_alimento_id, empresa_limpeza_id', 'safe', 'on'=>'search'),
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
			'empresaAlimento' => array(self::BELONGS_TO, 'Empresa', 'empresa_alimento_id'),
			'empresaLimpeza' => array(self::BELONGS_TO, 'Empresa', 'empresa_limpeza_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'perfil_id' => 'Perfil',
			'encarregado' => 'Encarregado',
			'telefone' => 'Telefone',
			'area_fisica' => 'Área Física',
			'populacao' => 'População',
			'media_diaria_atendimentos' => 'Méd atend dia',
			'qtd_plantonistas' => 'Qtd Plant',
			'qtd_funcionarios' => 'Qtd Func',
			'empresa_alimento_id' => 'Empresa Alimento',
			'empresa_limpeza_id' => 'Empresa Limpeza',
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
                
		$criteria->compare('id',$this->id,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('perfil_id',$this->perfil_id);
		$criteria->compare('encarregado',$this->encarregado,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('area_fisica',$this->area_fisica);
		$criteria->compare('populacao',$this->populacao);
		$criteria->compare('media_diaria_atendimentos',$this->media_diaria_atendimentos);
		$criteria->compare('qtd_plantonistas',$this->qtd_plantonistas);
		$criteria->compare('qtd_funcionarios',$this->qtd_funcionarios);
		$criteria->compare('empresa_alimento_id',$this->empresa_alimento_id);
		$criteria->compare('empresa_limpeza_id',$this->empresa_limpeza_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        

        /*
         * Tratar dados antes de passar para as views
         * 
         */
        protected function afterFind()
        {
                
                $this->nome = MString::strtoupper($this->nome);
                $this->encarregado = MString::strtoupper($this->encarregado);

                parent::afterFind ();
        }
}