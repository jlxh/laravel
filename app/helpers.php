<?php
/*
 |-------------------------------------------------------------------------
 | Global helpers functions
 |-------------------------------------------------------------------------
 */

if (! function_exists('example')) {
    function example()
    {
        // code
    }
}

if (! function_exists('mix')) {
    /**
     * Get the path to a versioned mix file.
     *
     * @param  string  $file
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    function mix($file)
    {
        static $manifest = null;

        if (is_null($manifest)) {
            $manifest = json_decode(file_get_contents(public_path('manifest.json')), true);
        }

        if (isset($manifest[$file])) {
            return url(str_replace("\\", "/", $manifest[$file]));
        }

        throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
    }
}