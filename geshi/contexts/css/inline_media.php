<?php
/**
 * GeSHi - Generic Syntax Highlighter
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * You can view a copy of the GNU GPL in the LICENSE file that comes
 * with GeSHi, in the docs/ directory.
 *
 * @package   lang
 * @author    Nigel McNie <nigel@geshi.org>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright (C) 2005 Nigel McNie
 * @version   $Id$
 * 
 */

$this->_contextDelimiters = array(
    0 => array(
        0 => array('REGEX#@media\s+\w+\s+\{#'),
        1 => array('}'),
        2 => false
    )
);

$this->_childContexts = array(
    new GeSHiCodeContext('css/rule', 'rule')
);

$this->_styler->setStyle($this->_styleName, 'color:#b1b100;');
//$this->_styler->setStartStyle($this->_styleName, 'color:green;');
//$this->_styler->setEndStyle($this->_styleName, 'color:red;');
$this->_contextStyleType = GESHI_STYLE_NONE;
$this->_delimiterParseData = GESHI_CHILD_PARSE_BOTH;
$this->_strictDelimiters = true;
 // @todo blocking 1.1.0beta1 This just fixes a bug really... have to anaylse whether the other
 // way (false) is even needed at all...


?>