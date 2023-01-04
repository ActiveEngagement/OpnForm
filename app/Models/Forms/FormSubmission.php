<?php

namespace App\Models\Forms;

use App\Models\Forms\Form;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'data', 'meta'
    ];

    protected $casts = [
        'data' => 'array',
        'meta' => 'array'
    ];

    /**
     * RelationShips
     */
    public function form() {
        return $this->belongsTo(Form::class);
    }
}
