<?php
/**
 * Created by PhpStorm.
 * User: 52971457249
 * Date: 16/02/2018
 * Time: 19:53
 */

namespace Vendas;


class Venda
{
    private $id;
    private $dataVenda;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDataVenda()
    {
        return $this->dataVenda;
    }

    /**
     * @param mixed $dataVenda
     */
    public function setDataVenda($dataVenda)
    {
        $this->dataVenda = $dataVenda;
    }



}