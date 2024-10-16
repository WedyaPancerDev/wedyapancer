<?php

use Wedyapancer\Wedyapancer\Helpers\Cuid;

trait HashCuid
{

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @return false
     */
    public function getIncrementing(): false
    {
        return false;
    }

    /**
     * Get the auto-incrementing key type.
     *
     * @codeCoverageIgnore
     * @return string
     */
    public function getKeyType(): string
    {
        return 'string';
    }

    /**
     * Get the CUID prefix.
     *
     * @codeCoverageIgnore
     * @return string
     */
    public static function getCuidPrefix(): string
    {
        return 'w';
    }

    /**
     * The booting method of the model.
     */
    protected static function bootHasCuid()
    {
        static::creating(function (self $model) {
            $model->{$model->getKeyName()} = Cuid::make(self::getCuidPrefix());
        });
    }
}
