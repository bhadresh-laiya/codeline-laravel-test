<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Film
 *
 */
class Film extends Model {

  use Slugable;

  protected $dates = [
    'created_at',
    'updated_at',
    'realease_date',
  ];

  public function country() {
    return $this->belongsTo(Country::class);
  }

  public function genre() {
    return $this->belongsTo(Genre::class);
  }

  public function photo() {
    return $this->belongsTo(Image::class);
  }

  public function comments() {
    return $this->morphMany(Comment::class, 'commentable');
  }

  public function year() {
    return $this->realease_date->format('Y');
  }

  public function title() {
    return "$this->name ({$this->year()})";
  }

}