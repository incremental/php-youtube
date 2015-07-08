[![Build Status](https://travis-ci.org/incremental/php-youtube.svg?branch=master)](https://travis-ci.org/incremental/php-youtube)

# PHP-YouTube
This library aims at providing an easy-to-use wrapper for the non-OAuth YouTube API (v3) endpoints.

---

## Supported actions
- [youtube.activities.list](#youtubeactivitieslist)
- [youtube.channels.list](#youtubechannelslist)

---

### youtube.activities.list
Returns a list of channel activity events that match the given channel id.

For more information, take a look at [https://developers.google.com/youtube/v3/docs/activities/list](https://developers.google.com/youtube/v3/docs/activities/list).

```php
<?php

use Incremental\Youtube\YouTube;

$youtube = new YouTube('YOUR_API_KEY');
$response = $youtube->listActivities([
    'part'       => 'id',
    'channelId'  => 'UCVHFbqXqoYvEWM1Ddxl0QDg',
    'maxResults' => 1
]);

print_r($response);

/**
 * Array
 * (
 *     [kind] => youtube#activityListResponse
 *     [etag] => "eYE31WLho912TfxEBDDRSwEQ5Ms/LZ35K6cHrk3gvAbMl22qG9gJzlk"
 *     [nextPageToken] => CAEQAA
 *     [pageInfo] => Array
 *         (
 *             [totalResults] => 9
 *             [resultsPerPage] => 1
 *         )
 *
 *     [items] => Array
 *         (
 *             [0] => Array
 *                 (
 *                     [kind] => youtube#activity
 *                     [etag] => "eYE31WLho912TfxEBDDRSwEQ5Ms/WcC5XzEdaxXmLhsuZ1s9_CBqix8"
 *                     [id] => VTE0MzQwNDMxMDYxNDAxNDY3MTQzNjM5MjA=
 *                 )
 *
 *         )
 *
 * )
 */
```

---

### youtube.channels.list
Returns a collection of zero or more channel resources that match the request criteria.

For more information, take a look at [https://developers.google.com/youtube/v3/docs/channels/list](https://developers.google.com/youtube/v3/docs/channels/list).

```php
<?php

use Incremental\Youtube\YouTube;

$youtube = new YouTube('YOUR_API_KEY');
$response = $youtube->listChannels([
    'part'       => 'id',
    'channelId'  => 'GCQmVzdCBvZiBZb3VUdWJl',
    'maxResults' => 1
]);

print_r($response);

/**
 * Array
 * (
 *     [kind] => youtube#channelListResponse
 *     [etag] => "eYE31WLho912TfxEBDDRSwEQ5Ms/vScTfQD3jJn-MzW5d9kDHIJU61w"
 *     [nextPageToken] => CAEQAA
 *     [pageInfo] => Array
 *         (
 *             [totalResults] => 11
 *             [resultsPerPage] => 1
 *         )
 *
 *     [items] => Array
 *         (
 *             [0] => Array
 *                 (
 *                     [kind] => youtube#channel
 *                     [etag] => "eYE31WLho912TfxEBDDRSwEQ5Ms/sgkeX05nlECWsuF-d1WorqhxJVQ"
 *                     [id] => UCF0pVplsI8R5kcAqgtoRqoA
 *                 )
 *
 *         )
 *
 * )
 */
```

### youtube.videos.list
Returns a collection of the most populair videos.

For more information, take a look at [https://developers.google.com/youtube/v3/docs/videos/list](https://developers.google.com/youtube/v3/docs/videos/list).

```php
<?php

require_once ('vendor/autoload.php');

use Incremental\YouTube\YouTube;

	$youtube = new YouTube('AIzaSyAw2AcnJ_dH6raxt_yIIw_N4_WUbuxYnps');
	$response = $youtube->listVideos([
	    'part'       => 'id',
	    'chart'		 => 'mostPopular' 
	    ]);

	print_r($response);

?>

/**
* Array
* (
*    [kind] => youtube#videoListResponse
*    [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/5vKizhjk_5NDC69NYkSsP90NfQ4"
*    [nextPageToken] => CAUQAA
*    [pageInfo] => Array
*        (
*            [totalResults] => 30
*            [resultsPerPage] => 5
*        )
*
*    [items] => Array
*        (
*            [0] => Array
*                (
*                    [kind] => youtube#video
*                    [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/D0_V-FNcsvu5O5nb4WVaywcVcNY"
*                    [id] => PLlMTn_Jzok
*                )
*
*            [1] => Array
*                (
*                    [kind] => youtube#video
*                    [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/WH2KtvjPyS7iC7QdoJAy1jj-Ts8"
*                    [id] => Y1ndZnfZdZM
*                )
*
*            [2] => Array
*                (
*                    [kind] => youtube#video
*                    [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/cCAOtOCZXKsavHtC-yOr-KbegfU"
*                    [id] => V3Y8IU6st5E
*                )
*
*            [3] => Array
*                (
*                    [kind] => youtube#video
*                    [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/8AgfXIMM0eVoyQnhfoP2UtF71N4"
*                    [id] => rVPlMM_aSn4
*                )
*
*            [4] => Array
*                (
*                    [kind] => youtube#video
*                    [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/5YtS-hLGeIMFoJHVfvS3b7CVfyc"
*                    [id] => vQBWyLSbnw4
*                )
*
*        )
*
* )
 */
```