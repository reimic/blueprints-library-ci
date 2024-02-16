<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\Builder;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use WordPress\Blueprints\Model\DataClass\Progress;
use Swaggest\JsonSchema\Structure\ClassStructureContract;


/**
 * Built from #/definitions/Progress
 */
class ProgressBuilder extends Progress implements ClassStructureContract
{
    use \Swaggest\JsonSchema\Structure\ClassStructureTrait;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->weight = Schema::number();
        $properties->caption = Schema::string();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->setFromRef('#/definitions/Progress');
    }

    /**
     * @param float $weight
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $caption
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
        $dataObject = new Progress();
        $dataObject->weight = $this->recursiveJsonSerialize($this->weight);
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