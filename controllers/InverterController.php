<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/02/2018
 * Time: 17:09
 */

class InverterController
{
    public function cronjobAction()
    {
        $ip = '192.168.178.41';

        $zeverSolarInverter = new ZeverSolarInverter($ip);

        $data = $zeverSolarInverter->poll();

        if($data)
        {
            print_r($data);
        }
    }
}