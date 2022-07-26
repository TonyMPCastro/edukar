
"<table>
<thead>
    <tr style='background-color:#9C9C9C;'>

        <th colspan='9'>&nbsp;</th>
        <th colspan='3'>$rel_saldo_inicial_lang</th>
        <th colspan='3'>$rel_entradas_lang</th>
        <th colspan='3'></th>
        <th colspan='3'>$rel_saldo_final_lang</th>
    </tr>
    <tr>
        <th style='font-size: 8pt'>$loja_lang</th>
        <th style='font-size: 8pt'>$rel_desc_loja_lang</th>
        <th style='font-size: 8pt'>$plu_lang</th>
        <th style='font-size: 8pt'>$rel_desc_plu_lang</th>
        <th style='font-size: 8pt'>$rel_nf_lang</th>
        <th style='font-size: 8pt'>$rel_cod_forn_lang</th>
        <th style='font-size: 8pt'>$rel_forn_cli_lang</th>
        <th style='font-size: 8pt'>$rel_tdoc_nf_lang</th>
        <th style='font-size: 8pt'>$rel_tipo_mov_lang</th>
        <th style='font-size: 8pt'>$rel_qtd_lang</th>
        <th style='font-size: 8pt'>$rel_valor_unit_lang</th>
        <th style='font-size: 8pt'>$rel_valor_total_lang</th>
        <th style='font-size: 8pt'>$rel_qtd_lang</th>
        <th style='font-size: 8pt'>$rel_valor_unit_lang</th>
        <th style='font-size: 8pt'>$rel_valor_total_lang</th>
        <th style='font-size: 8pt'>$rel_qtd_lang</th>
        <th style='font-size: 8pt'>$rel_valor_unit_lang</th>
        <th style='font-size: 8pt'>$rel_valor_total_lang</th>
        <th style='font-size: 8pt'>$rel_qtd_lang</th>
        <th style='font-size: 8pt'>$rel_valor_total_lang</th>
        <th style='font-size: 8pt'>$rel_custo_medio_unit_lang</th>

    </tr>

</thead>

<tbody>"

   
    $i = 1;

    $vTotalInicial = 0;
    $vTotalEntrada = 0;
    $vTotalSaida = 0;
    $vTotalFinal = 0;

    if (count($relData_b)) {

        foreach ($relData_b as $dados) {

            $arrStore = explode('-', $dados['store_name']);
            $dados['store_name'] = ($arrStore[1]) ? '{$arrStore[0]} - {$arrStore[1]}' : $arrStore[0];

            $vTotalInicial += $dados['inicial_total'];
            $vTotalEntrada += $dados['entrada_total'];
            $vTotalSaida += $dados['saida_total'];
            $vTotalFinal += $dados['final_total'];
        
            <tr rowspan='2'>

                <td>
                    <div class='listCell' >
                        <span class='listText'>'{$dados['store']}'</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>substr($dados['store_name'], 0, 10);</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['plu']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['plu_desc']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['nf']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['forn_key']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>substr($dados['forn_name'], 0, 10);</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['tipo_doc']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['tipo_operacao']}';</span>
                    </div>
                </td>

                <!------------------- SALDO INICIAL ------------------->

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['inicial_qtd']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['inicial_valor_un']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['inicial_total']}';</span>
                    </div>
                </td>

                <!---------------------- ENTRADAS --------------------->

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['entrada_qtd']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['entrada_valor_un']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['entrada_total']}';</span>
                    </div>
                </td>                        

                <!----------------------- SAIDAS ---------------------->

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['saida_qtd']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['saida_valor_un']}';</span>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['saida_total']}';</span>
                    </div>
                </td> 

                <!-------------------- SALDO FINAL -------------------->

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['final_qtd']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['final_total']}';</span>
                    </div>
                </td>

                <td >
                    <div class='listCell' >
                        <span class='listText'>'{$dados['final_custo_medio']}';</span>
                    </div>
                </td> 

            </tr>

            <?php
            $i++;
        }
    } else {
       

        <tr>

            <td colspan='21' style='font-size: 8pt;'>
                <div class='listCell' >
                    <span class='listText'>$rel_res_nao_enc_lang;</span>
                </div>
            </td>

        </tr>

        <?php
    }
   

    <tr style='background-color:#AACCDD;font-size:25 !important; '>

        <td colspan='9' style='text-align: right;'>$txtTotal;:</td>

        <td colspan='2' style='background-color:#AACCDD;'>&nbsp;</td>
        <td colspan='1' style=' background-color:#AACCDD;text-align: center;'>$vTotalInicial;</td>

        <td colspan='2' style='background-color:#4579AD; color:#FFFFFF;'>&nbsp;</td>
        <td colspan='1' style='background-color:#4579AD; color:#FFFFFF;text-align: center;'>$vTotalEntrada;</td>

        <td colspan='2' style=' background-color:#AACCDD;'>&nbsp;</td>
        <td colspan='1' style=' background-color:#AACCDD;text-align: center;'>$vTotalSaida;</td>

        <td colspan='2' style='background-color:#4579AD; color:#FFFFFF;'>&nbsp;</td>
        <td colspan='1' style='background-color:#4579AD; color:#FFFFFF;text-align: center;'>$vTotalFinal;</td>

    </tr>

</tbody>

</table>