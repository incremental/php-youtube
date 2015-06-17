<?php
namespace Incremental\YouTubeTest;

use Incremental\YouTube\YouTube;

class YouTubeTest extends \PHPUnit_Framework_TestCase
{

    private $youtube;

    public function setup()
    {
        $this->youtube = new YouTube('AIzaSyAw2AcnJ_dH6raxt_yIIw_N4_WUbuxYnps');
    }

    public function testInstanceOfYouTube()
    {
        $this->assertTrue($this->youtube instanceof YouTube);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListActivitiesThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listActivities([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
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

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListChannelsThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listChannels([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListChannelsThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listChannels(['part' => 'id']);
    }

    public function testListChannels()
    {
        $response = $this->youtube->listChannels([
            'part'          => 'snippet',
            'categoryId'    => 'GCQmVzdCBvZiBZb3VUdWJl'
        ]);

        $this->assertEquals($response['kind'], 'youtube#channelListResponse');
    }
}
