<?php

function printMessage($message) {
    if ($message=='success-create')
        return '<span class="text-success">Usuário cadastrado com sucesso!</span>';
    if ($message=='error-create')
        return '<span class="text-error">Erro ao cadastrar usuário.</span>';

    if ($message=='success-remove')
        return '<span class="text-success">Usuário deletado com sucesso!</span>';
    if ($message=='error-remove')
        return '<span class="text-error">Erro ao deletar usuário.</span>';

    if ($message=='success-update')
        return '<span class="text-success">Dados atualizados cm sucesso!</span>';
    if ($message=='error-update')
        return '<span class="text-error">Erro ao atualizar dados.</span>';
}
