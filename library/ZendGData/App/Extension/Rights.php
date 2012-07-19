<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_GData
 */

namespace Zend\GData\App\Extension;

/**
 * Represents the atom:rights element
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage App
 */
class Rights extends AbstractText
{

    protected $_rootElement = 'rights';

    public function __construct($text = null)
    {
        parent::__construct();
        $this->_text = $text;
    }

}