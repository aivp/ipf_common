<?php
    /**
     * Created by PhpStorm.
     * User: wangqiang
     * Date: 2019-06-09
     * Time: 02:22
     */

    namespace  AW\IPF\Models;

    use Jenssegers\Mongodb\Eloquent\Model;

    class CanInfo extends Model
    {
        const CAN_DAILY_CARRIER = 1;
        const CAN_DAILY_DRIVER  = 2;
        protected $connection = NULL;
        protected $collection = 'CanInfo';
        protected $primaryKey = 'pid';

        public function __construct()
        {
            parent::__construct();
        }

        public function scopeNothing($query)
        {
            return $query;
        }
    }
