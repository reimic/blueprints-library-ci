<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\Builder;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use WordPress\Blueprints\Model\DataClass\PHPRunOptions;
use Swaggest\JsonSchema\Structure\ClassStructureContract;


/**
 * Built from #/definitions/PHPRunOptions
 */
class PHPRunOptionsBuilder extends PHPRunOptions implements ClassStructureContract
{
    use \Swaggest\JsonSchema\Structure\ClassStructureTrait;

    const GET = 'GET';

    const POST = 'POST';

    const HEAD = 'HEAD';

    const OPTIONS = 'OPTIONS';

    const PATCH = 'PATCH';

    const PUT = 'PUT';

    const DELETE = 'DELETE';

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->relativeUri = Schema::string();
        $properties->relativeUri->description = "Request path following the domain:port part.";
        $properties->scriptPath = Schema::string();
        $properties->scriptPath->description = "Path of the .php file to execute.";
        $properties->protocol = Schema::string();
        $properties->protocol->description = "Request protocol.";
        $properties->method = Schema::string();
        $properties->method->enum = array(
            self::GET,
            self::POST,
            self::HEAD,
            self::OPTIONS,
            self::PATCH,
            self::PUT,
            self::DELETE,
        );
        $properties->method->setFromRef('#/definitions/HTTPMethod');
        $properties->headers = Schema::object();
        $properties->headers->additionalProperties = Schema::string();
        $properties->headers->setFromRef('#/definitions/PHPRequestHeaders');
        $properties->body = Schema::string();
        $properties->body->description = "Request body without the files.";
        $properties->fileInfos = Schema::arr();
        $properties->fileInfos->items = FileInfoBuilder::schema();
        $properties->fileInfos->description = "Uploaded files.";
        $properties->code = Schema::string();
        $properties->code->description = "The code snippet to eval instead of a php file.";
        $properties->throwOnError = Schema::boolean();
        $properties->throwOnError->description = "Whether to throw an error if the PHP process exits with a non-zero code or outputs to stderr.";
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->setFromRef('#/definitions/PHPRunOptions');
    }

    /**
     * @param string $relativeUri Request path following the domain:port part.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRelativeUri($relativeUri)
    {
        $this->relativeUri = $relativeUri;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $scriptPath Path of the .php file to execute.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setScriptPath($scriptPath)
    {
        $this->scriptPath = $scriptPath;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $protocol Request protocol.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $method
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[] $headers
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $body Request body without the files.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param FileInfoBuilder[]|array $fileInfos Uploaded files.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFileInfos($fileInfos)
    {
        $this->fileInfos = $fileInfos;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $code The code snippet to eval instead of a php file.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $throwOnError Whether to throw an error if the PHP process exits with a non-zero code or outputs to stderr.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setThrowOnError($throwOnError)
    {
        $this->throwOnError = $throwOnError;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    function toDataObject()
    {
        $dataObject = new PHPRunOptions();
        $dataObject->relativeUri = $this->recursiveJsonSerialize($this->relativeUri);
        $dataObject->scriptPath = $this->recursiveJsonSerialize($this->scriptPath);
        $dataObject->protocol = $this->recursiveJsonSerialize($this->protocol);
        $dataObject->method = $this->recursiveJsonSerialize($this->method);
        $dataObject->headers = $this->recursiveJsonSerialize($this->headers);
        $dataObject->body = $this->recursiveJsonSerialize($this->body);
        $dataObject->fileInfos = $this->recursiveJsonSerialize($this->fileInfos);
        $dataObject->code = $this->recursiveJsonSerialize($this->code);
        $dataObject->throwOnError = $this->recursiveJsonSerialize($this->throwOnError);
        return $dataObject;
    }

    /**
     * @param mixed $objectMaybe
     */
    private function recursiveJsonSerialize($objectMaybe)
    {
        if ( is_array( $objectMaybe ) ) {
        	return array_map([$this, 'recursiveJsonSerialize'], $objectMaybe);
        } elseif ( $objectMaybe instanceof \Swaggest\JsonSchema\Structure\ClassStructureContract ) {
        	return $objectMaybe->toDataObject();
        } else {
        	return $objectMaybe;
        }
    }
}