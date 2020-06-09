<?php
    /**
     * Created by PhpStorm.
     * User: wangqiang
     * Date: 2019-06-09
     * Time: 02:22
     */

    namespace  AW\IPF\Models\Views;

    use Jenssegers\Mongodb\Eloquent\Model;


    class ChoiceModelView extends Model
    {
        protected $collection = 'Choices_Models_view';

        public function scopeNothing($query)
        {
            return $query;
        }
    }
