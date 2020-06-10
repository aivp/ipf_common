<?php

    namespace AW\IPF\Models;

    use AW\IPF\Models\Scopes\EnterpriseScope;
    use Jenssegers\Mongodb\Eloquent\Model;


    class Carrier extends Model
    {


        //
        /**
         * 车辆信息表
         * 必须说明属性信息：
         * name                         type                default              comment
         * editTime                     string                                   编辑档案时间
         */

        const CAR_INSPECTION_NORMAL              = 1;
        const CAR_INSPECTION_EXPIRED             = 2;
        const CAR_INSPECTION_NOT_SET             = 3;
        const CAR_INSPECTION_NORMAL_DESCRIPTION  = '正常';
        const CAR_INSPECTION_EXPIRED_DESCRIPTION = '已到期';
        const CAR_INSPECTION_NOT_SET_DESCRIPTION = '未设置';
        const CAR_RUNNING_DESCRIPTION            = '运行中';
        const CAR_OUTAGE_DESCRIPTION             = '停运中';
        const CAR_REPAIR_DESCRIPTION             = '维修中';

        protected $collection = 'Carriers';// 车辆年检-正常
        protected $primaryKey = 'pid';// 车辆年检-已到期
        protected $hidden     = ['_id', 'updated_at', 'model', 'mastHeight'];// 车辆年检-未设置
        protected $dates      = ['deleted_at'];
        protected $appends    = ['attList', 'modelInfo', 'typeInfo', 'authType', 'deviceInfo', 'batteryState',
                                 'workTimeTotal',
                                 'workTimeMeter', 'organizationIfo', 'manufacturer', 'manufacturerInfo',
                                 'carrierModelTypeInfo', 'mseThreshold', 'customerName', 'manufacturerId'];


        /**
         * 禁止耗时操作添加
         *
         * @param $carrier
         *
         * @return stdClass
         */
        public static function getSimpleCarrier($carrier)
        {
            $tempCarrier = NULL;

            return $tempCarrier;
        }

        protected static function boot()
        {
            parent::boot();
            static::addGlobalScope(new EnterpriseScope);

        }

        public function scopeNothing($query)
        {
            return $query;
        }

        public function getOrganizationIfoAttribute()
        {
            $orgId = NULL;
            if (array_key_exists('enterpriseId', $this->attributes)) {
                $orgId = $this->attributes['enterpriseId'];
            }
            return $orgId;
        }

        public function getOrganizationList()
        {
            $info = NULL;
            if (array_key_exists('enterpriseId', $this->attributes)) {

            }
            return $info;
        }

        public function getMseThresholdAttribute()
        {
            $mseThreshold = '未设置';
            if (array_key_exists('pid', $this->attributes)) {

            }

            return $mseThreshold;

        }

        public function getAttListAttribute()
        {
            $attArray = [];
            if (array_key_exists('attList', $this->attributes)) {

            }
            return $attArray;
        }

        public function getModelInfoAttribute()
        {
            $info = NULL;
            if (array_key_exists('model', $this->attributes)) {

            }
            return $info;
        }

        public function getTypeInfoAttribute()
        {
            $info = NULL;
            if (array_key_exists('type', $this->attributes)) {

            }
            return $info;
        }

        public function getEnTypeInfo($name, $langType)
        {
            return NULL;
        }

        public function getDeviceInfoAttribute()
        {
            $info = NULL;
            if (array_key_exists('pid', $this->attributes)) {

            }
            return $info;
        }

        public function getBatteryStateAttribute()
        {
            $batteryState = NULL;
            if (array_key_exists('pid', $this->attributes)) {

            }

            return $batteryState;

        }

        public function getAuthTypeAttribute()
        {
            $authType = NULL;
            if (array_key_exists('pid', $this->attributes)) {

            }
            return $authType;
        }

        /** 累积小时数
         * @return integer
         */
        public function getWorkTimeTotalAttribute()
        {
            $workTimeTotal = NULL;
            if (array_key_exists('pid', $this->attributes)) {

            }
            return $workTimeTotal;
        }

        public function appendLangType($langType)
        {
            $this->langType = $langType;
            return $this;
        }

        public function getManufacturerColumn()
        {
            $manufacturer   = NULL;
            $attributes     = $this->attributes;
            $manufacturerId = NULL;
            if (isset($attributes['manufacturer'])) {
                $manufacturer = $attributes['manufacturer'];
            }
            return $manufacturer;
        }

        /** 获取品牌（字符串）
         * @return string
         */
        public function getManufacturerAttribute()
        {
            $manufacturer = NULL;

            return $manufacturer;
        }

        public function getManufacturerIdAttribute()
        {
            $attributes     = $this->attributes;
            $manufacturerId = NULL;
            if (isset($attributes['manufacturer'])) {
                $manufacturerId = $attributes['manufacturer'];
            }
            return $manufacturerId;
        }

        /** 获取品牌（数组）
         * @return array
         */
        public function getManufacturerInfoAttribute()
        {
            $manufacturer = [];

            return $manufacturer;
        }

        public function getCarrierModelTypeInfoAttribute()
        {
            $info = NULL;

            return $info;
        }

        public function getCustomerNameAttribute()
        {
            $customerName = NULL;

            return $customerName;
        }

        public function saveWithoutEvents(array $options = [])
        {
            return static::withoutEvents(function () use ($options) {
                return $this->save($options);
            });
        }

    }
