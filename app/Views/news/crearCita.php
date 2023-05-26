<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>
<div class="container">
    <h2>Formulario de Consultas Médicas</h2>
    <form action="/news/crearCita" method="post">
    <?= csrf_field() ?>
      <div class="form-group">
        <label>Fecha:</label>
        <input type="date" name="fecha" value="<?= set_value('fecha') ?>" required>
      </div>
      <div class="form-group">
        <label>Hora:</label>
        <input type="time" name="hora" value="<?= set_value('hora') ?>" required>
      </div>
      <div class="form-group">
        <label>Paciente:</label>
        <input type="text" name="paciente" value="<?= set_value('paciente') ?>" required>
      </div>
      <div class="form-group">
        <label>Médico:</label>
        <input type="text" name="medico" value="<?= set_value('medico') ?>" required>
      </div>
      <div class="form-group">
        <label>Diagnóstico:</label>
        <textarea name="diagnostico" required><?= set_value('diagnostico') ?></textarea>
      </div>
      <div class="form-group">
        <label>Tratamiento:</label>
        <textarea name="tratamiento" required><?= set_value('tratamiento') ?></textarea>
      </div>
      <div class="form-group">
        <label>Observaciones:</label>
        <textarea name="observaciones"><?= set_value('observaciones') ?></textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Create news item">
      </div>
    </form>
</div>