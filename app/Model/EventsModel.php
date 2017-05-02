<?php

namespace Model;

use \W\Model\Model;
use  Model\EventsModel;

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

  public function lastevent()
  {
    $query = $this->dbh->query('SELECT * FROM `users` INNER JOIN events ON users.id = events.user_id ORDER BY `post` DESC LIMIT 3');
    return $query->fetchAll();
  }

  public function subscribersEvent($event, $id)
  {
    $event_manager = new EventsModel();
    $event = $event_manager->find($event);

    $query = $this->dbh->query('SELECT username FROM users INNER JOIN events ON events.subscriber_id = users.id WHERE events.id = '.$id);
    return $query->fetchAll();
  }

  // public function getsearch($search)
  // {
  //   $query = $this->dbh->query('SELECT * as events FROM events WHERE  depart_address = '. $search);
  //   return $query->fetch();
  // }
}
