<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 22:09
 */

namespace App\Peca;


/**
 * Class Motor
 * @package App\Peca
 */
class Motor implements PecaInterface
{

    /**
     * Retorna a descrição do motor.
     * @return string
     */
    public function getDescription()
    {
        return "Aqui temos 1 motor.\n";
    }
}