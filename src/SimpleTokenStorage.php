<?php
namespace DoubleBreak\Spapi;
use DoubleBreak\Spapi\TokenStorageInterface;
use Illuminate\Redis\RedisManager;

class SimpleTokenStorage implements TokenStorageInterface {

    private $cacheKey;
    private $prefix;
    public function __construct($cacheKey, $prefix = '')
    {
        $this->cacheKey = $cacheKey;
        $this->prefix = $prefix;
    }


    public function getToken($key): ?array
    {
        $content = $this->get($this->cacheKey);
        if ($content) {
            $json = json_decode($content, true);
            return $json[$key] ?? null;
        }
        return null;
    }


    
    public function storeToken($key, $value)
    {
        $json = [];
        $content = $this->get($this->cacheKey);
        if ($content != '') {
            $json = json_decode($content, true);
        }
        $json[$key] = $value;
        $json = json_encode($json, JSON_UNESCAPED_UNICODE);
        $expiresOn = $value['expiresOn'] - time();
        $this->setex($this->cacheKey, $expiresOn, $json);
    }


    public function get($key)
    {
        $redis = $this->getNewRedis();
        return $redis->get($key);
    }


    public function setex($key, $time, $value)
    {
        $redis = $this->getNewRedis();
        return $redis->setex($key, $time, $value);
    }


    protected function getNewRedis($prefix = '')
    {
        if (empty($prefix)) $prefix = $this->prefix;
        $newConfig = config('database.redis');
        $newConfig['options']['prefix'] = $prefix;
        return new RedisManager(app(), $newConfig['client'], $newConfig);
    }
}
