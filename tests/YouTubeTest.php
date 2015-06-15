<?php
namespace Incremental\YouTubeTest;

use Incremental\YouTube\YouTube;

class YouTubeTest extends \PHPUnit_Framework_TestCase
{

    private $youtube = null;

    public function setup()
    {
        $this->youtube = new YouTube('AIzaSyAw2AcnJ_dH6raxt_yIIw_N4_WUbuxYnps');
    }

    public function testInstanceOfYouTube()
    {
        $this->assertTrue($this->youtube instanceof YouTube);
    }

    /**
     * @expectedException           InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListActivitiesThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listActivities([]);
    }

    /**
     * @expectedException           InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "channelId" parameter.
     */
    public function testListActivitiesThrowsExceptionOnMissingChannelIdParameter()
    {
        $this->youtube->listActivities(['part' => 'id']);
    }

    public function testListActivities()
    {
        $response = $this->youtube->listActivities([
            'part'      => 'snippet',
            'channelId' => 'UCVHFbqXqoYvEWM1Ddxl0QDg'
        ]);

        $this->assertEquals($response['kind'], 'youtube#activityListResponse');
    }

}
