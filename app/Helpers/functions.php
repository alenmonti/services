<?php

if (! function_exists('web_image')) {
    /**
     * Get the URL for a web image from configuration.
     *
     * @param  string  $key  The configuration key in images.php (e.g., 'welcome.hero')
     */
    function web_image(string $key): string
    {
        return asset('storage/'.config("images.$key"));
    }
}
