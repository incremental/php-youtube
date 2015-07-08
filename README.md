[![Build Status](https://travis-ci.org/incremental/php-youtube.svg?branch=master)](https://travis-ci.org/incremental/php-youtube)

# PHP-YouTube
This library aims at providing an easy-to-use wrapper for the non-OAuth YouTube API (v3) endpoints.

---

## Supported actions
- [youtube.activities.list](#youtubeactivitieslist)
- [youtube.channels.list](#youtubechannelslist)
- [youtube.channelSections.list](#youtubechannelsectionslist)
- [youtube.comments.list](#youtubecommentslist)
- [youtube.commentThreads.list](#youtubecommentthreadslist)
- [youtube.guideCategories.list](#youtubeguidecategorieslist)
- [youtube.18nLanguages.list](#youtubei18nlanguageslist)
- [youtube.18nRegions.list](#youtubei18nregionslist)

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
 *     [items] => Array
 *         (
 *             [0] => Array
 *                 (
 *                     [kind] => youtube#activity
 *                     [etag] => "eYE31WLho912TfxEBDDRSwEQ5Ms/WcC5XzEdaxXmLhsuZ1s9_CBqix8"
 *                     [id] => VTE0MzQwNDMxMDYxNDAxNDY3MTQzNjM5MjA=
 *                 )
 *         )
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
 *     [items] => Array
 *         (
 *             [0] => Array
 *                 (
 *                     [kind] => youtube#channel
 *                     [etag] => "eYE31WLho912TfxEBDDRSwEQ5Ms/sgkeX05nlECWsuF-d1WorqhxJVQ"
 *                     [id] => UCF0pVplsI8R5kcAqgtoRqoA
 *                 )
 *         )
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
 *                )
 *         )
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
$response = $youtube->listComments([
    'part'       => 'id',
    'channelId'  => 'z131gtcqbqbft5y3x22jfvmoakf3ezfsi',
    'maxResults' => 1,
]);

print_r($response);

/**
 * Array
 * (
 *     [kind] => youtube#commentListResponse
 *     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/my2z1KHSZNVuD41bSHIrxgS8G-U"
 *     [items] => Array
 *         (
 *             [0] => Array
 *                 (
 *                     [kind] => youtube#comment
 *                     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/4Lac9A_R38HxodU7PaftM_J1BaY"
 *                     [id] => z131gtcqbqbft5y3x22jfvmoakf3ezfsi
 *                 )
 *         )
 * )
 */
```

---

### youtube.commentthreads.list
Returns a list of comment threads that match the request criteria.

For more information, take a look at [https://developers.google.com/youtube/v3/docs/commentThreads/list](https://developers.google.com/youtube/v3/docs/commentThreads/list).

```php
<?php

require_once('vendor/autoload.php');

use Incremental\YouTube\YouTube;

$youtube = new YouTube('YOUR_API_KEY');
$response = $youtube->listCommentThreads([
    'part'       => 'id',
    'videoId'    => 'z131gtcqbqbft5y3x22jfvmoakf3ezfsi',
    'maxResults' => 1,
]);

print_r($response);

/**
 * Array
 * (
 *     [kind] => youtube#commentThreadListResponse
 *     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/uN-iOCehYpos4TNPM5gjN8UB1xY"
 *     [nextPageToken] => Cg0Qr9vwvY3AxgIgACgBEhQIABDIrYirubDGAhjIrYirubDGAhgCIAE=
 *     [pageInfo] => Array
 *         (
 *             [resultsPerPage] => 1
 *         )
 *     [items] => Array
 *         (
 *             [0] => Array
 *                 (
 *                     [kind] => youtube#commentThread
 *                     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/7sgGL5ZZoBDiABrwCZQ4HWh7TPs"
 *                     [id] => z12lxfwxtzqwhdfrq04cgnqowyusftk4esk0k
 *                 )
 *         )
 * )
 */
```

---

### youtube.guidecategories.list
Returns a list of categories that can be associated with YouTube channels.

For more information, take a look at [https://developers.google.com/youtube/v3/docs/guideCategories/list](https://developers.google.com/youtube/v3/docs/guideCategories/list).

```php
<?php

require_once('vendor/autoload.php');

use Incremental\YouTube\YouTube;

$youtube = new YouTube('YOUR_API_KEY');
$response = $youtube->listGuideCategories([
    'part'       => 'id',
    'regionCode' => 'NL',
]);

print_r($response);

/**
 * Array
 * (
 *     [kind] => youtube#guideCategoryListResponse
 *     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/MnjXoNFdOgOUSRqlgJ3cE1jYWvg"
 *     [items] => Array
 *         (
 *             [0] => Array
 *                 (
 *                     [kind] => youtube#guideCategory
 *                     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/ei31gUqEQxOtnflo47cy0YAa_MM"
 *                     [id] => GCQmVzdCBvZiBZb3VUdWJl
 *                 )
 *         )
 * )
 */
```

---

### youtube.i18nLanguages.list
Returns a list of application languages that the YouTube website supports.

For more information, take a look at [https://developers.google.com/youtube/v3/docs/i18nLanguages/list](https://developers.google.com/youtube/v3/docs/i18nLanguages/list).

```php
<?php

require_once('vendor/autoload.php');

use Incremental\YouTube\YouTube;

$youtube = new YouTube('YOUR_API_KEY');
$response = $youtube->listI18nLanguages([
    'part'       => 'id',
]);

print_r($response);

/**
 * Array
 * (
 *     [kind] => youtube#i18nLanguageListResponse
 *     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/wD1Vj4GH0IYKZJOUyuxIoquCcHs"
 *     [items] => Array
 *         (
 *             [0] => Array
 *                 (
 *                     [kind] => youtube#i18nLanguage
 *                     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/8KwAGX0iEJffc-VyQgBD2mnlbac"
 *                     [id] => af
 *                 )
 *         )
 * )
 */
```

---

### youtube.i18nRegions.list
Returns a list of content regions that the YouTube website supports.

For more information, take a look at [https://developers.google.com/youtube/v3/docs/i18nRegions/list](https://developers.google.com/youtube/v3/docs/i18nRegions/list).

```php
<?php

require_once('vendor/autoload.php');

use Incremental\YouTube\YouTube;

$youtube = new YouTube('YOUR_API_KEY');
$response = $youtube->listI18nRegions([
    'part'       => 'id',
]);

print_r($response);

/**
 * Array
 * (
 *     [kind] => youtube#i18nRegionListResponse
 *     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/z8_sDbXXqFQ0QvdJ-9cH9JGf4o4"
 *     [items] => Array
 *         (
 *             [0] => Array
 *                 (
 *                     [kind] => youtube#i18nRegion
 *                     [etag] => "Y3xTLFF3RLtHXX85JBgzzgp2Enw/1K5qc4QfRqfgcFVQseK1hTW9b2c"
 *                     [id] => US
 *                 )
 *         )
 * )
 */
```
