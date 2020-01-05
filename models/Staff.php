<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $fullname
 * @property string $jobTitle
 * @property string $description
 * @property string $email
 * @property string $in
 * @property string $imageUrl
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'jobTitle'], 'required'],
            ['email', 'email'],
            ['in', 'url'],
            [['description'], 'string'],
            [['fullname'], 'string', 'max' => 64],
            [['jobTitle', 'email', 'in'], 'string', 'max' => 256],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            ['imageUrl', 'safe'],
        ];
    }

    public function upload()
    {
        if (!empty($this->imageFile)) {
            $this->imageUrl = Url::to('@web/uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension, true);
            $this->imageFile->saveAs(Url::to('@web/uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fullname' => Yii::t('app', 'Fullname'),
            'jobTitle' => Yii::t('app', 'Job Title'),
            'description' => Yii::t('app', 'Description'),
            'email' => Yii::t('app', 'Email'),
            'in' => Yii::t('app', 'In'),
            'imageUrl' => Yii::t('app', 'Image Url'),
            'imageFile' => Yii::t('app', 'Image Url'),
        ];
    }
}
