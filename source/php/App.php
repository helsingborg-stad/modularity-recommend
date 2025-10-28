<?php

namespace ModularityRecommend;

use ModularityRecommend\Helper\CacheBust;

class App
{
    public function __construct()
    {

        //Init subset
        new Admin\Settings();

        //Register module
        add_action('init', array($this, 'registerModule'));

        //Add global rek ai script
        add_action('wp_enqueue_scripts', array($this, 'registerRekAIScript'));

        //Add warning
        add_action('admin_head', array($this, 'addUndefinedWarning'));

        //Head
        add_action('wp_head', array($this, 'printMetaTag'));

        //Remove rek ai field, if not enabled
        add_filter("acf/prepare_field/name=rekai_number_of_recommendation", array($this, 'hideRekAIField'));

        add_filter('acf/load_field/key=field_628c958c693a9', array($this, 'hideRekAIOptions'));
    }

    /**
     * Check if RekAI is enabled
     * @return bool
     */
    private function isRekAiEnabled(): bool
    {
        return (bool) get_field('rekai_enable', 'options') ?? false;
    }

    /**
     * Get RekAI script url
     * @return false|string
     */
    private function getRekAiScriptUrl(): false|string
    {
        $scriptUrl = get_field('rekai_script_url', 'options');
        if($scriptUrl) {
            return $scriptUrl;
        }
        return false;
    }

    /**
     * Hide RekAI field
     * @param $field
     * @return mixed
     */
    public function hideRekAIField($field)
    {
        if (!$this->isRekAiEnabled()) {
            return false;
        }
        return $field;
    }

    /**
     * Console log undefined warning
     * @return void
     */
    public function addUndefinedWarning()
    {
        if (!$this->isRekAiEnabled()) {
            return false;
        }

        if (!$this->getRekAiScriptUrl()) {
            echo '
                <script>
                    console.log("RekAI script url is not defined. Please fill it out in the settings tab or disable rekai recommendations.");
                </script>
            ';
        }
    }

    /**
     * Public meta tag. Enables indexing.
     */
    public function printMetaTag()
    {
        if (!$this->isRekAiEnabled()) {
            return false;
        }

        if(!$this->getRekAiScriptUrl()) {
            return false;
        }

        echo '<meta name="rek_viewclick" content="">' . "\n";
    }

    /**
     * Enqueue script
     */
    public function registerRekAIScript()
    {
        if(!$this->isRekAiEnabled()) {
            return false;
        }

        if(!$this->getRekAiScriptUrl()) {
            return false;
        }

        wp_register_script(
            'modularity-recommend-stats',
            $this->getRekAiScriptUrl(),
            null,
            '1.0.0'
        );
        wp_enqueue_script('modularity-recommend-stats');
    }

    /**
     * Register the module
     * @return void
     */
    public function registerModule()
    {
        if (function_exists('modularity_register_module')) {
            modularity_register_module(
                MODULARITYRECOMMEND_MODULE_PATH,
                'Recommend'
            );
        }
    }

    /**
     * Conditionally show field if RekAI is enabled
     *
     * @param array  $field
     * @return array $field
     */
    public function hideRekAIOptions($field)
    {
        if (!$this->isRekAiEnabled()) {
            $field['wrapper']['class'] = 'hidden';
        }

        return $field;
    }
}
