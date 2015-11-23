<?php

/**
 *
 * @see XenForo_Template_Helper_Core
 */
class ThemeHouse_UnlinkBanned_Template_Helper_Core
{

    /**
     *
     * @see XenForo_Template_Helper_Core::helperUserNameHtml()
     */
    public static function helperUserNameHtml(array $user, $username = '', $rich = false, array $attributes = array())
    {
        $returnLink = XenForo_Template_Helper_Core::callHelper('th_unlinkbanned_usernamehtml',
            array(
                $user,
                $username,
                $rich,
                $attributes
            ));

        if ($user['is_banned']) {
            return preg_replace('#(<a )href="[^"]*"([^>]*>.*<\/a>)#Us', '$1$2', $returnLink);
        }

        return $returnLink;
    } /* END helperUserNameHtml */

    /**
     *
     * @see XenForo_Template_Helper_Core::helperAvatarHtml()
     */
    public static function helperAvatarHtml(array $user, $img, array $attributes = array(), $content = '')
    {
        $returnLink = XenForo_Template_Helper_Core::callHelper('th_unlinkbanned_avatarhtml',
            array(
                $user,
                $img,
                $attributes,
                $content
            ));

        if ($user['is_banned']) {
            return preg_replace('#(<a )href="[^"]*"([^>]*>.*<\/a>)#Us', '$1$2', $returnLink);
        }

        return $returnLink;
    } /* END helperAvatarHtml */
}