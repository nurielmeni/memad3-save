<?php
namespace app\widgets;

use Yii;

/**

 */
class Memad3Social extends \yii\bootstrap\Widget
{
    /**
     * @var array the alert types configuration for the flash messages.
     * This array is setup as $key => $value, where:
     * - key: the name of the session flash variable
     * - value: the bootstrap alert type (i.e. danger, success, info, warning)
     */
    public $socials = [];
    
    private function getSocials() {
        $res = '<ul class="social pull-left nav navbar-nav flex">';
        foreach ($this->socials as $name => $url) {
            $res .= '<li style="width: 40px; height: 40px; background-image: linear-gradient(to right, #00c0ff 0%, #88ffff 100%); border-radius: 20px; margin: 5px;"><a style="padding: 10px 0; text-align: center; color: #fff; font-size: 22px; font-weight: bold;" href="' . $url . '">' . $name . '</a></li>';
        }
        $res .= '</ul>';
        return $res;
    }
    
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        return $this->getSocials();       
    }
}
