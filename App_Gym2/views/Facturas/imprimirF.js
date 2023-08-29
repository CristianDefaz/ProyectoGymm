
  $().ready(() => {
    var url = new URL(window.location);
    var idfactura = url.searchParams.get('id')
    ImprimirJs(idfactura);
  
  });
  
  



  

  
  var ImprimirJs = async (factura_id) => {
    await $.post('../../controllers/factura.controller.php?op=uno', {
      factura_id: factura_id
    }, async (res) => {
      res = JSON.parse(res);
      console.log(res);
      document.getElementById('DatosCliente').innerHTML = `<h1>Factura #</h1>
  
  <p><b>Cédula: </b> ${res.cli_cedula}</p> <br>
  <p><b>Nombre: </b> ${res.cli_nombre}</p> <br>
  <p><b>Apellido: </b> ${res.cli_apellido}</p> <br>
  <p><b>Direccion: </b> ${res.cli_direccion}</p> <br>
  <p><b>Telefono: </b> ${res.cli_telefono}</p> <br>
  `
  document.getElementById('Fecha').innerHTML = `<h1></h1>
  
  <p><b>Fecha: </b> ${res.fa_fecha}</p> <br>
  `
  document.getElementById('Membresia').innerHTML = `<h1></h1>
  
  <p><b>Tipo: </b> ${res.tipo_menbresia}</p> <br>
  <p><b>Detalle: </b> ${res.tipo_descripcion}</p> <br>
  
  `
  document.getElementById('ValoraPagar').innerHTML = `<h1></h1>
  
  <p><b>ValorTotal: </b> ${res.tipo_costo}</p> <br>
  `
        ;
  
    })
    
    var contenidoImprimir = document.getElementById('modalFacturaImprimir').innerHTML;
    var contenidoOriginal = document.body.innerHTML;
    document.body.innerHTML = contenidoImprimir;
    window.print()
    document.body.innerHTML = contenidoOriginal;
   

  }
  