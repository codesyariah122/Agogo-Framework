<?php
/**
 * @author : Puji Ermanto <pujiermanto@gmail.com>
 * @return _
 **/

namespace Core;

use App\Config\Database;

class ServiceContainer {
    protected $instances = [];

    public function getDatabase() {
        if (!isset($this->instances['db'])) {
            $this->instances['db'] = Database::connection();
        }
        return $this->instances['db'];
    }
}