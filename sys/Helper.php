<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *  "driver" :"mysql",   
    "dbhost": "172.17.0.2",
    "dbuser": "root",
    "dbname": "blog",
    "dbpass": "linuxlinux"
 * toni config.json
 */

namespace App\Sys;

/**
 * Description of Helper
 *
 * @author linux
 */
class Helper{
    
    
    static function getConfig(){
        
        return (array) json_decode(file_get_contents(CONF));
    }
}


