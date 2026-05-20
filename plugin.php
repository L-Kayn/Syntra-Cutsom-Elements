<?php

/**
 * Plugin Name: Syntra Custom Elements
 * Plugin URI: https://studiosyntra.com.au/
 * Description: Complex Blocks Added to breakdance
 * Author: Studio Syntra
 * Author URI: https://Studiosyntra.com.au/
 * License: GPLv2
 * Text Domain: StudioSyntra
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace SyntraCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'SyntraCustomElements',
        'element',
        'Syntra Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'SyntraCustomElements',
        'macro',
        'Syntra Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'SyntraCustomElements',
        'preset',
        'Syntra Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
