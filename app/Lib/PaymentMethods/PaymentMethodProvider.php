<?php

namespace App\Lib\PaymentMethods;

class PaymentMethodProvider
{
    protected static $methods = [

    ];

    /**
     * @return PaymentMethod
     *
     * @throws \Exception
     */
    public static function get(\App\Enums\PaymentMethod $enum)
    {
        foreach (static::all() as $method) {
            if ($method->methodEnum()->is($enum)) {
                return $method;
            }
        }
        throw new \Exception('No payment method found for ' . $enum->key);
    }

    public static function all()
    {
        return array_map(function ($method) {
            return app($method);
        }, static::$methods);
    }

    public static function availables()
    {
        return array_filter(static::all(), function (PaymentMethod $method) {
            return $method->available();
        });
    }

    public static function getCashInInputs()
    {
        $inputs = [];
        foreach (self::cashInAbles() as $method) {
            $inputs[$method->methodEnum()->value] = $method->inputsForCashIn();
        }

        return $inputs;
    }

    public static function cashInAbles()
    {
        return array_filter(static::all(), function (PaymentMethod $method) {
            return $method instanceof CashInAble;
        });
    }

    public static function getCashInInfos()
    {
        $infos = [];
        foreach (self::cashInAbles() as $method) {
            $infos[$method->methodEnum()->value] = $method->cashInInfo();
        }

        return $infos;
    }

    public static function getWithdrawInputs()
    {
        $inputs = [];
        foreach (self::withdrawAbles() as $method) {
            $inputs[$method->methodEnum()->value] = $method->inputsForWithdraw();
        }

        return $inputs;
    }

    public static function withdrawAbles()
    {
        return array_filter(static::all(), function (PaymentMethod $method) {
            return $method instanceof WithdrawAble;
        });
    }
}
