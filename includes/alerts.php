<div class="modal status" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php if($_GET['status'] === "ok"):?>
                <h3>Su mensaje ha sido enviado con éxito</h3>
                <p>Nos pondremos en contacto a la brevedad.</p>
            <?php else:?>
                <h3>Su mensaje no pudo ser enviado</h3>
                <p>Escríbanos a contacto@grupoparadigma.com para resolver su duda</p>
            <?php endif;?>
      </div>
    </div>
  </div>
</div>