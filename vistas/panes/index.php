<h2>Lista de panes</h2>
<div class="table-border">
    <table width="100%" border=1px class="table">
        <thead>
            <tr>
                <td id="red-text">#</td>
                <td>Tipos de pan</td>
                <td>Nombre</td>
                <td>País de origen</td>
                <td>Tamaño promedio</td>
                <td>Fecha de adición</td>
                <td>Fecha de edición</td>
                <td>Acciones</td>

            </tr>

        </thead><?php
                $count = 0;
                $total = 0;
                ?>

        <tbody>

            <?php while ($p = mysqli_fetch_assoc($panes)) { ?>
            <?php $count++;
                $total = $total + $p['tamano_promedio']; ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['tipo_de_pan'] ?></td>
                <td><?= $p['nombre'] ?></td>
                <td><?= $p['pais_de_origen'] ?></td>
                <td><?= $p['tamano_promedio']; ?> cm</td>
                <td><?= $p['fecha_de_creacion'] ?></td>
                <td><?= $p['fecha_de_edicion'] ?></td>
                <td>
                    <a href="index.php?controlador=panes&action=editar&id=<?= $p['id'] ?>">Editar</a> /
                    <a class="danger-text"
                        href="index.php?controlador=panes&action=eliminar&id=<?= $p['id'] ?>">Borrar</a>
                </td>
            </tr>


            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Promedio</td>
                <td colspan="3"></td>
                <td id="red-text"><?php if ($count > 0) : echo $total / $count . " cm";
                                    else : echo 0 . " cm";
                                    endif; ?></td>
                <td colspan="3"></td>
            </tr>
        </tfoot>
    </table>
</div>