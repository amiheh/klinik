<?php
namespace app\components;

use Yii;
use yii\base\Component;

class helper extends Component{
    private $genderUser = [
        '1' => 'Laki-Laki',
        '2' => 'Perempuan'
    ];
    private $levelUser = [
        '1' => 'Manager',
        '2' => 'Admin',
        '3' => 'Dokter',
        '4' => 'Perawat',
        '5' => 'Kasir'
    ];
    public function listGenderUser()
    {
        return $this->genderUser;
    }
    public function listLevelUser()
    {
        return $this->levelUser;
    }
    public function getGenderUser($id)
    {
        return $this->genderUser[$id];
    }
    public function getLevelUser($id)
    {
        return $this->levelUser[$id];
    }
}