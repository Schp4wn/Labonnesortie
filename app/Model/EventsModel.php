<?php

namespace Model;

use \W\Model\Model;

class EventsModel extends Model
{
  
  public function countEvents()
  {
    $query = $this->dbh->query('SELECT COUNT(*) as events FROM events');
    return $query->fetch();
  }

}
