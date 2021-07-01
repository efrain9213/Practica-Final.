<!DOCTYPE html>
<html lang="es" dir="ltr">
  <cabeza>
    <meta charset="utf-8">
    <title>Practica Final</title>
    <script type="text/javascript" src="js/funciones.js"> </script>
    <link rel="stylesheet" href="efrainphp/Practica final.css"   type="text/css">
    <tipo descript ="text/javascript" src="efrainphp/Practica final.js"> >
</cabeza>
  <cuerpo>
      <encabezado>
        <h1>Practica Final</h1>
        <body background="https://th.bing.com/th/id/Rf71935b950c80ac3e8fd090af751e6c1?rik=1kYe70pDqLeKEQ&pid=ImgRaw">
      </encabezado>
      <nav> <!-- Aquí va el menú --> </nav>
      <sección>
<!--        <form method="post" name="formm1" id="form1"> -->
        <div id="datosGenerales">
          <h2>Datos Generales</h2>
          <p>Clave. Empleado</label>
          <input type="text" name="clave" id="clave" size="8" maxlength="5" placeholder="Alfanumérico" required>
          </p>
          <p><label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" size="20" maxlength="50" placeholder="Nombre(s)" required>
          </p>
          <p> Apellido</label>
          <input type="text" name="apellido" id="apellido" size="20" maxlength="80" placeholder="Apellido(s)" required>
          </p>
          </p>
        </Div>
        <div id="datosTrabajo">
          <h2>Datos Trabajo</h2>
          <p>
            <etiqueta para="salario">Salario $</etiqueta>
            <input type="number" class="numero" name="salario" id="salario" size="10" maxlength="10" placeholder=" Mayora cero" required onchange="calcularNomina()">
          </p>
          <p>
            <label for="dias">Días Trabajados</label>
            <Input Type="Number" Class="numero" Name="Dias" ID="Dias" Size="5" MaxLength="8" Value = "15" Placeholder="15" Required OnChange="CalcularNomina()">
          </p>
          <p>Tipo Empleado</p>
                <p><label><input type="radio" name="tipo" id="tipo" value="A" checked onchange="generaOptions()">Administrativo</label></p>
                <p><label><input type="radio" name="tipo" id="tipo" value="O" onchange="generaOptions()">Operativo</label></p>
          <etiqueta para="depto">
          </etiqueta>
        </Div>
        <div id="nomina">
          <h2>Nómina</h2>
          <p>
            <etiqueta para="importe">Importe $</label>
            <Input Type="text" class="numero" name="importe" id="importe" size="10" readonly>
          </p>
        </Div>
        <div id="botones">
          </p>
          <p><button> <onclick="calcularNomina()">Calcular</button>
          <input type="reset" name="limpiar" id="limpiar" value="Limpiar"></p>
        </Div>
