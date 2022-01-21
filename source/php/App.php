<?php

namespace ModularityRekAI;

use ModularityRekAI\Helper\CacheBust;

class App
{
    public function __construct()
    {

        //Init subset
        new Admin\Settings();

        //Register module
        add_action('plugins_loaded', array($this, 'registerModule'));

        // Add view paths
        add_filter('Municipio/blade/view_paths', array($this, 'addViewPaths'), 1, 1);

        //Add global rek ai script
        add_action('wp_enqueue_scripts', array($this, 'registerRekAIScript'));

        //Add warning
        add_action('admin_head', function () {
            if (empty(get_option('rekai_script_url'))) {
                echo '
                    <script>
                        console.log("RekAI script url is not defined. Please fill it out in the settings tab or disable this plugin.");
                    </script>
                ';
            }
        });
    }

    /**
     * Enqueue script
     */

    public function registerRekAIScript()
    {
        $scriptUrl = get_option('rekai_script_url');

        if ($scriptUrl) {
            wp_register_script(
                'modularity-rekai-stats',
                $scriptUrl,
                null,
                '1.0.0'
            );
            wp_enqueue_script('modularity-rekai-stats');
        }
    }

    /**
     * Register the module
     * @return void
     */
    public function registerModule()
    {
        if (function_exists('modularity_register_module')) {
            modularity_register_module(
                MODULARITYREKAI_MODULE_PATH,
                'RekAI'
            );
        }
    }

    /**
     * Add searchable blade template paths
     * @param array  $array Template paths
     * @return array        Modified template paths
     */
    public function addViewPaths($array)
    {
        // If child theme is active, insert plugin view path after child views path.
        if (is_child_theme()) {
            array_splice($array, 2, 0, array(MODULARITYREKAI_VIEW_PATH));
        } else {
            // Add view path first in the list if child theme is not active.
            array_unshift($array, MODULARITYREKAI_VIEW_PATH);
        }

        return $array;
    }
}
