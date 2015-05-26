<?php
/**
 * Created by PhpStorm.
 * User: MJA
 * Date: 26.05.2015
 * Time: 15:20
 */

namespace kurma\helper;

use kurma\Setup;
use kurma\models\Users;

class Routing {

    public function setupRouting(Setup $app){
        $app->group('/api', function() use($app){
            $app->get('/', function() {
                $kurma = Users::all()->toJson();
               echo $kurma;
            });
        });
    }
} 