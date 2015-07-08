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
            'part'          => 'id',
            'channelId'     => 'UCVHFbqXqoYvEWM1Ddxl0QDg',
            'maxResults'    => 1,
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
            'part'          => 'id',
            'categoryId'    => 'GCQmVzdCBvZiBZb3VUdWJl',
            'maxResults'    => 1,
        ]);

        $this->assertEquals($response['kind'], 'youtube#channelListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListChannelSectionsThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listChannelSections([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListChannelSectionsThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listChannelSections(['part' => 'id']);
    }

    public function testListChannelSections()
    {
        $response = $this->youtube->listChannelSections([
            'part'      => 'id',
            'channelId' => 'UCVHFbqXqoYvEWM1Ddxl0QDg',
        ]);

        $this->assertEquals($response['kind'], 'youtube#channelSectionListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListCommentsThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listComments([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListCommentsThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listComments(['part' => 'id']);
    }

    public function testListComments()
    {
        $response = $this->youtube->listComments([
            'part'          => 'id',
            'id'            => 'z131gtcqbqbft5y3x22jfvmoakf3ezfsi',
            'maxResults'    => 1,
        ]);

        $this->assertEquals($response['kind'], 'youtube#commentListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListCommentThreadsThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listCommentThreads([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListCommentThreadsThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listCommentThreads(['part' => 'id']);
    }

    public function testListCommentThreads()
    {
        $response = $this->youtube->listCommentThreads([
            'part'          => 'id',
            'videoId'       => 'TieksFvD-7o',
            'maxResults'    => 1,
        ]);

        $this->assertEquals($response['kind'], 'youtube#commentThreadListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListGuideCategoriesThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listGuideCategories([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListGuideCategoriesThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listGuideCategories(['part' => 'id']);
    }

    public function testListGuideCategories()
    {
        $response = $this->youtube->listGuideCategories([
            'part'          => 'id',
            'regionCode'    => 'NL',
        ]);

        $this->assertEquals($response['kind'], 'youtube#guideCategoryListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListI18nLanguagesThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listI18nLanguages([]);
    }

    public function testListI18nLanguages()
    {
        $response = $this->youtube->listI18nLanguages([
            'part'          => 'id',
        ]);

        $this->assertEquals($response['kind'], 'youtube#i18nLanguageListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListI18nRegionsThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listI18nRegions([]);
    }

    public function testListI18nRegions()
    {
        $response = $this->youtube->listI18nRegions([
            'part'          => 'id',
        ]);

        $this->assertEquals($response['kind'], 'youtube#i18nRegionListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListPlaylistItemsThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listPlaylistItems([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListPlaylistItemsThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listPlaylistItems(['part' => 'id']);
    }

    public function testListPlaylistItems()
    {
        $response = $this->youtube->listPlaylistItems([
            'part'          => 'id',
            'playlistId'    => 'PLWz5rJ2EKKc9ofd2f-_-xmUi07wIGZa1c',
            'maxResults'    => 1,
        ]);

        $this->assertEquals($response['kind'], 'youtube#playlistItemListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListPlaylistsThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listPlaylists([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListPlaylistsThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listPlaylists(['part' => 'id']);
    }

    public function testListPlaylists()
    {
        $response = $this->youtube->listPlaylists([
            'part'      => 'id',
            'channelId' => 'UCVHFbqXqoYvEWM1Ddxl0QDg',
            'maxResults' => 1,
        ]);

        $this->assertEquals($response['kind'], 'youtube#playlistListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListSearchThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listSearch([]);
    }

    public function testListSearch()
    {
        $response = $this->youtube->listSearch([
            'part'          => 'id',
            'channelId'     => 'UC_x5XG1OV2P6uZZ5FSM9Ttw',
            'q'             => 'Google I/O',
            'maxResults'    => 1,
        ]);

        $this->assertEquals($response['kind'], 'youtube#searchListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListSubscriptionsThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listSubscriptions([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListSubscriptionsThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listSubscriptions(['part' => 'id']);
    }

    public function testListSubscriptions()
    {
        $response = $this->youtube->listSubscriptions([
            'part'      => 'id',
            'channelId' => 'UC_x5XG1OV2P6uZZ5FSM9Ttw',
            'maxResults' => 1,
        ]);

        $this->assertEquals($response['kind'], 'youtube#subscriptionListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListVideoCategoriesThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listVideoCategories([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListVideoCategoriesThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listVideoCategories(['part' => 'id']);
    }

    public function testListVideoCategories()
    {
        $response = $this->youtube->listVideoCategories([
            'part'          => 'id',
            'regionCode'    => 'NL',
        ]);

        $this->assertEquals($response['kind'], 'youtube#videoCategoryListResponse');
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing the required "part" parameter.
     */
    public function testListVideosThrowsExceptionOnMissingPartParameter()
    {
        $this->youtube->listVideos([]);
    }

    /**
     * @expectedException           \InvalidArgumentException
     * @expectedExceptionMessage    Missing a required filter parameter
     */
    public function testListVideosThrowsExceptionOnMissingFilterParameter()
    {
        $this->youtube->listVideos(['part' => 'id']);
    }

    public function testListVideos()
    {
        $response = $this->youtube->listVideos([
            'part'          => 'id',
            'chart'         => 'mostPopular',
            'maxResults'    => 1,
        ]);

        $this->assertEquals($response['kind'], 'youtube#videoListResponse');
    }
}
