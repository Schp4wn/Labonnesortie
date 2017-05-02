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

  public function lastevent()
  {
    $query = $this->dbh->query('SELECT * FROM `users` INNER JOIN events ON users.id = events.user_id ORDER BY `post` DESC LIMIT 3');
    return $query->fetchAll();

  }
  public function countAllEvent(){
    $query = $this->dbh->query('SELECT * FROM `users` INNER JOIN events ON users.id = events.user_id' );
    return $query->fetchAll();
  }

	//on herite de tout ce qu il ya dans W
	public function countEventsForUser($id)
    {
      $query = $this->dbh->query('SELECT COUNT(*) as events FROM events Where events.user_id =' . $id);
      return $query->fetch();
    }
}
