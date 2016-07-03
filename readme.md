Builder Pattern
===============

Intenção
--------

Separar a construção de um objeto complexo da sua representação de modo que o
mesmo processo de construção possa criar diferentes representações. Estas respresentações são criadas passo a passo.

Aplicabilidade
--------------
Use o padrão Builder quando:
* o algoritmo para criação de um objeto complexo deve ser independente das
partes que compõem o objeto e de como elas são montadas.
* o processo de construção deve permitir diferentes representações para o
objeto que é construído.

Consequencias
-------------

* Permite variar a representação interna de um produto, de acordo com passo a passo dado para sua construção.
* Isola o código para construção e representação. Cada Builder contém todo o código para criar
                                                  e montar um tipo de peça específica. O código é escrito somente uma vez;
                                                  então, diferentes Applications podem reutilizá-lo para construir variantes de
                                                  Peca com o mesmo conjunto de partes.
* Oferece um controle mais fino sobre o processo de construção:Ao contrário de
                                                               padrões de criação que constroem produtos de uma só vez, o Builder constrói
                                                               o produto passo a passo sob o controle da application.

Implementação
-------------

* Interface de montagem e construção. Os Builders constroem os seus produtos de
  uma forma gradual.