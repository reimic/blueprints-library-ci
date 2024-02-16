<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\Builder;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use WordPress\Blueprints\Model\DataClass\UrlReference;
use Swaggest\JsonSchema\Structure\ClassStructureContract;


/**
 * Built from #/definitions/UrlReference
 */
class UrlReferenceBuilder extends UrlReference implements ClassStructureContract
{
    use \Swaggest\JsonSchema\Structure\ClassStructureTrait;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->resource = Schema::string();
        $properties->resource->description = "Identifies the file resource as a URL";
        $properties->resource->const = "url";
        $properties->url = Schema::string();
        $properties->url->description = "The URL of the file";
        $properties->caption = Schema::string();
        $properties->caption->description = "Optional caption for displaying a progress message";
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            self::names()->resource,
            self::names()->url,
        );
        $ownerSchema->setFromRef('#/definitions/UrlReference');
    }

    /**
     * @param string $resource Identifies the file resource as a URL
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $url The URL of the file
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
     * @param string $caption Optional caption for displaying a progress message
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    function toDataObject()
    {
        $dataObject = new UrlReference();
        $dataObject->resource = $this->recursiveJsonSerialize($this->resource);
        $dataObject->url = $this->recursiveJsonSerialize($this->url);
        $dataObject->caption = $this->recursiveJsonSerialize($this->caption);
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