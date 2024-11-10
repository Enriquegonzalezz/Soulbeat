@include('components.settings.item')
    <div>
        <label for="license-name">Nombre de la Licencia</label>
        <input type="text" id="license-name" name="license-name" required>
    </div>
    <div>
        <label for="license-description">Descripción de la Licencia</label>
        <textarea id="license-description" name="license-description" required></textarea>
    </div>
    <div>
        <button class="est toggle-button">Activo</button>
    </div>
    <button type="submit" id="modi">Modificar</button>
    <button type="submit" id="eli">Eliminar</button>
@include('components.settings.item', ['close' => true])