<div class="modal fade" id="idver<?=$row['idEstudiante']?>" tabindex="-1" aria-labelledby="VistaModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="VistaModal">VistaModal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card" style="width: 28rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nombre: <?= $row['nombre']?></li>
                <li class="list-group-item">Apellido: <?= $row['apellido']?></li>
                <li class="list-group-item">Curso: <?= $row['curso']?></li>


            </ul>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>