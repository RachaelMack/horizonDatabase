<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  public function organizationId(){
  return $this->belongsTo(Organization::class);
}
}
