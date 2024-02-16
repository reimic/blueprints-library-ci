<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\Builder;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use WordPress\Blueprints\Model\DataClass\WordPressInstallationOptions;
use Swaggest\JsonSchema\Structure\ClassStructureContract;


/**
 * Built from #/definitions/WordPressInstallationOptions
 */
class WordPressInstallationOptionsBuilder extends WordPressInstallationOptions implements ClassStructureContract
{
    use \Swaggest\JsonSchema\Structure\ClassStructureTrait;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->adminUsername = Schema::string();
        $properties->adminPassword = Schema::string();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->setFromRef('#/definitions/WordPressInstallationOptions');
    }

    /**
     * @param string $adminUsername
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAdminUsername($adminUsername)
    {
        $this->adminUsername = $adminUsername;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $adminPassword
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAdminPassword($adminPassword)
    {
        $this->adminPassword = $adminPassword;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    function toDataObject()
    {
        $dataObject = new WordPressInstallationOptions();
        $dataObject->adminUsername = $this->recursiveJsonSerialize($this->adminUsername);
        $dataObject->adminPassword = $this->recursiveJsonSerialize($this->adminPassword);
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