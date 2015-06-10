<?php
namespace Incremental\YouTubeTest;

use Incremental\YouTube\YouTube;

class YouTubeTest extends \PHPUnit_Framework_TestCase
{

    private $youtube = null;

    public function setup()
    {
        $this->youtube = new YouTube('YOUTUBE_API_KEY');
    }

    public function testInstanceOfYouTube()
    {
        $this->assertTrue($this->youtube instanceof YouTube);
    }

}
