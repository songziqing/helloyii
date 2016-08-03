<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $message
 * @property integer $permission
 * @property string $created_at
 * @property string $updated_at
 */
class Status extends \yii\db\ActiveRecord
{
    const PERMISSIONS_PRIVATE = 10;
    const PERMISSIONS_PUBLIC = 20;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message','permission'], 'required'],
            [['message'], 'string'],
            [['permission'], 'integer'],
//            [['created_at', 'updated_at'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message' => '说说',
            'permission' => '权限',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    public function getPermissions() {
        return array (self::PERMISSIONS_PRIVATE=>'不公开',self::PERMISSIONS_PUBLIC=>'公开');
    }

    public static function getPermissionsLabel($permissions) {
        if ($permissions==self::PERMISSIONS_PUBLIC) {
            return '公开';
        } else {
            return '不公开';
        }
    }
}
