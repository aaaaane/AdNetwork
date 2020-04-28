<?php declare(strict_types=1);

final class SspRequest
{
    private $key;
    private $sz;
    private $os;
    private $ip;
    private $source;
    private $ab;
    private $aid;
    private $mraid;
    private $ua;
    private $cb;
    private $timeout;
    private $lat;
    private $lon;
    private $secure;
    private $test;

    /**
     * SspRequest constructor.
     * @param $key
     * @param $sz
     * @param $os
     * @param $ip
     * @param $source
     * @param $ab
     * @param $aid
     * @param $mraid
     * @param $ua
     * @param $cb
     * @param $timeout
     * @param $lat
     * @param $lon
     * @param $secure
     * @param $test
     */
    public function __construct($key, $sz, $os, $ip, $source, $ab, $aid, $mraid, $ua, $cb, $timeout, $lat, $lon, $secure, $test)
    {
        $this->key = $key;
        $this->sz = $sz;
        $this->os = $os;
        $this->ip = $ip;
        $this->source = $source;
        $this->ab = $ab;
        $this->aid = $aid;
        $this->mraid = $mraid;
        $this->ua = $ua;
        $this->cb = $cb;
        $this->timeout = $timeout;
        $this->lat = $lat;
        $this->lon = $lon;
        $this->secure = $secure;
        $this->test = $test;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function getSz()
    {
        return $this->sz;
    }

    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return mixed
     */
    public function getAb()
    {
        return $this->ab;
    }

    /**
     * @return mixed
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @return mixed
     */
    public function getMraid()
    {
        return $this->mraid;
    }

    /**
     * @return mixed
     */
    public function getUa()
    {
        return $this->ua;
    }

    /**
     * @return mixed
     */
    public function getCb()
    {
        return $this->cb;
    }

    /**
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return mixed
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * @return mixed
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * @return mixed
     */
    public function getTest()
    {
        return $this->test;
    }


    public function toUrlEncoded(): string
    {
        return '?key=' . urlencode($this->getKey()) . '&sz=' .
            urlencode($this->getSz()) . '&os=' .
            urlencode($this->getOs()) . '&ip=' .
            urlencode($this->getIp()) . '&source=' .
            urlencode($this->getSource()) . '&ab=' .
            urlencode($this->getAb()) . '&aid=' .
            urlencode($this->getAid()) . '&mraid=' .
            urlencode($this->getMraid()) . '&ua=' .
            urlencode($this->getUa()) . '&cb=' .
            urlencode($this->getCb()) . '&timeout=' .
            urlencode($this->getTimeout()) . '&lat=' .
            urlencode((string)$this->getLat()) . '&lon=' .
            urlencode((string)$this->getLon()) . '&secure=' .
            urlencode((string)$this->getSecure()) . '&test=' .
            urlencode((string)$this->getTest());
    }
}