<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['number_of_words', 'duration', 'discount', 'name', 'email', 'is_complementary', 'package_type_id', 'field_of_text_id'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(PackageType::class, 'package_type_id');
    }

    public function fieldOfText(): BelongsTo
    {
        return $this->belongsTo(FieldOfText::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }
}
