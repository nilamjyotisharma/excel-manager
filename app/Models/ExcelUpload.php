<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelUpload extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'scheme_code',
        'scheme_name',
        'central_state_scheme',
        'fin_year',
        'state_disbursement',
        'central_disbursement',
        'total_disbursement',
    ];
}
