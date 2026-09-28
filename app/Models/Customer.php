<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;
	
	protected $fillable = [
		'name',
		'phone',
		'email',
		'company',
		'status'
	];

	// #[Override]
	// protected function casts(): array
	// {
	// 	return [
	// 		'name' => 'name',
	// 		'phone' => 'phone',
	// 		'email' => 'email',
	// 		'company' => 'company',
	// 		'status' => 'status',
	// 	];
	// }
}
