<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\News]].
 *
 * @see \app\models\News
 */
class NewsQuery extends \yii\db\ActiveQuery
{
    public function publication()
    {
        return $this->andWhere(['publication' => true]);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\News[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\News|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
