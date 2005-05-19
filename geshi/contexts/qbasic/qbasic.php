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
 * @author    Nigel McNie <oracle.shinoda@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright (C) 2005 Nigel McNie
 * @version   $Id$
 * 
 */

$this->_contextDelimiters = array();

$this->_childContexts = array(
    new GeSHiContext('qbasic/string', 'string'),
    new GeSHiContext('qbasic/comment', 'comment')
);

$this->_styler->setStyle($this->_styleName, '');
$this->_contextStyleType = GESHI_STYLE_NONE;
$this->_delimiterParseData = GESHI_CHILD_PARSE_BOTH;

// GeSHiCodeContext stuff
$this->_contextKeywords = array(
    0 => array(
        0 => array('and', 'as', 'call', 'dim', 'end', 'goto', 'if', 'integer', 'print', 'sub', 'then'),
        1 => $this->_styleName . '/kw0',
        2 => 'color: #006;',
        3 => false,
        4 => 'http://qboho.qbasicnews.com/qboho/qck{FNAME}.html'
    )
);

$this->_contextCharactersDisallowedBeforeKeywords = array();
$this->_contextCharactersDisallowedAfterKeywords  = array();
$this->_contextSymbols  = array(
    0 => array(
        0 => array(
            '(', ')', ',', ':', ';', '=', '<', '>'
            ),
        // name (should names have / in them like normal contexts? YES
        1 => $this->_styleName . '/sym0',
        // style
        2 => 'color:#008000;'
    )
);
$this->_contextRegexps  = array(
    0 => geshi_use_doubles($this->_styleName),
    1 => geshi_use_integers($this->_styleName)
);
// @todo languages should be able to set the styles of their numbers

?>