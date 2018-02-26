<?php
/**
  * @PHP             Versions 5.6 ~ 7.0
  * @package        Bereshit [Masár Project]
  * @Licensed       Licensed under The MIT License
  * @copyright      Jesus Baizabal
  * @link           http://baizabal.xyz
  * @mail           baizabal.jesus@gmail.com
  * @subpackage     CRM Tutorial
  * @since          2000
  * @license        MIT License (http://www.opensource.org/licenses/mit-license.php)
  */
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>

<!-- main-panel -->

<div id="navbar-orange">
        <nav class="navbar navbar-ct-warning">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Proceso Electoral Local</a>
                </div>
                <div class="collapse navbar-collapse">

                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <i class="fa fa-line-chart"></i>
                                <p>XMF</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-success text-center">
                                        <i class="ti-package"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>INSTALADAS</p>
                                        1,350
                                    </div>
                                </div>
                            </div>
                            <div class="footer">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-warning text-center">
                                        <i class="ti-package"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>CERRADAS</p>
                                        20
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-danger text-center">
                                        <i class="ti-pulse"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>INCIDENCIAS</p>
                                        5
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-7">
                    <div class="card">
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Buscar Casilla</label>
                                            <input type="text" class="form-control border-input" placeholder="ID Casilla / Nombre Representante / Estatus">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <hr>


            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                       <a href="/index7.html">
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-warning text-center">
                                        <i class="ti-package"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>CASILLA</p>
                                        CA101
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <div class="icon-container">
                                        <span class="ti-user"></span><span class="icon-name">Nombre Representante</span>
                                    </div>
                                    <div class="icon-container">
                                        <span class="ti-mobile"></span><span class="icon-name">(984)-999-9999</span>
                                    </div>

                                    <div class="icon-container">
                                        <span class="ti-signal"></span><span class="icon-name">Conectado</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-package"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>CASILLA</p>
                                            CA308
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                            <div class="icon-container">
                                                <span class="ti-user"></span><span class="icon-name">Nombre Representante</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-mobile"></span><span class="icon-name">(984)-999-9999</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-layers-alt"></span><span class="icon-name">Incidencia</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-warning text-center">
                                        <i class="ti-package"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>CASILLA</p>
                                        CA202
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                        <div class="icon-container">
                                            <span class="ti-user"></span><span class="icon-name">Nombre Representante</span>
                                        </div>
                                        <div class="icon-container">
                                            <span class="ti-mobile"></span><span class="icon-name">(984)-999-9999</span>
                                        </div>

                                        <div class="icon-container">
                                            <span class="ti-write"></span><span class="icon-name">Primer Reporte</span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-warning text-center">
                                        <i class="ti-package"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                        <p>CASILLA</p>
                                        CA308
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                        <div class="icon-container">
                                            <span class="ti-user"></span><span class="icon-name">Nombre Representante</span>
                                        </div>
                                        <div class="icon-container">
                                            <span class="ti-mobile"></span><span class="icon-name">(984)-999-9999</span>
                                        </div>

                                        <div class="icon-container">
                                            <span class="ti-layers-alt"></span><span class="icon-name">Incidencia</span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-package"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>CASILLA</p>
                                            CA101
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <div class="icon-container">
                                            <span class="ti-user"></span><span class="icon-name">Nombre Representante</span>
                                        </div>
                                        <div class="icon-container">
                                            <span class="ti-mobile"></span><span class="icon-name">(984)-999-9999</span>
                                        </div>

                                        <div class="icon-container">
                                            <span class="ti-signal"></span><span class="icon-name">Conectado</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <div class="icon-big icon-warning text-center">
                                                <i class="ti-package"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p>CASILLA</p>
                                                CA308
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                                <div class="icon-container">
                                                    <span class="ti-user"></span><span class="icon-name">Nombre Representante</span>
                                                </div>
                                                <div class="icon-container">
                                                    <span class="ti-mobile"></span><span class="icon-name">(984)-999-9999</span>
                                                </div>

                                                <div class="icon-container">
                                                    <span class="ti-layers-alt"></span><span class="icon-name">Incidencia</span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-package"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>CASILLA</p>
                                            CA202
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                            <div class="icon-container">
                                                <span class="ti-user"></span><span class="icon-name">Nombre Representante</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-mobile"></span><span class="icon-name">(984)-999-9999</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-write"></span><span class="icon-name">Primer Reporte</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-package"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>CASILLA</p>
                                            CA308
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                            <div class="icon-container">
                                                <span class="ti-user"></span><span class="icon-name">Nombre Representante</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-mobile"></span><span class="icon-name">(984)-999-9999</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-layers-alt"></span><span class="icon-name">Incidencia</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-info btn-fill btn-wd">Exportar XLS</button>
        </div>
    </div>
