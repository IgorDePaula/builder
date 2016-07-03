<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 22:10
 */

namespace App\Peca;


/**
 * Class Roda
 * @package App\Peca
 */
class Roda implements PecaInterface
{

    /**
     * Retorna a descrição da porta
     * @return string
     */
    public function getDescription()
    {
        return "Aqui temos 1 roda.\n";
    }
}