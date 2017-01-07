			<!-- BEGIN NAVBAR -->
			<nav class="navbar navbar-default" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="btn btn-transparent btn-equal btn-menu" href="javascript:void(0);"><i class="fa fa-bars fa-lg"></i></a>
				    <div class="navbar-brand">
						<a class="main-brand" href="zona.php">
							<h3 class="text-light text-white"><span><strong><?=$NombreEmpresa?></strong> </span></h3>
						</a>
					</div><!--end .navbar-brand -->
					<a class="btn btn-transparent btn-equal navbar-toggle" data-toggle="collapse" data-target="#header-navbar-collapse"><i class="fa fa-wrench fa-lg"></i></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="header-navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="zona.php"><i class="fa fa-home fa-lg"></i></a></li>
					</ul><!--end .nav -->
					<ul class="nav navbar-nav navbar-right">



<?
					$query000		="SELECT COUNT(*) AS TOTAL FROM Notificaciones WHERE Muestra = 0" ;
					$result000		=mysql_query($query000, $id);
					
					While($row000	=mysql_fetch_array($result000))
					{
					$TOTAL			=$row000["TOTAL"];
					if ($TOTAL>0) {
						$MsjNoti="Notificaciones";
					}
					else{
						$MsjNoti="No tiene notificaciones pendientes.";
					}
					if ($TOTAL>0) {
					$Total=$TOTAL;
					}else{
					$Total="";	
					}
					}
?>
					  <li><span class="navbar-devider"></span></li>
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i id="Campana" class="fa fa-lg fa-bell"></i><sup id="Total" class="badge badge-support2"><?=$Total?></sup></a>
							<ul id="Listas" class="dropdown-menu animation-zoom">
								<li class="dropdown-header"><?=$MsjNoti?></li>
								<? $queryRR = "SELECT * FROM Notificaciones WHERE Muestra=0"; 
								   $resultRR= mysql_query($queryRR,$id);
								   $Noti=0;
								   while ($rowRR=mysql_fetch_array($resultRR)) {
								   $IdNoti 	    =$rowRR["Id"];
								   $NombreNoti  =$rowRR["Nombre"];
								   $Texto 		=$rowRR["Texto"];
								   $Fecha 		=$rowRR["Fecha"];
								   $Noti++;
								?>
								<li id="ContenedorV<?=$Noti?>">
									<a style="cursor:pointer;" class="alert alert-warning link" onclick="Leer(<?=$IdNoti?>,<?=$Noti?>);">
										<table border="0">
										<tr>
										<td width="80%">
										<strong><?=$NombreNoti?></strong><br/>
										<small><?=$Texto?></small>
										</td>
										<td width="20%">&nbsp;&nbsp;&nbsp;&nbsp;<i title="Marcar como leido" align="center" style="width:30px;" class="fa fa-check-square fa-info fa-lg "></i></td>
										</tr>
										</table>
									</a>
								</li>
								<?} if($Noti>0){?>
								<li class="dropdown-header">Opciones</li>
								<li><a style="cursor:pointer;" onclick="Todas();">Marcar como leidos <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
								<?}?>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->

					  <li><span class="navbar-devider"></span></li>
						<li class="dropdown">
							<a href="javascript:void(0);" class="navbar-profile dropdown-toggle text-bold" data-toggle="dropdown"><?=$_SESSION['NombreR']?><i class="fa fa-fw fa-angle-down"></i></a>
							<ul class="dropdown-menu animation-slide">
                           	  <li class="divider"></li>
								<li><a href="perfil.php?Idmenu=2&Idsubmenu=1">Mi Cuenta</a></li>
								<li class="divider"></li>
								<li><a href="../../html/pages/salir.php"><i class="fa fa-fw fa-power-off text-danger"></i> Cerrar Sesion</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .nav -->
				</div><!--end #header-navbar-collapse -->
			</nav>
			<!-- END NAVBAR -->
			<script type="text/javascript">
			function Leer(Id,Cont){
			$.ajax({
  			url: "leido.php",    
  			type: "GET",   
  			data: "Id="+Id,  
  			success: function(html){
  			$("#ContenedorV"+Cont).empty();
  			$("#ContenedorV"+Cont).append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Leido!</strong></div>").fadeIn(1000);
  			$("#ContenedorV"+Cont).delay(2500);
  			$("#ContenedorV"+Cont).fadeOut(2500);
  			$("#Total").html(html);
  			if (html=="") {
  			$("#Listas").empty();
  			$("#Listas").html("<li class='dropdown-header'>No tiene notificaciones pendientes.</li>");
  			};
  			$("#Campana").click();
  			}
			});	
			};

			function Todas(){
			var Id=1;
			$.ajax({
  			url: "marcar-leidos.php",    
  			type: "GET",   
  			data: "Id="+Id,  
  			success: function(html){
  			$("#Total").html(html);
  			$("#Listas").empty();
  			$("#Listas").html("<li class='dropdown-header'>No tiene notificaciones pendientes.</li>");
  			$("#Campana").click();
  			}
			});	
			};
			</script>