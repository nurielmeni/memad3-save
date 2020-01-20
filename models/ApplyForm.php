<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class ApplyForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $cvFile;

    public function rules()
    {
        return [
            [['cvFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'docx, doc, pdf'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $this->cvFile->saveAs('uploads/cvFiles/' . $this->cvFile->baseName . '.' . $this->cvFile->extension);
            return true;
        } else {
            return false;
        }
    }
}