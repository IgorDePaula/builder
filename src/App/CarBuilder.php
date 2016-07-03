<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 22:05
 */

namespace App;

use App\Peca\PecaInterface;
use ArrayObject;
use App\Peca\Motor,
    App\Peca\Porta,
    App\Peca\Roda;

/**
 * Class CarBuilder
 * @package App
 */
class CarBuilder
{
    /**
     * @var ArrayObject|null
     */
    private $motor = null;
    /**
     * @var ArrayObject|null
     */
    private $porta = null;
    /**
     * @var ArrayObject|null
     */
    private $roda = null;
    /**
     * @var ArrayObject|null
     */
    private $pecas = null;

    /**
     * CarBuilder constructor.
     */
    public function __construct()
    {
        $this->pecas = new ArrayObject();
        $this->motor = new ArrayObject();
        $this->roda = new ArrayObject();
        $this->porta = new ArrayObject();
    }

    /**
     * Adiciona Peças ao construtor do objeto
     * @param PecaInterface $peca
     */
    public function addPeca(PecaInterface $peca)
    {
        $this->pecas->append($peca);
    }

    /**
     * Constrói o objeto
     */
    public function construct()
    {
        $iterator = $this->pecas->getIterator();
        while ($iterator->valid()) {
            $current = $iterator->current();
            if (get_class($current) === Roda::class) {
                $this->roda->append($current);
            }
            if (get_class($current) === Porta::class) {
                $this->porta->append($current);
            }
            if (get_class($current) === Motor::class) {
                $this->motor->append($current);
            }
            $iterator->next();
        }
    }

    /**
     * Retorna a construcao do carro
     */
    public function getConstruction()
    {
        $iterator = $this->pecas->getIterator();
        $desc = '';
        while ($iterator->valid()) {
            $current = $iterator->current();
            $desc .= $current->getDescription();
            $iterator->next();
        }
        return $desc;
    }

    /**
     * Retorna as roas
     * @return ArrayObject|null
     */
    public function getRoda()
    {
        return $this->roda;
    }

    /**
     * Retorna o(s) motor(es)
     * @return ArrayObject|null
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Retorna as portas
     * @return ArrayObject|null
     */
    public function getPorta()
    {
        return $this->porta;
    }


}