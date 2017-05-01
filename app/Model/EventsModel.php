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

  public function countEventsOfUser($id)
  {
    $query = $this->dbh->query('SELECT COUNT(*) as events FROM events WHERE  user_id = '. $id);
    return $query->fetch();
  }
}
