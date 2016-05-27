<?php

namespace app\models;

use yii\mongodb\ActiveRecord;


class MotionEvents extends ActiveRecord
{

    /**
     * @return string the name of the index associated with this ActiveRecord class.
     */
    public static function collectionName() {
        return 'test';
    }

    /**
     * @return array list of attribute names.
     */
    public function attributes() {
        return ['_id', 'date', 'file', 'length'];
    }
}