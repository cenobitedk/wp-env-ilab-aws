<?php

define('ILAB_CLOUD_STORAGE_PROVIDER', getenv('CLOUD_STORAGE_PROVIDER') ?: 's3');
define('ILAB_AWS_S3_ACCESS_KEY', getenv('AWS_S3_ACCESS_KEY'));
define('ILAB_AWS_S3_ACCESS_SECRET', getenv('AWS_S3_ACCESS_SECRET'));
define('ILAB_AWS_S3_BUCKET', getenv('AWS_S3_BUCKET'));
define('ILAB_AWS_S3_REGION', getenv('AWS_S3_REGION'));
define('ILAB_MEDIA_S3_PREFIX', getenv('MEDIA_S3_PREFIX') ?: '@{date:Y/m}');
define('ILAB_AWS_S3_CACHE_CONTROL', getenv('AWS_S3_CACHE_CONTROL') ?: 'public,max-age=2592000');