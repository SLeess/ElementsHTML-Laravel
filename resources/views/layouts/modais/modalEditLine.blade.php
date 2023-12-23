<div class="modal fade bd-example-modal-lg" id="EditarModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloLabelModalEditar"></h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <form>
                            <div class="form-group">
                                <label for="type-name" class="col-form-label">Tipo:</label>
                                <input type="text" class="form-control" id="typeInput" maxlength="60">
                            </div>
                            <div class="form-group">
                                <label for="description-name" class="col-form-label">Descrição:</label>
                                <textarea class="form-control" id="descriptionTextArea" maxlength="255"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="html-code" class="col-form-label">HTML:</label>
                                <textarea class="form-control txtGeral" id="htmlTextArea"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="css-code" class="col-form-label">CSS:</label>
                                <textarea class="form-control" id="cssTextArea"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="img-link" class="col-form-label">Link de Imagem:</label>
                                <input type="text" class="form-control" id="imgLinkInput" maxlength="255">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarModalEditarBtn">Cancelar</button>
                <button type="button" class="btn btn-danger" id="salvarAlteracoesModalEditarBtn">Salvar Alterações</button>
            </div>
        </div>
    </div>
</div>