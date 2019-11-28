
<div class="row">
	<div class="col-xs-12 text-center">
		<b>AC Soluciones</b><br>
		Calle Moquegua 430 <br>
		Tel. 4641281 <br>
		Email:admininstrador@acsoluciones.com
	</div>
</div> <br>
<br>
<div class="row">
	<div class="col-xs-12">
		<table class="table table-bordered">
			<thead>
				<tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Cantidad Adquirida</th>
                    <th>Importe</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($detalles as $detalle):?>
				<tr>
					<td><?php echo $detalle->codigo;?></td>
					<td><?php echo $detalle->nombre;?></td>
					<td><?php echo $detalle->precio;?></td>
					<td><?php echo $detalle->cantidad;?></td>
					<td><input type="text" name="cantidades[]"></td>
					<td><?php echo $detalle->importe;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="5" class="text-right"><strong>Subtotal:</strong></td>
					<td><?php echo $compra->subtotal;?></td>
				</tr>
				<tr>
					<td colspan="5" class="text-right"><strong>IGV:</strong></td>
					<td><?php echo $compra->igv;?></td>
				</tr>
				<tr>
					<td colspan="5" class="text-right"><strong>Total:</strong></td>
					<td><?php echo $compra->total;?></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>