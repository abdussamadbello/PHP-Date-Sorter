<?php

// Unordered data
$json_data=
    '[{
        "mon": "Jan",
        "month_orders": "349"
    },
    {
        "mon": "Feb",
        "month_orders": "414"
    },
    {
        "mon": "Mar",
        "month_orders": "401"
    },
    {
        "mon": "Apr",
        "month_orders": "481"
    },
    {
        "mon": "May",
        "month_orders": "444"
    },
    {
        "mon": "Jun",
        "month_orders": "526"
    },
    {
        "mon": "Jul",
        "month_orders": "565"
    },
    {
        "mon": "Aug",
        "month_orders": "591"
    },
    {
        "mon": "Sep",
        "month_orders": "800"
    },
    {
        "mon": "Oct",
        "month_orders": "848"
    },
    {
        "mon": "Nov",
        "month_orders": "557"
    },
        {
        "mon": "Mar",
        "month_orders": "401"
    },
    {
        "mon": "Apr",
        "month_orders": "481"
    },
    {
        "mon": "May",
        "month_orders": "444"
    },
    {
        "mon": "Jun",
        "month_orders": "526"
    }]';

//convert JSon to array
    $data=json_decode($json_data,true);

//add columns as variables 
    $month  = array_column($data, 'mon');
    $month_orders = array_column($data, 'month_orders');
    $name='mon';
    
// function to compare dates, strtotime is used to format date to real numbers
  function date_compare($a, $b)
  {
    $t1 = strtotime($a['mon']);
    $t2 = strtotime($b['mon']);
    return $t1 - $t2;
  } 

//usort is a function that can sort variables in an array
   usort($data, 'date_compare');
   
   print_r($data);

    ?>