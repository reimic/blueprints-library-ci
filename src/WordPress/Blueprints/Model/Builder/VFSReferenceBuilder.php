<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\Builder;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use WordPress\Blueprints\Model\DataClass\VFSReference;
use Swaggest\JsonSchema\Structure\ClassStructureContract;


/**
 * Built from #/definitions/VFSReference
 */
class VFSReferenceBuilder extends VFSReference implements ClassStructureContract
{
    use \Swaggest\JsonSchema\Structure\ClassStructureTrait;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->resource = Schema::string();
        $properties->resource->description = "Identifies the file resource as Virtual File System (VFS)";
        $properties->resource->const = "vfs";
        $properties->path = Schema::string();
        $properties->path->description = "The path to the file in the VFS";
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            self::names()->resource,
            self::names()->path,
        );
        $ownerSchema->setFromRef('#/definitions/VFSReference');
    }

    /**
     * @param string $resource Identifies the file resource as Virtual File System (VFS)
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
     * @param string $path The path to the file in the VFS
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    function toDataObject()
    {
        $dataObject = new VFSReference();
        $dataObject->resource = $this->recursiveJsonSerialize($this->resource);
        $dataObject->path = $this->recursiveJsonSerialize($this->path);
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