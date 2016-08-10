<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if ($tiempo !== false) {
    ?>
    <div class="row pull-right" id="content_count">
        <div><p>Inscripci&oacute;n inicia en:</p></div>
        <div id="counter" data-time="<?php echo $tiempo ?>"></div>
    </div>
<?php } ?>
<div class="row talleres-class">
<!--    <div class="col-md-12">
        <h3>Candidatos a inscribirse al Taller de Piano:</h3>
        <p>Inmediatamente después de haber obtenido el voucher que genera el sistema, favor de presentarlo en el Departamento de Actividades Culturales, como parte indispensable de su procedimiento de inscripción. Las inscripciones que no atiendan a este requerimiento serán canceladas.</p>
    </div>-->
    <div class="col-md-12">
        <?php
        if (is_array($talleres)) {
            $count = 0;
            foreach ($talleres as $taller) {
                if ($count == 0) {
                    ?>
                    <div class="row">
                        <?php
                    }
                    ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>images/talleres/<?php echo $taller['id'] . '_image' ?>.jpg" />
                            <div class="caption">
                                <h3><?php echo $taller['taller'] ?></h3>
                                <p><?php echo $taller['informacion'] ?></p>
                                <p><a href="admin/talleres/get_info/<?php echo $taller['id'] ?>" class="btn btn-link">M&aacute;s informaci&oacute;n..</a></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $count++;
                    if ($count == 4) {
                        $count = 0;
                        ?>
                    </div>
                    <?php
                }
            }
            if ($count > 0 && $count < 4) {
                echo '</div>';
            }
        }else{
            ?>
            <p style="font-size:20px;padding: 30px 0 30px 0;text-align:center;">Por el momento no se encuentran actividades para inscribir. <br />Sigue al pendiente de las inscripciones.<br />¡Gracias por tu atención!</p>
            <?php
        }
        ?>
    </div>
</div>
    <div class="row" id="requisitos_inscripcion">
            <div class="bs-callout bs-callout-primary">
                <h4>Tramitar credencial deportiva</h4>
                <div class="list-group">
                    <div class="list-group-item">
                        <h4>Escanear y enviar al e-mail <strong><a href="mailto:cadyr_fesara@outlook.com">cadyr_fesara@outlook.com</a></strong> los siguientes documentos:</h4>
                        <ul>
                            <li>Credencial UNAM o INE.</li>
                            <li>Tira de materias o comprobante de inscripción del semestre en curso.</li>
                            <li>1 fotografía tamaño infantil.</li>
                            <li>Carnet de Seguridad Social IMSS.</li>
                            <li>Pago en caja de $40.00  (Saldar en Caja)</li>
                        </ul>
                    </div>
                    <div class="list-group-item">
                        <h4>En asunto debes escribir tu nombre completo: apellido paterno, materno y nombre(s), y en el cuerpo del correo los siguientes datos:</h4>
                        <ul>
                            <li>Lugar y fecha de nacimiento.</li>
                            <li>Tipo de sangre (Si no lo conoce especificar “Desconocido”)</li>
                            <li>Alergias.</li>
                            <li>En caso de emergencia avisar a: Nombre de algún familiar y su número telefónico (preferentemente móvil).</li>
                        </ul>
                    </div>
                    <div class="list-group-item">
                        <h4>Para la entrega de tu credencial debes presentar:</h4>
                        <ul>
                            <li>Identificación UNAM o INE</li>
                            <li>Fotografía tamaño infantil reciente (en papel fotográfico, no enmicada, no sellada, no escaneada).</li>
                            <li>Recibo de pago por $40.00</li>
                        </ul>
                    </div>
                    <div class="list-group-item">
                        <h4>La credencial deportiva se entregará  5 días hábiles después de haber enviado el correo.</h4>
                    </div>
                </div>
            </div>
            <div class="bs-callout bs-callout-primary">
                <h4>Renovación de credencial deportiva</h4>
                <ul>
                    <li>Credencial UNAM o INE.</li>
                    <li>Registro de inscripción (tira de materias del semestre en curso).</li>
                    <li>Pago en caja de $40.00</li>
                    <li>1 fotografía tamaño infantil.</li>
                    <li>Credencial Deportiva 2016-II</li>
                </ul>
            </div>
    </div>
<div class="row">
    <div class="modal fade active" id="informacion_modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>
