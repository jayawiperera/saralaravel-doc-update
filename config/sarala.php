<?php

return [
    /*
     * League\Fractal\Serializer\JsonApiSerializer will use this value to
     * as a prefix for generated links. Set to `null` to disable this.
     */
    'base_url' => url('/api'),

    /*
     * This guard will be used when fetching the authenticated user to pass
     * to the links method in the transformer.
     */
    'guard' => null,

    /*
     * When sending back serialized data to the client this header(s) will
     * be appended to the response.
     */
    'response_headers' => [
        'Content-Type' => 'application/vnd.api+json',
    ],
];
