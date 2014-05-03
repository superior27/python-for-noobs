<?php

/**
 * This is the model class for table "course".
 *
 * The followings are the available columns in table 'course':
 * @property integer $id
 * @property string $name
 * @property string $schedule
 * @property integer $paid
 * @property string $notebook
 * @property integer $tbl_user_id
 *
 * The followings are the available model relations:
 * @property TblUser $tblUser
 */
class Course extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $userName;

	public function afterFind(){
		if(!empty($this->tblUser)){
			
				$this->userName=$this->tblUser->name;

			

		}

	}


	public function tableName()
	{
		return 'course';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, schedule, paid, tbl_user_id', 'required'),
			array('paid, tbl_user_id', 'numerical', 'integerOnly'=>true),
			array('name, schedule', 'length', 'max'=>255),
			array('notebook', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, schedule, paid, notebook, tbl_user_id', 'safe', 'on'=>'search'),
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
			'tblUser' => array(self::BELONGS_TO, 'User', 'tbl_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Nome do Curso',
			'schedule' => 'Horário',
			'paid' => 'Pago',
			'notebook' => 'Notebook',
			'tbl_user_id' => 'ID do Aluno',
			'userName'=>'Nome do Aluno'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('schedule',$this->schedule,true);
		$criteria->compare('paid',$this->paid);
		$criteria->compare('notebook',$this->notebook,true);
		$criteria->compare('tbl_user_id',$this->tbl_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Course the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
