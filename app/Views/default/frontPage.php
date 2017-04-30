<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


    <div id="frontPage">
  <div class="container-fluid">
    <div class="">
      <div class="sidebar-panel" style="min-height: 550px;position: fixed;">
        <div>
            <h4>Les dix dernier Messages ->nb message <span class="badge badge-info pull-right">16</span></h4>
            <div class="feed-element">
                <a href="#" class="pull-left">
                    <img alt="image" class="img-circle" src="<?= $this->assetUrl('img/course.gif') ?>">
                </a>
                <div class="media-body">
                    message poste
                    <br>
                    <small class="text-muted">heure h:m.s</small>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?= $this->assetUrl('img/moto.jpg')?>" alt="Los Angeles">
      </div>

      <div class="item">
        <img src="<?= $this->assetUrl('img/plan.jpg')?>" alt="Chicago">
      </div>

      <div class="item">
        <img src="<?= $this->assetUrl('img/course.gif')?>" alt="New York">
      </div>
      <div class="item">
        <img src="<?= $this->assetUrl('img/carousel/trajet.png')?>" alt="New York">
      </div>
      <div class="item">
        <img src="<?= $this->assetUrl('img/carousel/create-event.jpg')?>" alt="New York">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
  </div><!-- /.row -->

		<div class="row">
      <div class="col-md-3">
        <h2>Balade du jour</h2>
          <div class="well">
            <div class="center">
              <img src="<?= $this->assetUrl('img/trip-3357.png')?>" alt="">
            </div>
            <h3>
              <a href="#" title="">Ballade</a>
            </h3>
            <table class="table table-bordered table-condensed">
              <tbody>
              <tr>
                <td class="strong">Distance</td>
                <td><i class="icon-road"></i> <b>87.92</b> km</td>
              </tr>
              <tr>
                <td colspan="2">
                <i class="icon-heart"></i> <b>0</b> vote			</td>
              </tr>
              <tr>
                <td colspan="2">
                <i class="icon-eye-open"></i> <b>706</b> vues			</td>
              </tr>
             <tr>
                <td class="strong">Créée par</td>
                <td>
                    <a href="/profil/dom94">dom94</a>
                </td>
             </tr>
            </tbody></table>
          </div>
        <div class="clear"></div>
      </div>
      <div class="col-md-3">
        <h2>Balade du jour</h2>
          <div class="well">
            <div class="center">
              <img src="<?= $this->assetUrl('img/trip-3357.png')?>" alt="">
            </div>
            <h3>
              <a href="#" title="">Ballade</a>
            </h3>
            <table class="table table-bordered table-condensed">
              <tbody>
              <tr>
                <td class="strong">Distance</td>
                <td><i class="icon-road"></i> <b>87.92</b> km</td>
              </tr>
              <tr>
                <td colspan="2">
                <i class="icon-heart"></i> <b>0</b> vote			</td>
              </tr>
              <tr>
                <td colspan="2">
                <i class="icon-eye-open"></i> <b>706</b> vues			</td>
              </tr>
             <tr>
                <td class="strong">Créée par</td>
                <td>
                    <a href="">dom94</a>
                </td>
             </tr>
            </tbody></table>
          </div>
        <div class="clear"></div>
      </div>
      <div class="col-md-3">
        <h2>Balade du jour</h2>
          <div class="well">
            <div class="center">
              <img src="<?= $this->assetUrl('img/trip-3357.png')?>" alt="">
            </div>
            <h3>
              <a href="#" title="Ballade du 13 juin 2015 ( week end normandie 3 )">Ballade</a>
            </h3>
            <table class="table table-bordered table-condensed">
              <tbody>
              <tr>
                <td class="strong">Distance</td>
                <td><i class="icon-road"></i> <b>87.92</b> km</td>
              </tr>
              <tr>
                <td colspan="2">
                <i class="icon-heart"></i> <b>0</b> vote			</td>
              </tr>
              <tr>
                <td colspan="2">
                <i class="icon-eye-open"></i> <b>706</b> vues			</td>
              </tr>
             <tr>
                <td class="strong">Créée par</td>
                <td>
                    <a href="/profil/dom94">dom94</a>
                </td>
             </tr>
            </tbody></table>
          </div>
        <div class="clear"></div>
      </div>
			<div id="wrapper">
  <div id="info">
    <div id="info-content">
      <h1>Multi level <strong>CSS-only push menu</strong></h1>
      <p>&lt;noscript&gt;No javascript required&lt;/noscript&gt;</p>
    </div>
  </div>

  <input type="checkbox" id="menu" name="menu" class="menu-checkbox">
  <div class="menu">
    <label class="menu-toggle" for="menu"><span>Toggle</span></label>
    <ul>
      <li>
        <a href="#">Menu-1</a>
      </li>
      <li>
        <a href="#">Menu-2</a>
      </li>
      <li>
        <label for="menu-3">Menu-3</label>
        <input type="checkbox" id="menu-3" name="menu-3" class="menu-checkbox">
        <div class="menu">
          <label class="menu-toggle" for="menu-3"><span>Toggle</span></label>
          <ul>
            <li>
              <a href="#">Menu-3-1</a>
            </li>
            <li>
              <label for="menu-3-2">Menu-3-2</label>
              <input type="checkbox" id="menu-3-2" name="menu-3-2" class="menu-checkbox">
              <div class="menu">
                <label class="menu-toggle" for="menu-3-2"><span>Toggle</span></label>
                <ul>
                  <li>
                    <a href="#">Menu-3-2-1</a>
                  </li>
                  <li>
                    <a href="#">Menu-3-2-2</a>
                  </li>
                  <li>
                    <label for="menu-3-2-3">Menu-3-2-3</label>
                    <input type="checkbox" id="menu-3-2-3" name="menu-3-2-3" class="menu-checkbox">
                    <div class="menu">
                      <label class="menu-toggle" for="menu-3-2-3"><span>Toggle</span></label>
                      <ul>
                        <li>
                          <a href="#">Menu-3-2-3-1</a>
                        </li>
                        <li>
                          <a href="#">Menu-3-2-3-2</a>
                        </li>
                        <li>
                          <a href="#">Menu-3-2-3-3</a>
                        </li>
                        <li>
                          <a href="#">Menu-3-2-3-4</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">Menu-3-2-4</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#">Menu-3-3</a>
            </li>
            <li>
              <a href="#">Menu-3-4</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <label for="menu-4">Menu-4</label>
        <input type="checkbox" id="menu-4" name="menu-4" class="menu-checkbox">
        <div class="menu">
          <label class="menu-toggle" for="menu-4"><span>Toggle</span></label>
          <ul>
            <li>
              <a href="#">Menu-4-1</a>
            </li>
            <li>
              <a href="#">Menu-4-2</a>
            </li>
            <li>
              <a href="#">Menu-4-3</a>
            </li>
            <li>
              <a href="#">Menu-4-4</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <label for="menu-5">Menu-5</label>
        <input type="checkbox" id="menu-5" name="menu-5" class="menu-checkbox">
        <div class="menu">
          <label class="menu-toggle" for="menu-5"><span>Toggle</span></label>
          <ul>
            <li>
              <a href="#">Menu-5-1</a>
            </li>
            <li>
              <a href="#">Menu-5-2</a>
            </li>
            <li>
              <a href="#">Menu-5-3</a>
            </li>
            <li>
              <a href="#">Menu-5-4</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a href="#">Menu-6</a>
      </li>
    </ul>
  </div>
</div><!-- #wrapper -->

  </div><!-- /.container-fluid -->
</div><!-- /#frontPage -->

<?php $this->stop('main_content') ?>
