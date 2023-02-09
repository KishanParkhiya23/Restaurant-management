<?php

use App\Models\MenuCatagory;

function get_catagory($id){
    $catagory = MenuCatagory::find($id);
    return $catagory['catagory'];
}