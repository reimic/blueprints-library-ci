<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\Builder;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use WordPress\Blueprints\Model\DataClass\InstallPluginOptions;
use Swaggest\JsonSchema\Structure\ClassStructureContract;


/**
 * Built from #/definitions/InstallPluginOptions
 */
class InstallPluginOptionsBuilder extends InstallPluginOptions implements ClassStructureContract
{
    use \Swaggest\JsonSchema\Structure\ClassStructureTrait;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->activate = Schema::boolean();
        $properties->activate->description = "Whether to activate the plugin after installing it.";
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->setFromRef('#/definitions/InstallPluginOptions');
    }

    /**
     * @param bool $activate Whether to activate the plugin after installing it.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setActivate($activate)
    {
        $this->activate = $activate;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    function toDataObject()
    {
        $dataObject = new InstallPluginOptions();
        $dataObject->activate = $this->recursiveJsonSerialize($this->activate);
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