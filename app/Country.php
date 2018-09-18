<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Country
 *
 */
class Country extends Model {

  public function films() {
    return $this->hasMany(Film::class);
  }

}