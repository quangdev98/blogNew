<?php 
 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	protected $table = "author";
	protected $fillable = [ 'id', 'name', 'phone', 'lavel','email', 'tenkhongdau'];
}
?>