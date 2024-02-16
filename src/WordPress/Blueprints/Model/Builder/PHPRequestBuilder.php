<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\Builder;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use WordPress\Blueprints\Model\DataClass\PHPRequest;
use Swaggest\JsonSchema\Structure\ClassStructureContract;


/**
 * Built from #/definitions/PHPRequest
 */
class PHPRequestBuilder extends PHPRequest implements ClassStructureContract
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
        $properties->url = Schema::string();
        $properties->url->description = "Request path or absolute URL.";
        $properties->headers = Schema::object();
        $properties->headers->additionalProperties = Schema::string();
        $properties->headers->setFromRef('#/definitions/PHPRequestHeaders');
        $properties->files = Schema::object();
        $properties->files->additionalProperties = PHPRequestFilesAdditionalPropertiesBuilder::schema();
        $properties->files->description = "Uploaded files";
        $properties->body = Schema::string();
        $properties->body->description = "Request body without the files.";
        $properties->formData = Schema::object();
        $properties->formData->additionalProperties = new Schema();
        $properties->formData->description = "Form data. If set, the request body will be ignored and the content-type header will be set to `application/x-www-form-urlencoded`.";
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            self::names()->url,
        );
        $ownerSchema->setFromRef('#/definitions/PHPRequest');
    }

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
     * @param string $url Request path or absolute URL.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUrl($url)
    {
        $this->url = $url;
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
     * @param PHPRequestFilesAdditionalPropertiesBuilder[] $files Uploaded files
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFiles($files)
    {
        $this->files = $files;
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
     * @param array $formData Form data. If set, the request body will be ignored and the content-type header will be set to `application/x-www-form-urlencoded`.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFormData($formData)
    {
        $this->formData = $formData;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    function toDataObject()
    {
        $dataObject = new PHPRequest();
        $dataObject->method = $this->recursiveJsonSerialize($this->method);
        $dataObject->url = $this->recursiveJsonSerialize($this->url);
        $dataObject->headers = $this->recursiveJsonSerialize($this->headers);
        $dataObject->files = $this->recursiveJsonSerialize($this->files);
        $dataObject->body = $this->recursiveJsonSerialize($this->body);
        $dataObject->formData = $this->recursiveJsonSerialize($this->formData);
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