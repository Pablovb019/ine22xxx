<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    static function Offerings(){
        $sNow = date('Y-m-d H:i:s');
        
        return Product::where('discountStart_at', '<=', $sNow)->
            where('discountEnd_at', '>=', $sNow)->
            get();
    }

    static function NewProducts(){
        $sNow = date('Y-m-d H:i:s');
        $sNextWeek = date('Y-m-d H:i:s', strtotime($sNow . ' + 1 week'));
        return Product::where(DB::raw(
            'date_format(updated_at, "%Y-%m-%d")'),
            '>=', date('Y-m-d', strtotime($sNow)))->
            where('updated_at', '<=', date('Y-m-d', 
            strtotime($sNextWeek)))->get();
    }

    public function HasDiscount() {

        $sNow = date('Y-m-d H:i:s');

        if ($this->discountPercent > 0 && $this->discountStart_at <= $sNow && $this->discountEnd_at >= $sNow) {
            return true;
        } else {
            return false;
        }
    }
}
