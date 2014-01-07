<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property string $id
 * @property string $nome
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $roles
 * @property string $last_login_time
 * @property string $create_time
 */
class User extends CActiveRecord
{
    
        public $password_repeat;
        public $new_password;
        public $new_password_repeat;
    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, roles, nome', 'required'),
			array('username, roles, nome, email', 'length', 'max'=>255),
                        array('password, password_repeat, new_password, new_password_repeat', 'length', 'min'=>6, 'message' => "A senha deve ter no mínimo 6 caracteres."),

                        // regra usada para comparar os campos da senha na criação do usuário
                        array('password, password_repeat', 'required', 'on'=>'insert'),
                        array('password', 'compare', 'compareAttribute'=>'password_repeat', 'on'=>'insert'),

                        // regra usada para comparar os campos da senha atualização
                        array('new_password, new_password_repeat', 'required', 'on'=>'changePassword'),
                        array('new_password', 'compare', 'compareAttribute'=>'new_password_repeat', 'on'=>'changePassword'),
                    
                        // Regras para campos únicos
                        array('username', 'unique', 'message' => "Esse nome de usuário já existe."),
                        array('email', 'unique', 'message' => "Este e-mail já está cadastrado para outro usuário."),
                    
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, email, username, password, roles, last_login_time, create_time', 'safe', 'on'=>'search'),
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
			'email' => 'Email',
			'username' => 'Usuário',
			'password' => 'Senha',
			'password_repeat' => 'Repita a senha',
			'new_password' => 'Nova senha',
			'new_password_repeat' => 'Repita a nova senha',
			'roles' => 'Permissão',
			'last_login_time' => 'Último login',
			'create_time' => 'Data de criação',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('roles',$this->roles,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('create_time',$this->create_time,true);

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
                $this->nome = MString::strtolower($this->nome);
                $this->create_time = date('Y-m-d H:i:s');
                return parent::beforeValidate ();
        }
        
        /*
         * Tratar dados antes de validar
         * 
         */
        protected function beforeSave()
        {       
                if( $this->scenario == 'insert'){
                    $this->password = md5($this->password);
                }
                if( $this->scenario == 'changePassword'){
                    $this->password = md5($this->new_password);
                }
                return parent::beforeSave ();
        }
        
        /*
         * Tratar dados antes de passar para a view
         * 
         */
        protected function afterFind()
        {       
                $this->nome = MString::strtoupper($this->nome);
                return parent::afterFind ();
        }
}