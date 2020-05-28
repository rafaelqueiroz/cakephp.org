<?php
namespace App\View\Helper;

use Cake\Utility\Hash;
use Cake\View\Helper\HtmlHelper as BaseHtmlHelper;
use Cake\View\View;

/**
 * Html helper
 */
class HtmlHelper extends BaseHtmlHelper
{
    /**
     * Add extra rel attributes in case of _blank target
     *
     * @param array|string $title
     * @param null $url
     * @param array $options
     * @return string
     */
    public function link($title, $url = null, array $options = []): string
    {
        if (Hash::get($options, 'target') === '_blank' && !Hash::get($options, 'rel')) {
            $options['rel'] = 'noopener noreferrer';
        }

        return parent::link($title, $url, $options); // TODO: Change the autogenerated stub
    }
}
