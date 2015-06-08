<?php namespace Sukohi\Encore;

use Illuminate\Support\Facades\Config;

class Encore {

    public function get($key, $closure) {

        if(!empty($key) && is_callable($closure)) {

            $config_key = $this->config_key($key);
            $data = Config::get($config_key);

            if(empty($data)) {

                $data = $closure();
                Config::set($config_key, $data);

            }

            return $data;

        }

        return false;

    }

    private function config_key($key) {

        return 'ENCORE_'. $key;

    }

}