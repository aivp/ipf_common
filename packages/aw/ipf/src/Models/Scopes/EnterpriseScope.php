<?php
    /**
     * Created by PhpStorm.
     * User: wangqiang
     * Date: 03/04/2018
     * Time: 11:00 AM
     */


    namespace AW\IPF\Models\Scopes;


    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Scope;
    use Illuminate\Support\Facades\Input;

    class EnterpriseScope implements Scope
    {

        /**
         * Apply the scope to a given Eloquent query builder.
         *
         * @param \Illuminate\Database\Eloquent\Builder $builder
         * @param \Illuminate\Database\Eloquent\Model   $model
         *
         * @return void
         */
        public function apply(Builder $builder, Model $model)
        {
          
        }
    }
