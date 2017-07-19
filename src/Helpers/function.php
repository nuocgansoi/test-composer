<?php
/**
 * Created by IntelliJ IDEA.
 * User: nuocgansoi
 * Date: 7/19/2017
 * Time: 11:12 AM
 */

if (!function_exists('date_converter')) {
    /**
     * @return \NGS\Helpers\DateConverter|mixed
     */
    function date_converter()
    {
        return app(\NGS\Helpers\DateConverter::class);
    }
}
