<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\DataClass;

use WordPress\Blueprints\Model\Builder\FileInfoBuilder;


class PHPRunOptions
{
    /** @var string Request path following the domain:port part. */
    public $relativeUri;

    /** @var string Path of the .php file to execute. */
    public $scriptPath;

    /** @var string Request protocol. */
    public $protocol;

    /** @var string */
    public $method;

    /** @var string[] */
    public $headers;

    /** @var string Request body without the files. */
    public $body;

    /** @var FileInfoBuilder[]|array Uploaded files. */
    public $fileInfos;

    /** @var string The code snippet to eval instead of a php file. */
    public $code;

    /** @var bool Whether to throw an error if the PHP process exits with a non-zero code or outputs to stderr. */
    public $throwOnError;
}