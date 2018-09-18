<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Genre
 *
 */
class Genre extends Model {

  public function films() {
    return $this->hasMany(Film::class);
  }

}