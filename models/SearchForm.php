<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * SearchForm is the model behind the contact form.
 */
class SearchForm extends Model
{
    public $location;
    public $profession;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // location, profession are required
            [['location', 'profession'], 'safe'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'location' => 'בחר מיקום',
            'profession' => 'בחר מקצוע',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function search($email)
    {
        if ($this->validate()) {
            // TODO Add the search logic
            return true;
        }
        return false;
    }
}
