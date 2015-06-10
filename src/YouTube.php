<?php

namespace Incremental\YouTube;

class YouTube
{
    
    /**
     * @access  protected
     * @var     string
     */
    protected $apiKey;

    /**
     * @access  public
     * @param   string  $apiKey An API key for communication with the YouTube API.
     * @return  void
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

}

