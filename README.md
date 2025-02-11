# Get an image from a PBS or YouTube video

This is an application to get images by using URLS for videos hosted on either video.klrn.org, www.pbs.org, youtube.com or youtu.be.

![KLRN.org get-image page](images/get-image-after.jpg)

### Example URLs

YouTube:

```
https://www.youtube.com/watch?v=NecslIyburA
https://www.youtube.com/watch?v=NecslIyburA&list=PLO5rIpyd-O4Fte-XcVlfBTVKx9KVhOgB6&index=16
https://youtu.be/NecslIyburA
https://youtu.be/NecslIyburA?si=Rc1Lz3HzUJ-3cGg4
```

KLRN and PBS

```
https://video.klrn.org/show/all-creatures-great-and-small/
https://video.klrn.org/video/episode-1-ifcgdb/
https://www.pbs.org/show/all-creatures-great-and-small/
https://www.pbs.org/video/episode-1-ifcgdb/
```

### Setup

**_index.html_** - This file has all the CSS, HTML and JavaScript. Aside from any customizations, the variable at the top of the script file, `const getWebpageAPI`, should be changed to reflect the location of where the api page will be.

**_/api/get-webpage.php_** - This returns HTML as a string from PBS video pages, which is parsed by `function getImage(url)` in index.html. On the second line of get-webpage.php, the `$http_allowed_origins` array should be modified to include only origins allowed to make api requests, such as where index.html is hosted.

Example allowed-origins array:

```
$http_allowed_origins = ['https://klrn.bento-live.pbs.org',
                         'https://www.klrn.org',
                         'http://localhost:8000',
                         'test',
                        ];
```

## References

- https://www.klrn.org/get-image/
