<?php
/**
 * Created by PhpStorm.
 * User: Bunescu Ion
 * Date: 1/16/2017
 * Time: 3:26 PM
 */

class Attributtes
{
    function get_attr()
    {
        global $wpdb;
        $table = $wpdb->prefix."at_attributes";
        $query = "SELECT * FROM ".$table;
        $results = $wpdb->get_results( $query, OBJECT );
        return $results;
    }


}
