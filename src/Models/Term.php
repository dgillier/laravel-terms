<?php

namespace Nowendwell\LaravelTerms\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Term extends Model
{
    use HasTranslations;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "terms";

    public $translatable = ['terms'];

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $fillable = [
        'terms'
    ];
}
