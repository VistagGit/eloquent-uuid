<?php
namespace Vistag\EloquentUuid;

use Ramsey\Uuid\Uuid;

trait HasUuid4
{
    public static function bootHasUuid4()
    {
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = Uuid::uuid4()->toString();    
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