<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace WordPress\Blueprints\Model\Builder;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use WordPress\Blueprints\Model\DataClass\WriteFileStep;
use Swaggest\JsonSchema\Structure\ClassStructureContract;


/**
 * Built from #/definitions/WriteFileStep
 */
class WriteFileStepBuilder extends WriteFileStep implements ClassStructureContract
{
    use \Swaggest\JsonSchema\Structure\ClassStructureTrait;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->progress = ProgressBuilder::schema();
        $properties->step = Schema::string();
        $properties->step->const = "writeFile";
        $properties->path = Schema::string();
        $properties->path->description = "The path of the file to write to";
        $properties->data = new Schema();
        $propertiesDataAnyOf0 = new Schema();
        $propertiesDataAnyOf0->anyOf[0] = VFSReferenceBuilder::schema();
        $propertiesDataAnyOf0->anyOf[1] = LiteralReferenceBuilder::schema();
        $propertiesDataAnyOf0->anyOf[2] = CoreThemeReferenceBuilder::schema();
        $propertiesDataAnyOf0->anyOf[3] = CorePluginReferenceBuilder::schema();
        $propertiesDataAnyOf0->anyOf[4] = UrlReferenceBuilder::schema();
        $propertiesDataAnyOf0->setFromRef('#/definitions/FileReference');
        $properties->data->anyOf[0] = $propertiesDataAnyOf0;
        $properties->data->anyOf[1] = Schema::string();
        $properties->data->description = "The data to write";
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            self::names()->data,
            self::names()->path,
            self::names()->step,
        );
        $ownerSchema->setFromRef('#/definitions/WriteFileStep');
    }

    /**
     * @param ProgressBuilder $progress
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setProgress(ProgressBuilder $progress)
    {
        $this->progress = $progress;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $step
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStep($step)
    {
        $this->step = $step;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $path The path of the file to write to
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param VFSReferenceBuilder|LiteralReferenceBuilder|CoreThemeReferenceBuilder|CorePluginReferenceBuilder|UrlReferenceBuilder|string $data The data to write
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    function toDataObject()
    {
        $dataObject = new WriteFileStep();
        $dataObject->progress = $this->recursiveJsonSerialize($this->progress);
        $dataObject->step = $this->recursiveJsonSerialize($this->step);
        $dataObject->path = $this->recursiveJsonSerialize($this->path);
        $dataObject->data = $this->recursiveJsonSerialize($this->data);
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