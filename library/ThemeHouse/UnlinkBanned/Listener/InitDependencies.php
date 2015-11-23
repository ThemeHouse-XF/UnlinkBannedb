<?php

/**
 *
 * @see ThemeHouse_Listener_InitDependencies
 */
class ThemeHouse_UnlinkBanned_Listener_InitDependencies extends ThemeHouse_Listener_InitDependencies
{

    public function run()
    {
        $this->addHelperCallbacks(
            array(
                'th_unlinkbanned_usernamehtml' => XenForo_Template_Helper_Core::$helperCallbacks['usernamehtml'],
                'usernamehtml' => array(
                    'ThemeHouse_UnlinkBanned_Template_Helper_Core',
                    'helperUserNameHtml'
                ),
                'th_unlinkbanned_avatarhtml' => XenForo_Template_Helper_Core::$helperCallbacks['avatarhtml'],
                'avatarhtml' => array(
                    'ThemeHouse_UnlinkBanned_Template_Helper_Core',
                    'helperAvatarHtml'
                )
            ));

        parent::run();
   } /* END run */
    /**
     *
     * @param XenForo_Dependencies_Abstract $dependencies
     * @param array $data
     */
    public static function initDependencies(XenForo_Dependencies_Abstract $dependencies, array $data)
    {
        $initDependencies = new ThemeHouse_UnlinkBanned_Listener_InitDependencies($dependencies, $data);
        $initDependencies->run();
    } /* END initDependencies */
}