<?php

    namespace AW\IPF\Models;

    use Illuminate\Database\Eloquent\Model;

    class CarrierSchedule extends Model
    {
        protected $connection = 'mysql';
        protected $table      = 'my_carrier_schedule';
        /**
         * 必须说明属性信息：
         * name                 type        default                         comment
         * carrierId            string      NOT NULL                         车辆id
         * shiftModelId         string      NULL                             班次模型id
         * parentShiftModelId   string      NULL                             班次模型id副本
         * 备注说明：shiftModelId与parentShiftModelId字段至少有一个存在
         * date                 datetime    NOT NULL                         日期
         * scheduleHistory      string      NOT NULL                         排班历史
         * scheduleHistory = [
         *          [
         *              08:00,上班时间
         *              13:00,下班时间
         *         ],
         *          [
         *              08:00,上班时间
         *              13:00,下班时间
         *         ],
         *          9000//当天班次工作总时间
         * ]
         *  totalWorkTime         int         NOT NULL                           当前班次总工时
         *  scheduleId            int         NOT NULL                           排班应用id
         */

        protected $hidden  = [];
        protected $appends = ['scheduleHistory'];

        public function __construct()
        {
            parent::__construct();
        }

        public function scopeNothing($query)
        {
            return $query;
        }

        public function getScheduleHistoryAttribute()
        {
            $scheduleHistory = [];
            if (array_key_exists('scheduleHistory', $this->attributes)) {
                $scheduleHistory = unserialize($this->attributes['scheduleHistory']);
            }
            return $scheduleHistory;
        }

    }
