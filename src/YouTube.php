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
        $this->apiUri = $this->baseUri . '/activities';

        if (empty($parameters) || !isset($parameters['part'])) {
            throw new \InvalidArgumentException(
                'Missing the required "part" parameter.'
            );
        }

        if (!isset($parameters['channelId'])) {
            throw new \InvalidArgumentException(
                'Missing the required "channelId" parameter.'
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
        $handle = curl_init();

        $finalUrl = $this->apiUri . '?' . http_build_query($parameters) . '&key=' . $this->apiKey;

        curl_setopt_array($handle, [
            CURLOPT_HEADER          => false,
            CURLOPT_POST            => false,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_URL             => $finalUrl
        ]);

        $response = curl_exec($handle);
        curl_close($handle);

        return $response;
    }
}
