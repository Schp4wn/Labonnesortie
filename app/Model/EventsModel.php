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
  
  /*
  * Compte les km total
  */
  public function countKm()
  {
    $query = $this->dbh->query('SELECT SUM(distance) FROM events');
    return $query->fetch();
  }

  /*
   * Compte les km total dun utilisateur
   */
  public function countKmUser($id)
  {
    $query = $this->dbh->query('SELECT SUM(distance) as KmOfUser FROM events WHERE user_id = '. $id);
    return $query->fetch();
  }

}
