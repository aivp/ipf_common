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

        /**
         * 必须说明属性信息：
         * name                    type        default                         comment
         * _id                     id
         * pid                     string      nullable                        系统生成数据id，前缀为can_raw_info
         * carrierId               string      nullable                        车辆Id
         * deviceId                string      nullable                        设备号
         * rfid                    string      nullable                        司机刷卡的rfid
         * createdAt               int         nullable
         * hourOfCreatedAt         int         nullable
         * timestamp               int         nullable                        时间戳
         * avgVelocity             int         nullable                        车机的移动速度
         * distance                int         nullable                        车机的移动的距离
         * absDistance             int         nullable                        车机的距离上次位置移动的绝对距离（包括向前后者向后移动的距离），是累加的
         * movingTime              int         nullable                        车机的移动时间
         * batteryVolt             int         nullable                        叉车电池电压
         * batteryCurrent          int         nullable                        叉车的当前电流
         * batteryState            int         nullable                        叉车电池状态（是百分比的数据，比如50%）
         * brakeTime               int         nullable                        叉车刹车时间 >0 手刹拉起
         * seatTime                int         nullable                        叉车司机在驾驶座位时间 >0 在位 否则是离位
         * forkTime                int         nullable                        叉车的叉子移动的时间
         * overlapTime             int         nullable                        叉车运动同时叉子也在运动的时间
         * forkCounter             int         nullable                        叉车的叉的次数
         * moveCounter             int         nullable                        叉车的移动次数
         * forwardCounter          int         nullable                        叉车的向前移动的次数
         * reverseCounter          int         nullable                        叉车的向后移动的次数
         * directionChangeCounter  int         nullable                        叉车变向的次数
         * forwardTime             int         nullable                        叉车前移动时间
         * reverseTime             int         nullable                        叉车后移动时间
         * forwardDistance         int         nullable                        叉车前移距离
         * reverseDistance         int         nullable                        叉车后移距离
         * carryTime               int         nullable                        叉车载货时间：2019-06-03 新增叉车载货时间
         * carryCount              int         nullable                        叉车载货次数：2019-06-03 新增叉车载货次数
         * driverId                string      nullable                        驾驶员 ID
         * turnOnTime              float       nullable                        车辆开机时长
         */
    }
