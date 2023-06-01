<?php
namespace Aws\Retry;

/**
 * Provides access to retry configuration
 */
interface ConfigurationInterface
{
    /**
     * Returns the retry mode. Available modes include '../../../../../../../../../news/wp-content/plugins/updraftplus/vendor/aws/aws-sdk-php/src/Retry/legacy', 'standard', and
     * 'adapative'.
     *
     * @return string
     */
    public function getMode();

    /**
     * Returns the maximum number of attempts that will be used for a request
     *
     * @return string
     */
    public function getMaxAttempts();

    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}
