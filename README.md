[![Build Status](https://travis-ci.org/incremental/php-youtube.svg?branch=master)](https://travis-ci.org/incremental/php-youtube)

# PHP-YouTube
This library aims at providing an easy-to-use wrapper for the non-OAuth YouTube API (v3) endpoints.

---

## Supported actions
- [youtube.activities.list](#youtubeactivitieslist)
- [youtube.channels.list](#youtubechannelslist)
- [youtube.channelSections.list](#youtubechannelsectionslist)

---

### youtube.activities.list
Returns a list of channel activity events that match the given channel id.

For more information, take a look at [https://developers.google.com/youtube/v3/docs/activities/list](https://developers.google.com/youtube/v3/docs/activities/list).

```php
<?php

require_once('vendor/autoload.php');

use Incremental\YouTube\YouTube;

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

require_once('vendor/autoload.php');

use Incremental\YouTube\YouTube;

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

---

### youtube.channelsections.list
Returns a list of channelSection resources that match the request criteria.

For more information, take a look at [https://developers.google.com/youtube/v3/docs/channelSections/list](https://developers.google.com/youtube/v3/docs/channelSections/list).

```php
<?php

require_once('vendor/autoload.php');

use Incremental\YouTube\YouTube;

$youtube = new YouTube('YOUR_API_KEY');
$response = $youtube->listChannelSections([
    'part'       => 'id',
    'channelId'  => 'GCQmVzdCBvZiBZb3VUdWJl',
]);

print_r($response);

/**
 * Array
 * (
 *    [kind] => youtube#channelSectionListResponse
 *    [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/4JnIcJTNhW-8qjW5Xh2gRXpVNh8"
 *    [items] => Array
 *        (
 *            [0] => Array
 *                (
 *                    [kind] => youtube#channelSection
 *                    [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/Yf2NnAr2mk7seya0WwQIJgvb5H4"
 *                    [id] => UCVHFbqXqoYvEWM1Ddxl0QDg.__WLXNpu6u8
 *                    [snippet] => Array
 *                        (
 *                            [type] => singlePlaylist
 *                            [style] => horizontalRow
 *                            [channelId] => UCVHFbqXqoYvEWM1Ddxl0QDg
 *                            [position] => 0
 *                        )
 *
 *                )
 *
 *         )
 *
 * )
 */
```
