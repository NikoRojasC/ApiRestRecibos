<?php

namespace App\Filters;

use Illuminate\Http\Request;

use App\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter
{

    protected $safeParam = [

        'customerId' => ['eq'],
        'amount' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'status' => ['eq'],
        'billedDate' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'paidDate' => ['eq', 'gt', 'gte', 'lt', 'lte'],


    ];
    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];
    protected $operatorMap = [
        'eq'    => '=',
        'lt'    => '<',
        'lte'   => '<=',
        'gt'    => '>',
        'gte'   => '>=',
        'ne'    => '!='
    ];
}
