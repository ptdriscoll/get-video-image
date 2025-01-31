<?php
    $http_origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : 'test';
    $http_allowed_origins = ['https://klrn.bento-live.pbs.org',
                             'https://www.klrn.org',
                             'http://localhost:8000',
                             'test',                             
                            ];                             
    
    if (in_array($http_origin, $http_allowed_origins)) {  
        header('Access-Control-Allow-Origin: ' . $http_origin);
    }

    $url = isset($_GET['url']) ? $_GET['url'] : '';    
    $parse = parse_url($url);
    $host = isset($parse['host']) ? $parse['host'] : '';

    if ($host == 'video.klrn.org' || $host == 'www.pbs.org') {
        $html = file_get_contents($url);
        echo $html;
    }    
    else {
        echo 'HTTP ORIGIN: ' . $http_origin . '<br>';
        echo 'ERROR: URL must be hosted by video.klrn.org or www.pbs.org';
    }
?>
