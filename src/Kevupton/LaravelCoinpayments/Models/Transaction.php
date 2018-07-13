<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/09/2017
 * Time: 12:31 PM
 */

namespace Kevupton\LaravelCoinpayments\Models;

/**
 * Class Transaction
 * @package Kevupton\LaravelCoinpayments\Models
 * @property mixed id
 * @property mixed amount1
 * @property mixed amount2
 * @property mixed currency1
 * @property mixed currency2
 * @property mixed address
 * @property mixed buyer_email
 * @property mixed buyer_name
 * @property mixed item_name
 * @property mixed item_number
 * @property mixed invoice
 * @property mixed custom
 * @property mixed ipn_url
 * @property mixed txn_id
 * @property mixed confirms_needed
 * @property mixed received_amount
 * @property mixed received_confirms
 * @property mixed status
 * @property mixed status_text
 * @property mixed timeout
 * @property mixed fee
 * @property mixed status_url
 * @property mixed qrcode_url
 * @property mixed created_at
 * @property mixed updated_at
  * @property mixed dest_tag
 */
class Transaction extends Model
{
    public $fillable = [
        'amount1', 'amount2', 'currency1', 'currency2', 'address',
        'buyer_email', 'buyer_name', 'item_name', 'item_number',
        'invoice', 'custom', 'ipn_url', 'txn_id', 'fee',
        'confirms_needed', 'timeout', 'status_url', 'qrcode_url',
        'received_amount', 'received_confirms', 'status', 'status_text','dest_tag'
    ];
}
