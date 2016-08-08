<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<div id="encabezado">
    <h3>CARRERA ATL&Eacute;TICA DE LA FES ARAG&Oacute;N 5 KM</h3>
    <h4>Domingo 9 de octubre del 2016</h4>
    <h3>FICHA DE INSCRIPCI&Oacute;N</h3>
    <br /><br />
    <div>
        <?php
        switch ($usuario['tipo_usuario_id']) {
            case 2: case 3:
                ?>
                <div>COMUNIDAD UNAM</div><br />
                <div>Nombre: <?php echo $usuario['paterno'] . ' ' . $usuario['materno'] . ' ' . $usuario['nombre'] ?></div>
                <div>Plantel: <?php echo $usuario['data_user']['facultad']; ?></div>
                <div>Carrera: <?php echo $usuario['data_user']['carrera']; ?></div>
                <div>No. Cuenta: <?php echo $usuario['data_user']['no_cuenta']; ?></div>
                <div>Tel&eacute;fono: <?php echo $usuario['telefono']; ?></div>
                <div>Email: <?php echo $usuario['email']; ?></div>
                <div>Categor&iacute;a: </div>
                <div>Rama: </div>
                <div>Folio: <?php echo str_pad($baucher['folio'], 11, "0", STR_PAD_LEFT); ?></div>
                <div>Fecha Expedici&oacute;n: <?php echo exchange_date_time($baucher['fecha_expedicion']) ?></div>
                <?php
                break;
            case 4:
                ?>
                <div>COMUNIDAD UNAM</div><br />
                <div>Nombre: <?php echo $usuario['paterno'] . ' ' . $usuario['materno'] . ' ' . $usuario['nombre'] ?></div>
                <div>No. Trabajador: <?php echo $usuario['data_user']['no_cuenta']; ?></div>
                <div>Turno: <?php echo $usuario['data_user']['turno']; ?></div>
                <div>Area: <?php echo $usuario['data_user']['area']; ?></div>
                <div>Tel&eacute;fono: <?php echo $usuario['telefono']; ?></div>
                <div>Email: <?php echo $usuario['email']; ?></div>
                <div>Categor&iacute;a: </div>
                <div>Rama: </div>
                <div>Folio: <?php echo str_pad($baucher['folio'], 11, "0", STR_PAD_LEFT); ?></div>
                <div>Fecha Expedici&oacute;n: <?php echo exchange_date_time($baucher['fecha_expedicion']) ?></div>
                <?php
                break;
            case 5:
                ?>
                <div>P&Uacute;BLICO EN GENERAL</div><br />
                <div>Nombre: <?php echo $usuario['paterno'] . ' ' . $usuario['materno'] . ' ' . $usuario['nombre'] ?></div>
                <div>Tel&eacute;fono: <?php echo $usuario['telefono']; ?></div>
                <div>Email: <?php echo $usuario['email']; ?></div>
                <div>Direcci&oacute;n: <?php echo $usuario['data_user']['direccion']; ?></div>
                <div>Categor&iacute;a: </div>
                <div>Rama: </div>
                <div>Folio: <?php echo str_pad($baucher['folio'], 11, "0", STR_PAD_LEFT); ?></div>
                <div>Fecha Expedici&oacute;n: <?php echo exchange_date_time($baucher['fecha_expedicion']) ?></div>
                <?php
                break;
        }
        ?>
    </div>
</div>
<br /><br />
<div class="responsiva">
    <h3>CARTA RESPONSIVA</h3>
    <p>Declaro estar sano y apto para participar en la "CARRERA ATL&Eacute;TICA DE LA FES ARAG&Oacute;N 5
    KIL&Oacute;METROS" que se realizar&aacute; el d&iacute;a domingo 9 de octubre de 2016, reconozco los riesgos
    inherentes a la actividad mencionada, por lo que voluntariamente y con conocimiento pleno
    de esto, acepto y asumo la responsabilidad de mi integridad f&iacute;sica y libero de toda responsabilidad 
    a la UNIVERSIDAD NACIONAL AUT&Oacute;NOMA DE M&Eacute;XICO y al Comit&eacute; Organizador.
    </p>
</div>
<br /><br /><br /><br />
<div class="firmas">
        <span>&nbsp;&nbsp;&nbsp;Firma del corredor&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;
        <?php
        if($usuario["edad"] < 18){
            ?>
            &nbsp;&nbsp;&nbsp;<span>&nbsp;&nbsp;&nbsp;Firma del tutor (Menor de edad)&nbsp;&nbsp;&nbsp;</span>
            <?php
        }
        ?>
</div>
<div class="fecha_limite">
    <h5>* Fecha l&iacute;mite para realizar el pago: Viernes 7 de octubre de 2016.</h5>
</div>
<div class="paquete">
    <h3>RECIB&Iacute; PAQUETE COMPLETO QUE INCLUYE </h3>
    <ul>
        <li>Payera: </li>
        <li>N&uacute;mero: </li>
        <li>Chip de corredor: </li>
    </ul>
</div>
<br />
<div class="firmas_footer">
    <div>Nombre: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
    <div>Fecha: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
    <div>Firma: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
</div>