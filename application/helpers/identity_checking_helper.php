<?php
/**
 * This <angket.bkritis.app> project created by :
 * Name         : syafiq
 * Date / Time  : 09 May 2017, 2:47 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */


if (!function_exists('isStudentIdentityComplete'))
{
    function isStudentIdentityIsComplete($auth)
    {
        $complete = false;
        if (
            (!empty($auth['grade'])) &&
            (!empty($auth['school'])) &&
            (!empty($auth['address'])) &&
            (!empty($auth['birthplace'])) &&
            (!empty($auth['datebirth']))
        )
        {
            $complete = true;
        }

        return $complete;
    }
}

if (!function_exists('isCounselorIdentityComplete'))
{
    function isCounselorIdentityComplete($auth)
    {
        $complete = false;
        if (
            (!empty($auth['school'])) &&
            (!empty($auth['address'])) &&
            (!empty($auth['school_address'])) &&
            (!empty($auth['head'])) &&
            (!empty($auth['head_credential'])) &&
            (!empty($auth['birthplace'])) &&
            (!empty($auth['datebirth']))
        )
        {
            $complete = true;
        }

        return $complete;
    }
}
