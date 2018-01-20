<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <title>Flotilla</title>

   
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/principal.js"></script>
</head>

<body class="fixed-navbar sidebar-scroll">
      
<style>
    .skin-option {
        position: fixed;
        text-align: center;
        right: -1px;
        padding: 10px;
        top: 80px;
        width: 150px;
        height: 133px;
        text-transform: uppercase;
        background-color: #ffffff;
        box-shadow: 0 1px 10px 0px rgba(0, 0, 0, 0.05), 10px 12px 7px 3px rgba(0, 0, 0, .1);
        border-radius: 4px 0 0 4px;
        z-index: 100;
    }
</style>
<div class="modal fade" id="busModalInsert">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="close" data-dismiss="modal">&times;</a>
                        <h3 class="modal-title">Agregar Vehículo</h3>
                    </div>
                    <div class="modal-body">
                        <form method="post" id = "busform" class="form-horizontal" display="Dynamic">

                        <div class="hr-line-dashed"></div>              
                        <div class="form-group">
                            <label class="control-label" >Placa</label>
                            <input type="text" id="id" class ="form-control"  required="" value=""></input>
                        </div>
                        
                       <div class="hr-line-dashed"></div>                        
                        <div class="form-group">
                            <label class="control-label" >Capacidad</label>
                            <input id="capacity" type="number" class="form-control"  required="" value=""></input>
                        </div>

                        <div class="hr-line-dashed"></div>                        
                        <div class="form-group">
                            <label class="control-label" >Servicios</label>
                            <input id="services"  class="form-control" required="" value=""></input>
                        </div>
                        
                        <div class="hr-line-dashed"></div>                        
                        <div class="form-group">
                            <label class="control-label" >Conductor</label>
                            <input id="driver"  class="form-control" required="" value=""></input>
                        </div>
                        
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-8">
                                <input  id="addBus" type ="button"  onclick="addBusJS();"  data-dismiss="modal" class="btn btn-primary" value="Agregar Bus" />
                                <input type="submit" id="cancelarInsersecion" class="btn btn-default" data-dismiss="modal" href="Flotilla.html"  value="Cancelar" />   
                            </div>
                        </div>

                        </form>

                    <div class="modal-footer">
                    </div>

                </div>

            </div>

        </div>
    </div>


<div id="header">
 
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
            blank
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">blank</span>
        </div>

        <div class="mobile-menu" runat ="server">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>   
                        <a class="" href="Autenticacion.aspx" >Logout</a>
                    </li>
                     <li>
                    <a href="#">
                    <i class="" data-toggle="modal" data-target="#busModalInsert">Add Bus</i>
                    </a>
    </li>
    </li>
                </ul>
            </div>
        </div>

        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a href="#">
                    <i class="pe-7s-plus"
                    data-toggle="modal" data-target="#busModalInsert"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="Autenticacion.aspx">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <ul class="nav" id="side-menu">
            
            <li>
             <a href="#"><span class="nav-label">1</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="#">1.1</a></li>
                    <li><a href="#">1.2</a></li>

                </ul>
            </li>

            <li>
             <a href="#"><span class="nav-label">2</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    
                </ul>
            </li>
            <li>
             <a href="Flotilla.html"><span class="nav-label">Flotilla</span></a>
            </li>

            <li>
             <a href="#"><span class="nav-label">4</span></a>
            </li>
          
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">
    <div class="content">
        <div class="row">
              <div class="col-lg-12">
                  <div class="hpanel">
                <div class="panel-heading">
                    <h1>Flotilla</h1>
                </div>
                <div class="panel-body">
                <div class="table-responsive">
                    <div align="right">
					<button type="button" id="add_button" onclick="displayBusesTable();" data-toggle="modal" data-target="#userModal" class="btn btn-lg">Add</button>
				</div>
                <table id="tableFlotilla" cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Placa</th>
                        <th>Capacidad</th>
                        <th>Servicios</th>
                        <th>Chofer</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                </div>

            </div>
            </div>

        </div>
        </div>
    </div>



    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
        </span>
    </footer>

</div>
<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/jquery-flot/jquery.flot.js"></script>
<script src="vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="vendor/flot.curvedlines/curvedLines.js"></script>
<script src="vendor/jquery.flot.spline/index.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/peity/jquery.peity.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>

<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!-- App scripts -->
<script src="scripts/principal.js"></script>
<script>
  $(function () {
      $('#tableFlotilla').DataTable({
          'paging': true,
          'lengthChange': true,
          'searching': true,
          'ordering': true,
          'info': true,
          'autoWidth': true,
          'destroy': true,
          'responsive': true,
      });
  })
</script>

</body>

</html>
