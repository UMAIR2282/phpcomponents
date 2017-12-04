<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 12/4/2017
 * Time: 3:17 PM
 */

namespace Helpers;


class DataHelper
{
    public static function IsValidInteger($val)
    {
        if(!isset($val) || $val == null || intval($val) <= 0)
        {
            return false;
        }

        return true;
    }

    public static function IsValidString($val)
    {
        if(DataHelper::IsNullOrWhitespace($val))
        {
            return false;
        }

        return true;
    }

    public static function IsValidArray($val)
    {
        if(!isset($val) || $val == null || !is_array($val) || count($val) <= 0)
        {
            return false;
        }

        return true;
    }

    public static function IsNullOrWhitespace($val)
    {
        if(!isset($val) || $val == null || strlen(trim($val)) <= 0)
        {
            return true;
        }

        return false;
    }

    public static function IsNullOrEmpty($val)
    {
        if(!isset($val) || $val == null || strlen($val) <= 0)
        {
            return true;
        }

        return false;
    }

    public static function IsValidBoolean($val)
    {
        if(!isset($val) || $val == null)
        {
            return false;
        }

        try
        {
            if(boolval($val) === true || boolval($val) === false)
            {
                return true;
            }
        }
        catch(\Exception $ex)
        {

        }


        return false;
    }

    public static function IsValidDate($val)
    {
        if(strtotime("1970-01-01") < strtotime($val))
        {
            return true;
        }
        return false;
    }
}