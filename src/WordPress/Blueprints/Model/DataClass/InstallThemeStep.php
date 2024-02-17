<?php
/**
 * @file AUTOGENERATED FILE – DO NOT CHANGE MANUALLY
 * All your changes will get overridden. See the README for more details.
 */

namespace WordPress\Blueprints\Model\DataClass;

use WordPress\Blueprints\Model\Builder\CorePluginResourceBuilder;
use WordPress\Blueprints\Model\Builder\CoreThemeResourceBuilder;
use WordPress\Blueprints\Model\Builder\FilesystemResourceBuilder;
use WordPress\Blueprints\Model\Builder\InlineResourceBuilder;
use WordPress\Blueprints\Model\Builder\InstallThemeStepOptionsBuilder;
use WordPress\Blueprints\Model\Builder\ProgressBuilder;
use WordPress\Blueprints\Model\Builder\UrlResourceBuilder;


class InstallThemeStep
{
    /** @var ProgressBuilder */
    public $progress;

    /** @var bool */
    public $continueOnError;

    /** @var string The step identifier. */
    public $step = 'installTheme';

    /** @var string|FilesystemResourceBuilder|InlineResourceBuilder|CoreThemeResourceBuilder|CorePluginResourceBuilder|UrlResourceBuilder */
    public $themeZipFile;

    /** @var InstallThemeStepOptionsBuilder Optional installation options. */
    public $options;
}