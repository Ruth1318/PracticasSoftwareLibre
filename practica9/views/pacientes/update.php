<?php
require '../../controllers/PacientesController.php';
require  '../../constantes.php';



$css = CDN_BS_CSS;
$js = CDN_BS_JS;
$icons = CDN_ICONOS;

if($_SERVER["REQUEST_METHOD"]=='POST' && isset($_POST["id_pacientePost"])){

    updatePaciente($_POST,$_FILES["imagenes"]);
}else{
    $id = $_POST['id_paciente_actualizar'];
    $dataPacientes=obtenerData($id);
    $enfermedadesPacientes=obtenerEnfermedades($id);
    $dataRaza = obtenerRazas();

    $vacunasPaciente=obtenerVacunas($id);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear paciente</title>
    <?= $css ?>
    <?= $icons ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFC0CB;">
        <a class="navbar-brand" href="../../index.php"> <img src="../../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">Veterinaria UNIVO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item text-white">
                    <a class="nav-link" href="../especies/index.php">Especies</a>
                </li>
                <li class="nav-item text-white">
                    <a class="nav-link " href="../razas/index.php">Razas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Pacientes</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row p-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-white">Crear paciente</h3>
                </div>
                <div class="card-body">
                    <form action="update.php" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <!--Nombre-->
                            <div class="col-md-6 mt-2">
                                <input type="hidden" name="id_pacientePost" value="<?= $id?>">
                                <label for="nombre"><b>Nombre del paciente:</b></label>
                                <input class="form-control" type="text" name="nombre" id="nombre" value='<?= $dataPacientes[0]->nombre ?>'>
                            </div>
                            <!--Enfermedades-->
                            <div class="col-md-6 mt-2">
                                <label for="enfermedades"><b>Seleccione las enfermedades:</b></label><br>
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="enfermedades[]" value="rabia" <?php if(in_array('rabia',$enfermedadesPacientes)) echo "checked"; ?> id="enfermedades">
                                    <label class="form-check-label" for="rabia">rabia</label>
                                </div>
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="enfermedades[]" value="calentura" <?php if(in_array('calentura',$enfermedadesPacientes)) echo "checked"; ?> id="enfermedades">
                                    <label class="form-check-label" for="calentura">calentura</label>
                                </div>
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="enfermedades[]" value="gripe" <?php if(in_array('gripe',$enfermedadesPacientes)) echo "checked"; ?> id="enfermedades">
                                    <label class="form-check-label" for="Gripe">gripe</label>
                                </div> 
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="enfermedades[]" value="culichas" <?php if(in_array('culichas',$enfermedadesPacientes)) echo "checked"; ?> id="enfermedades">
                                    <label class="form-check-label" for="culichas">culichas</label>
                                </div>
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="enfermedades[]" value="pulgas" <?php if(in_array('pulgas',$enfermedadesPacientes,true)) echo "checked"; ?> id="enfermedades">
                                    <label class="form-check-label" for="pulgas">pulgas</label>
                                </div>
                            </div>
                            <!--Vacunas-->
                            <div class="col-md-6 mt-2">
                                <label for="vacunas"><b>Seleccione las vacunas:</b></label><br>
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="vacunas[]" value="rabia" <?php if(in_array('rabia',$vacunasPaciente,true)) echo "checked"; ?> id="vacunas">
                                    <label class="form-check-label" for="Distemper">Vacuna para la rabia</label>
                                </div>
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="vacunas[]" value="calentura" <?php if(in_array('calentura',$vacunasPaciente,true)) echo "checked"; ?> id="vacunas">
                                    <label class="form-check-label" for="Parvovirus">Vacuna para la calentura</label>
                                </div>
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="vacunas[]" value="gripe" <?php if(in_array('gripe',$vacunasPaciente,true)) echo "checked"; ?> id="vacunas">
                                    <label class="form-check-label" for="Leptospirosis">Vacuna para la gripe</label>
                                </div> 
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="vacunas[]" value="culichas"  <?php if(in_array('culichas',$vacunasPaciente,true)) echo "checked"; ?> id="vacunas">
                                    <label class="form-check-label" for="Rabia">Vacuna para la culichas</label>
                                </div>
                                <div class="form-group form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="vacunas[]" value="pulgas" <?php if(in_array('pulgas',$vacunasPaciente,true)) echo "checked"; ?> id="vacunas">
                                    <label class="form-check-label" for="Ninguna">Vacuna para la pulgas</label>
                                </div>
                            </div>
                            <!--Raza-->
                            <div class="col-md-6 mt-2">
                                <label for="nombre"><b>Seleccione la raza:</b></label>
                                <select name="id_raza" required class="form-control">
                                    <option value="" selected disabled>--Seleccione la raza--</option>
                                    <?php foreach ($dataRaza as $raza) {
                                        if ($dataPacientes[0]->id_raza == $raza->id_raza) {
                                            echo '<option selected value="' . $raza->id_raza . '">' . $raza->nombre . '</option>';
                                            continue;
                                        }
                                        ?>
                                         <option value="<?= $raza->id_raza ?>"><?= $raza->nombre ?></option>
                                       <?php }
                                    ?>
                                </select>
                            </div>
                            <!--Fecha-->
                            <div class="col-md-6 mt-2">
                                <label for="fecha"><b>Fecha</b></label>
                                <input class="form-control" type="date" name="fecha" id="fecha" value="<?= $dataPacientes[0]->fecha ?>">
                                <input type="datetime" hidden name="fecha_creacion" value="<?= $dataPacientes[0]->fecha_creacion ?>">
                            </div>
                            <!--Imagen-->
                            <div class="col-md-6 mt-2">
                                <label for="imagenes"><b>Seleccionar imagen</b></label>
                                <input class="form-control" type="file" name="imagenes" id="imagenes">
                            </div>
                            <div class="col-md-12 mt-2">
                                <button class="btn btn-primary" type="submit">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?=  $js ?>
</body>

</html>