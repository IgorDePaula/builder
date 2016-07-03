<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 22:06
 */

namespace App\Peca;


/**
 * Interface PecaInterface
 * @package App\Peca
 */
interface PecaInterface
{
    /**
     * Retorna a descrição da peça
     * @return string
     */
    public function getDescription();
}