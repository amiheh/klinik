<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $username
 * @property string $password
 * @property int $level_user
 * @property string $nama_user
 * @property int $gender_user
 * @property string $alamat_user
 * @property string $telepon_user
 */
class Pegawai extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'level_user', 'nama_user', 'gender_user', 'alamat_user', 'telepon_user'], 'required'],
            [['level_user', 'gender_user'], 'integer'],
            [['alamat_user'], 'string'],
            [['username', 'password'], 'string', 'max' => 32],
            [['nama_user'], 'string', 'max' => 255],
            [['telepon_user'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'username' => 'Username',
            'password' => 'Password',
            'level_user' => 'Level User',
            'nama_user' => 'Nama User',
            'gender_user' => 'Gender User',
            'alamat_user' => 'Alamat User',
            'telepon_user' => 'Telepon User',
        ];
    }

    public static function findByUsername($username)
    {
        $user = self::find()->where([
            "username" => $username
        ])->one();
        if (is_null($user)) {
            return null;
        }
        return new static($user);
    }

    public static function findIdentity($id)
    {
        $user = self::find()
        ->where([
            "id_pegawai" => $id
        ])
        ->one();
        if (is_null($user)) {
            return null;
        }
        return new static($user);
    }

  /**
  * @inheritdoc
  */
    public static function findIdentityByAccessToken($token, $userType = null) {
        $user = self::find()
        ->where(["accessToken" => $token])
        ->one();
        if (!count($user)) {
          return null;
        }
        return new static($user);
    }


    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id_pegawai;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        //return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        //return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
