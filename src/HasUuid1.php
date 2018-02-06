<?php
namespace Vistag\EloquentUuid;

use Ramsey\Uuid\Uuid;

trait HasUuid1
{
    public static function bootHasUuid1()
    {
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = Uuid::uuid1()->toString();    
            }
        });
    }

    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
		return false;
    }
}