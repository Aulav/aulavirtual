@extends('plantillas.main')
@section('title', 'Graficas') 

@section('contenido')

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
		${demo.css}
		</style>
		<!--Grafica 1-->
		<div class="row" >
            <div class="col s4">
              <div class="card teal lighten-5">
                <div class="card-content z-depth-4">
			 		<?php 
			            $sql = "SELECT roles.name, COUNT(*) FROM administradores, roles where administradores.rol_id=roles.id 
			                    group by roles.name
			                    UNION
			                    SELECT roles.name, COUNT(*) FROM alumnos, roles where alumnos.rol_id=roles.id 
			                    group by roles.name
			                    UNION
			                    SELECT roles.name, COUNT(*) FROM docentes, roles where docentes.rol_id=roles.id 
			                    group by roles.name";
			            $result = mysqli_query(mysqli_connect("localhost","root","","aulavirtual"),$sql);
			            ?>
						<table width="75%" align="centered" class="highlight teal lighten-4">
			              <thead>
			                  <tr class="danger" align="centered">
			                      <td><b>Personal</b></td>
			                      <td><b>Cantidad</b></td>
			                  </tr>
			                </thead>
			                <tbody>
			                        <?php
			                       while($row=$result->fetch_assoc()) { ?>
			                              <tr>                                      
			                              <td><?php echo $row['name'];?></td>  
			                              <td><?php echo $row['COUNT(*)'];?></td> 
			                              </tr>
			                    <?php } ?> 
			                </tbody>  
			          </table>
				</div>	
			</div>
		</div>
	</div>

		<div class="row" >
            <div class="col s6">
              <div class="card">
                <div class="card-content z-depth-3">

		<script type="text/javascript"> 


				$(function () {
				    $('#grafica').highcharts({ 
				        chart: {
				            type: 'pie',
				            options3d: {
				                enabled: true,
				                alpha: 45,
				                beta: 0
				            }
				        },
				        title: {
				            text: 'Cantidad de Personal en la Institución'
				        },
				        tooltip: {
				            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				        },
				        plotOptions: {
				            pie: {
				                allowPointSelect: true,
				                cursor: 'pointer',
				                depth: 35,
				                dataLabels: {
				                    enabled: true,
				                    format: '{point.name}'
				                }
				            }
				        },
				        series: [{
				            type: 'pie',
				            name: 'Browser share',
				            data: [
				             <?php 
				            $sql = "SELECT roles.name, COUNT(*) FROM administradores, roles where administradores.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM alumnos, roles where alumnos.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM docentes, roles where docentes.rol_id=roles.id 
				                    group by roles.name";

				            $result = mysqli_query(mysqli_connect("localhost","root","","aulavirtual"),$sql);
				            while ($registros = mysqli_fetch_array($result))
				            {
				            ?>
				                ['<?php echo $registros["name"]; ?>',   <?php echo $registros["COUNT(*)"] ?>],
				            <?php 
				            }
				            ?>
				            ]
				        }]
				    });
				});
						
					
					</script>
					

						<div id="grafica" style="height: 200px"></div>
					
							
							</div>
						</div>
					</div>

					<!--Fin grafica 1-->

					<!--Grafica 2-->
				            <div class="col s6">
				              <div class="card">
				                <div class="card-content z-depth-3">

						<script type="text/javascript">

				$(function () {
				    $('#grafica2').highcharts({
				        chart: {
				            type: 'column',
				            margin: 100,
				            options3d: {
				                enabled: true,
				                alpha: 10,
				                beta: 25,
				                depth: 70
				            }
				        },
				        title: {
				            text: 'Personal registrado en el Sistema'
				        },
				        subtitle: {
				            text: ''
				        },
				        plotOptions: {
				            column: {
				                depth: 25
				            }
				        },
				        xAxis: {
				            categories:
				            [
				            <?php 
				            $sql = "SELECT roles.name, COUNT(*) FROM administradores, roles where administradores.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM `alumnos`, roles where alumnos.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM `docentes`, roles where docentes.rol_id=roles.id 
				                    group by roles.name";
				            $result = mysqli_query(mysqli_connect("localhost","root","","aulavirtual"),$sql);
				            while ($registros = mysqli_fetch_array($result))
				            {
				            ?>
				                '<?php echo $registros["name"]; ?>',
				            <?php
				            }
				            ?>
				            ]
				        },
				        yAxis: {
				            title: {
				                text: null
				            }
				        },
				        series: [{
				            name: 'Cantidad',
				            data: [
				               <?php 
				            $sql = "SELECT roles.name, COUNT(*) FROM administradores, roles where administradores.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM `alumnos`, roles where alumnos.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM `docentes`, roles where docentes.rol_id=roles.id 
				                    group by roles.name";
				            $result = mysqli_query(mysqli_connect("localhost","root","","aulavirtual"),$sql);
				            while ($registros = mysqli_fetch_array($result))
				            {
				            ?>
				                <?php echo $registros["COUNT(*)"] ?>,
				            <?php 
				            }
				            ?>
				            ]
				        }]  
				    });
				});
						</script>
					

							<div id="grafica2" style="height: 200px"></div>	
							</div>
						</div>
					</div>

				<!--Fin grafica 2-->

				<!--Grafica 3-->

					
				            <div class="col s6">
				              <div class="card">
				     
				                <div class="card-content z-depth-3">

						<script type="text/javascript">

				$(function () {
				    $('#grafica3').highcharts({
				        title: {
				            text: 'Reportes Estadisticos',
				            x: -20 //center
				        },
				        subtitle: {
				            text: 'Source: WorldClimate.com',
				            x: -20
				        },
				        xAxis: {
				            categories: [
				            <?php 
				            $sql = "SELECT roles.name, COUNT(*) FROM administradores, roles where administradores.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM `alumnos`, roles where alumnos.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM `docentes`, roles where docentes.rol_id=roles.id 
				                    group by roles.name";
				            $result = mysqli_query(mysqli_connect("localhost","root","","aulavirtual"),$sql);
				            while ($registros = mysqli_fetch_array($result))
				            {
				            ?>
				                '<?php echo $registros["name"]; ?>',
				            <?php
				            }
				            ?>
				            ]
				        },
				        yAxis: {
				            title: {
				                text: ''
				            },
				            plotLines: [{
				                value: 0,
				                width: 1,
				                color: '#808080'
				            }]
				        },
				        tooltip: {
				            valueSuffix: ''
				        },
				        legend: {
				            layout: 'vertical',
				            align: 'right',
				            verticalAlign: 'middle',
				            borderWidth: 0
				        },
				        series: [{
				            name: 'Cantidad',
				            data: [
				            <?php 
				            $sql = "SELECT roles.name, COUNT(*) FROM administradores, roles where administradores.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM `alumnos`, roles where alumnos.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM `docentes`, roles where docentes.rol_id=roles.id 
				                    group by roles.name";
				            $result = mysqli_query(mysqli_connect("localhost","root","","aulavirtual"),$sql);
				            while ($registros = mysqli_fetch_array($result))
				            {
				            ?>
				                <?php echo $registros["COUNT(*)"] ?>,
				            <?php
				            }
				            ?>
				            ]
				        }]
				    });
				});
						</script>
					

						<div id="grafica3" style="height: 200px"></div>
									
							</div>
						</div>
					</div>


				<!--Fin grafica 3-->

				<!--grafica 4-->
					
				            <div class="col s6">
				              <div class="card">
				     
				                <div class="card-content z-depth-3">

						<script type="text/javascript">

				$(function () {
				    $('#grafica4').highcharts({ 
				        chart: {
				            type: 'pie',
				            options3d: {
				                enabled: true,
				                alpha: 45,
				                beta: 0
				            }
				        },
				        title: {
				            text: 'Cantidad de Personal en la Institución'
				        },
				        tooltip: {
				            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				        },
				        plotOptions: {
				            pie: {
				                allowPointSelect: true,
				                cursor: 'pointer',
				                depth: 35,
				                dataLabels: {
				                    enabled: true,
				                    format: '{point.name}'
				                }
				            }
				        },
				        series: [{
				            type: 'pie',
				            name: 'Browser share',
				            data: [
				             <?php 
				            $sql = "SELECT roles.name, COUNT(*) FROM administradores, roles where administradores.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM alumnos, roles where alumnos.rol_id=roles.id 
				                    group by roles.name
				                    UNION
				                    SELECT roles.name, COUNT(*) FROM docentes, roles where docentes.rol_id=roles.id 
				                    group by roles.name";

				            $result = mysqli_query(mysqli_connect("localhost","root","","aulavirtual"),$sql);
				            while ($registros = mysqli_fetch_array($result))
				            {
				            ?>
				                ['<?php echo $registros["name"]; ?>',   <?php echo $registros["COUNT(*)"] ?>],
				            <?php 
				            }
				            ?>
				            ]
				        }]
				    });
				});
						
					
					</script>
					

		<div id="grafica4" style="height: 200px"></div>
	
				</div>
			</div>
		</div>
	</div>
@endsection	

   