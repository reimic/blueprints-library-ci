<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\Builder;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use WordPress\Blueprints\Model\DataClass\LoginDetails;
use Swaggest\JsonSchema\Structure\ClassStructureContract;


/**
 * Built from #/definitions/LoginDetails
 */
class LoginDetailsBuilder extends LoginDetails implements ClassStructureContract
{
    use \Swaggest\JsonSchema\Structure\ClassStructureTrait;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->username = Schema::string();
        $properties->password = Schema::string();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            self::names()->username,
            self::names()->password,
        );
        $ownerSchema->setFromRef('#/definitions/LoginDetails');
    }

    /**
     * @param string $username
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $password
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    function toDataObject()
    {
        $dataObject = new LoginDetails();
        $dataObject->username = $this->recursiveJsonSerialize($this->username);
        $dataObject->password = $this->recursiveJsonSerialize($this->password);
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