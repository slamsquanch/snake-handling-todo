<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Priorities
 *
 * @author chach
 */
class Priorities extends MY_Model{
    public function __construct() {
        parent::__construct('priorities', 'id');
    }
}
