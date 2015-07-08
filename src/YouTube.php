<?php
namespace Incremental\YouTube;

/**
 * An easy-to-use wrapper for the non-OAuth YouTube API (v3) endpoints.
 *
 * @package Incremental\YouTube
 */
class YouTube
{
    /**
     * @access  protected
     * @var     string
     */
    protected $apiKey;

    /**
     * @access  private
     * @var     string
     */
    private $baseUri = 'https://www.googleapis.com/youtube/v3';

    /**
     * @access  private
     * @var     string
     */
    private $apiUri;

    /**
     * @access  private
     * @var     array
     */
    private $filters;

    /**
     * @access  public
     * @param   string  $apiKey An API key for communication with the API.
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Returns a list of channel activity events that match the given channelId.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/activities/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listActivities($parameters)
    {
        $this->apiUri   = $this->baseUri . '/activities';
        $this->filters  = ['channelId'];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a collection of zero or more channel resources that match the request criteria.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/channels/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listChannels($parameters)
    {
        $this->apiUri   = $this->baseUri . '/channels';
        $this->filters  = [
            'categoryId',
            'forUsername',
            'id',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a list of channelSection resources that match the request criteria.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/channelSections/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listChannelSections($parameters)
    {
        $this->apiUri   = $this->baseUri . '/channelSections';
        $this->filters  = [
            'channelId',
            'id',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a list of comments that match the request criteria.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/comments/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listComments($parameters)
    {
        $this->apiUri   = $this->baseUri . '/comments';
        $this->filters  = [
            'id',
            'parentId',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a list of comment threads that match the request criteria.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/commentThreads/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listCommentThreads($parameters)
    {
        $this->apiUri   = $this->baseUri . '/commentThreads';
        $this->filters  = [
            'allThreadsRelatedToChannelId',
            'channelId',
            'id',
            'videoId',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a list of categories that can be associated with YouTube channels.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/guideCategories/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listGuideCategories($parameters)
    {
        $this->apiUri   = $this->baseUri . '/guideCategories';
        $this->filters  = [
            'id',
            'regionCode',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a list of application languages that the YouTube website supports.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/i18nLanguages/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listI18nLanguages($parameters)
    {
        $this->apiUri   = $this->baseUri . '/i18nLanguages';
        $this->filters  = [];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a list of content regions that the YouTube website supports.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/i18nRegions/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listI18nRegions($parameters)
    {
        $this->apiUri   = $this->baseUri . '/i18nRegions';
        $this->filters  = [];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a collection of playlist items that match the API request parameters.
     * You can retrieve all of the playlist items in a specified playlist or retrieve
     * one or more playlist items by their unique IDs.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/playlistItems/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listPlaylistItems($parameters)
    {
        $this->apiUri   = $this->baseUri . '/playlistItems';
        $this->filters  = [
            'id',
            'playlistId',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a collection of playlists that match the API request parameters.
     * For example, you can retrieve one or more playlists by their unique IDs.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/playlists/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listPlaylists($parameters)
    {
        $this->apiUri   = $this->baseUri . '/playlists';
        $this->filters  = [
            'channelId',
            'id',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a collection of search results that match the query parameters
     * specified in the API request. By default, a search result set identifies
     * matching video, channel, and playlist resources, but you can also configure
     * queries to only retrieve a specific type of resource.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/search/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listSearch($parameters)
    {
        $this->apiUri           = $this->baseUri . '/search';
        $this->filters          = [];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns subscription resources that match the API request criteria.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/subscriptions/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listSubscriptions($parameters)
    {
        $this->apiUri   = $this->baseUri . '/subscriptions';
        $this->filters  = [
            'channelId',
            'id',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a list of categories that can be associated with YouTube videos.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/videoCategories/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listVideoCategories($parameters)
    {
        $this->apiUri   = $this->baseUri . '/videoCategories';
        $this->filters  = [
            'id',
            'regionCode',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Returns a list of videos that match the API request parameters.
     *
     * For more in-depth info check out the YouTube API documentation at
     * https://developers.google.com/youtube/v3/docs/videos/list.
     *
     * @access  public
     * @param   array   $parameters An array of parameters to pass to the API.
     * @throws  \InvalidArgumentException
     * @return  array
     */
    public function listVideos($parameters)
    {
        $this->apiUri   = $this->baseUri . '/videos';
        $this->filters  = [
            'chart',
            'id',
        ];

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        $response = $this->callApi($parameters);

        return json_decode($response, true);
    }

    /**
     * Perform a cURL call to the YouTube API using the $parameters payload and
     * of method $method.
     *
     * @access  private
     * @param   array   $parameters An array of parameters to pass to the API.
     * @return  string
     */
    private function callApi($parameters)
    {
        $this->checkFilters($parameters);

        $handle     = curl_init();
        $finalUrl   = $this->apiUri . '?' . http_build_query($parameters) . '&key=' . $this->apiKey;

        curl_setopt_array($handle, [
            CURLOPT_HEADER         => false,
            CURLOPT_POST           => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL            => $finalUrl,
        ]);

        $response = curl_exec($handle);
        curl_close($handle);

        return $response;
    }

    /**
     * Check if at least one of the filters currently set in $this->filters occurs
     * in $parameters.
     *
     * @access  private
     * @param   array   $parameters An array of properties passed to the called method.
     * @throws  \InvalidArgumentException
     */
    private function checkFilters($parameters)
    {
        $atLeastOneFilterSet = false;

        foreach ($this->filters as $filter) {
            if (array_key_exists($filter, $parameters)) {
                $atLeastOneFilterSet = true;
            }
        }

        if (!$atLeastOneFilterSet && !empty($this->filters)) {
            throw new \InvalidArgumentException(
                'Missing a required filter parameter (' . join(', ', $this->filters) . ').'
            );
        }
    }
}
