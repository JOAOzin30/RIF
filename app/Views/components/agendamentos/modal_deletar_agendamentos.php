<div class="modal fade" id="modal-deletar-agendamentos" tabindex="-1" aria-labelledby="ModalLabelMass" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabelMass">Confirmação necessária</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form id="formDeletarMulti" method="post" action="<?= base_url('sys/agendamento/deletarMulti'); ?>">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <p>Confirma a exclusão dos agendamentos selecionados?</p>
                    <p class="text-muted small">Esta ação não poderá ser desfeita.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Excluir Selecionados</button>
                </div>
            </form>
        </div>
    </div>
</div>