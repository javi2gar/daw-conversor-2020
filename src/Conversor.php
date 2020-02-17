<?php

/**
 * Conversor.php
 * PHP version 7.2
 *
 * @category Conversor
 *
 * @package Conversor
 *
 * @author Javier García García <vernedevelop@gmail.com>
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 *
 * @link http://www.vernedevelop.com
 **/

/**
 * Conversor Class Doc Comment
 *
 * @category Conversor
 *
 * @package Conversor
 *
 * @author Javier García García <vernedevelop@gmail.com>
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 *
 * @link http://www.vernedevelop.com
 **/

namespace Src;

class Conversor
{    
    public $dolar = 1.0835;
    public $yen = 119.05;


    public function getMoneda()
    {
        $URL = 'https://api.exchangeratesapi.io/latest?base=EUR';
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', $URL);
        $monedaString = $response->getBody()->getContents();   // String
        return json_decode($monedaString,true); // Array        
    }


    public function eurosADolares($euro)
    {
        $this->euro= $euro;
        return $this->dolar* $euro;
    }

    public function eurosAYenes($euro)
    {
        $this->euro= $euro;        
        return $this->yen * $euro;
    }
}