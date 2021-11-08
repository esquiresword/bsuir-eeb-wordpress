<?php

namespace PrestoPlayer\Services;

class Compatibility
{
    public function register()
    {
        // wp rocket compat
        add_action('rocket_exclude_js', [$this, 'excludeComponentsFile']);
        add_action('rocket_delay_js_exclusions', [$this, 'excludeComponentsFiles']);

        // siteground optimize
        add_action('sgo_js_minify_exclude', [$this, 'excludeHandle']);

        // godaddy's shitty feedback modal
        add_action('admin_enqueue_scripts', [$this, 'goDaddyModal'], 99);
    }

    public function goDaddyModal()
    {
        global $post_type;
        if ('pp_video_block' == $post_type) {
            wp_dequeue_script('nextgen-feedback-modal');
        }
    }

    /**
     * Exclude all presto player js
     *
     * @param array $excluded_js Excluded javascript.
     * @return array
     */
    public function excludeComponentsFiles($excluded_js)
    {
        $excluded_js[] = 'presto-player';
        return $excluded_js;
    }

    /**
     * Exclude module by file
     *
     * @param array $excluded_js
     * @return array
     */
    public function excludeComponentsFile($excluded_js)
    {
        $excluded_js[] = str_replace(home_url(), '',  PRESTO_PLAYER_PLUGIN_URL . "dist/components/web-components/web-components.esm.js");

        return $excluded_js;
    }

    /**
     * Exclude module by handle
     *
     * @param array $handles
     * @return array
     */
    public function excludeHandle($handles)
    {
        $handles[] = 'presto-components';
        return $handles;
    }
}
