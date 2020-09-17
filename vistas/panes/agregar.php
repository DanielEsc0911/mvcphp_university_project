<h2>Agregar Panes</h2>
<fieldset>
    <form class="" action="index.php?controlador=panes&action=guardar" id="panpan" method="POST">
        <br>
        <label for="tipo_de_pan">Tipo de pan:</label>
        <select form="panpan" name="tipo_de_pan" value="">
            <option value="Trigo">Trigo</option>
            <option value="Maíz">Maíz</option>
            <option value="Centeno">Centeno</option>
            <option value="Espelta">Espelta</option>
            <option value="Germinado">Germinado</option>
        </select>
        <br><br>
        <label for="nombre">Nombre del pan</label>
        <input type="text" required name="nombre" value="">
        <br><br>
        <label for="pais_de_origen">País de origen:</label>
        <select form="panpan" name="pais_de_origen" value="">
            <option value="Alemania">Alemania</option>
            <option value="China">China</option>
            <option value="España">España</option>
            <option value="Estados Unidos">Estados Unidos</option>
            <option value="Francia">Francia</option>
            <option value="Italia">Italia</option>
            <option value="Reino Unido">Reino Unido</option>
            <option value="Rusia">Rusia</option>
            <option value="Turquía">Turquía</option>
            <option value="Tailandia">Tailandia</option>
            <option value="Venezuela">Venezuela</option>
        </select>
        <br><br>
        <label for="tamano_promedio">Tamaño promedio</label>
        <input type="number" required placeholder="0.0 cm" step="0.1" min="0" max="1000" name="tamano_promedio"
            value="">
        <br>
        <hr>
        <button class="danger-button" type="reset">Limpiar</button>
        <button class="confirm-button" type="submit" name="button">Guardar</button>
        <br>
    </form>
</fieldset>