<?php
/**
 * Modal.class [ HELPER ]
 * Classe responável por gerar as Modais!
 * 
 * @copyright (c) 2014, Leo Bessa
 */
class Modal {
    
    public static function load() {
       echo '<div class="modal fade load" id="carregando" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header btn-info">
                                    <button type="button" class="close cancelar" data-dismiss="modal" aria-hidden="true">&nbsp;</button>
                                    <h4 class="modal-title"><b>CARREGANDO... AGUARDE.</b></h4>
                                </div>
                                <div class="modal-body">
                                        <div class="progress progress-striped active progress-sm">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                        <span class="sr-only"> 100% Complete (success)</span>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
            </div>';
       echo '<a data-toggle="modal" role="button" href="#carregando" id="load"></a>';
    }
    
    public static function deletaRegistro($id) {
       echo '<div class="modal fade deleta_registro" id="'.$id.'" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header btn-bricky">
                                            <button type="button" class="close cancelar" data-dismiss="modal" aria-hidden="true">
                                                    X
                                            </button>
                                            <h4 class="modal-title">Exclusão de Registro</h4>
                                    </div>
                                    <div class="modal-body">
                                            <p>Deseja Realmente excluir esse Registro?</p>
                                    </div>
                                    <div class="modal-footer">
                                            <button aria-hidden="true" data-dismiss="modal" class="btn btn-bricky cancelar">
                                                    Fechar
                                            </button>
                                            <button class="btn btn-success" data-dismiss="modal" id="">
                                                    OK
                                            </button>
                                    </div>
                            </div>
                    </div>
            </div>';
    }
    
    
    public static function confirmacao($id) {
       echo '<div class="modal fade confirmacao" id="'.$id.'" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                    <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                                <p id="confirmacao_msg"><b></b></p>
                            </div>
                            <div class="modal-footer">
                                    <button class="btn btn-success" data-dismiss="modal" id="">
                                            OK
                                    </button>
                            </div>
                        </div>
               </div>
        </div>';
       echo '<a data-toggle="modal" role="button" href="#'.$id.'" id="confirmacao"></a>';
    }
    
    public static function Foto() {
       echo '<div class="modal fade confirmacao" id="foto" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header btn-primary">
                                    <button type="button" class="close cancelar" data-dismiss="modal" aria-hidden="true" style="color: #fff;">
                                            X
                                    </button>
                                    <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                                <img src="" width="100%"/>
                            </div>
                            <div class="modal-footer">
                                    <button aria-hidden="true" data-dismiss="modal" class="btn btn-bricky cancelar">
                                            Fechar
                                    </button>
                            </div>
                        </div>
               </div>
        </div>';
    }
    
    
}