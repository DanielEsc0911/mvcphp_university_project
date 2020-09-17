<h2>Editar pan</h2>
<fieldset>
    <form class="" action="index.php?controlador=panes&action=guardar" id="panpan" method="POST">
        <br>
        <input type="hidden" name="id" value="<?= $pan['id'] ?>">
        <label for="tipo_de_pan">Tipo de pan:</label>
        <select form="panpan" name="tipo_de_pan" selected="<?= $pan['tipo_de_pan'] ?>">
            <option <?= $pan['tipo_de_pan'] == "Trigo" ? "selected" : "" ?> value="Trigo">Trigo</option>
            <option <?= $pan['tipo_de_pan'] == "Maíz" ? "selected" : "" ?> value="Maíz">Maíz</option>
            <option <?= $pan['tipo_de_pan'] == "Centeno" ? "selected" : "" ?> value="Centeno">Centeno</option>
            <option <?= $pan['tipo_de_pan'] == "Espelta" ? "selected" : "" ?> value="Espelta">Espelta</option>
            <option <?= $pan['tipo_de_pan'] == "Germinado" ? "selected" : "" ?> value="Germinado">Germinado</option>
        </select>
        <br><br>
        <label for="nombre">Nombre del pan</label>
        <input type="text" required name="nombre" value="<?= $pan['nombre'] ?>">
        <br><br>
        <label for="pais_de_origen">País de origen:</label>
        <select form="panpan" name="pais_de_origen" selected="<?= $pan['pais_de_origen'] ?>">
            <option <?= $pan['pais_de_origen'] == "Alemania" ? "selected" : "" ?> value="Alemania">Alemania</option>
            <option <?= $pan['pais_de_origen'] == "China" ? "selected" : "" ?> value="China">China</option>
            <option <?= $pan['pais_de_origen'] == "España" ? "selected" : "" ?> value="España">España</option>
            <option <?= $pan['pais_de_origen'] == "Estados Unidos" ? "selected" : "" ?> value="Estados Unidos">Estados
                Unidos</option>
            <option <?= $pan['pais_de_origen'] == "Francia" ? "selected" : "" ?> value="Francia">Francia</option>
            <option <?= $pan['pais_de_origen'] == "Italia" ? "selected" : "" ?> value="Italia">Italia</option>
            <option <?= $pan['pais_de_origen'] == "Reino Unido" ? "selected" : "" ?> value="Reino Unido">Reino Unido
            </option>
            <option <?= $pan['pais_de_origen'] == "Rusia" ? "selected" : "" ?> value="Rusia">Rusia</option>
            <option <?= $pan['pais_de_origen'] == "Turquía" ? "selected" : "" ?> value="Turquía">Turquía</option>
            <option <?= $pan['pais_de_origen'] == "Tailandia" ? "selected" : "" ?> value="Tailandia">Tailandia</option>
            <option <?= $pan['pais_de_origen'] == "Venezuela" ? "selected" : "" ?> value="Venezuela">Venezuela</option>
        </select>
        <br><br>
        <label for="tamano_promedio">Tamaño promedio</label>
        <input type="number" required placeholder="0.0 cm" step="0.1" min="0" max="1000" name="tamano_promedio"
            value="<?= $pan['tamano_promedio'] ?>">
        <br>
        <hr>
        <button class="confirm-button-b" type="submit" name="button">Guardar</button>
    </form>
</fieldset>