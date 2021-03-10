<?php
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

if (! function_exists('create_slug')) {
    function create_slug($string,$id){
        $slug = Str::slug($string,'-').'-'.$id;
        return $slug;
    }
}
if (! function_exists('date_time_now_type_1')) {
    function date_time_now_type_1(){
        return Carbon::now()->format('Y-m-d');
    }
}

function showErrors($errors,$name){
    if($errors->has($name)){
        echo '<div class="alert alert-danger" role="alert">';
        echo '<strong>'.$errors->first($name).'</strong>';
        echo '</div>';
    }
}
?>
