<?php

namespace App\Imports;

use App\Models\ExcelUpload;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelUploadImport implements ToModel, WithHeadingRow
{
    protected $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function model(array $row)
    {
        return new ExcelUpload([
            'user_id' => $this->userId,
            'scheme_code' => $row['scheme_code'],
            'scheme_name' => $row['scheme_name'],
            'central_state_scheme' => $row['central_state_scheme'],
            'fin_year' => $row['fin_year'],
            'state_disbursement' => $row['state_disbursement'],
            'central_disbursement' => $row['central_disbursement'],
            'total_disbursement' => $row['total_disbursement'],
        ]);
    }
}
