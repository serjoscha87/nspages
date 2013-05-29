<?php
/**
 * Plugin nspages : Displays nicely a list of the pages of a namespace
 *
 * @license GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if(!defined('DOKU_INC')) die();
require_once 'printer.php';

class nspages_printerSimpleList extends nspages_printer {
    function __construct($plugin, $mode, $renderer){
        parent::__construct($plugin, $mode, $renderer);
    }

    function _print($tab, $type, $text, $reverse) {
        $this->renderer->listu_open();
        foreach($tab as $item) {
            $this->_printElement($item);
        }
        $this->renderer->listu_close();
    }
}