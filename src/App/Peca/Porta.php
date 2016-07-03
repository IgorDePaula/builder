<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 22:07
 */

namespace App\Peca;


/**
 * Class Porta
 * @package App\Peca
 */
class Porta implements PecaInterface
{

    /**
     * Retorna a descrição da porta
     * @return string
     */
    public function getDescription()
    {
        return "Aqui temos 1 porta.\n";
    }
}