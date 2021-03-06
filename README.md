# Trabalhando com Datas em PHP
Exemplo simples de manipulação de datas (date) com PHP
## Date
O PHP possui uma função **date** para manipulação de datas. Além dela a classe **DateTime** (presente no PHP deste a versão 5.2 [Documentação no php.net](http://php.net/manual/pt_BR/class.datetime.php "Documentação Oficial")) pode nos ajudar em representação de datas e hora, com ela podemos passar a data em um formato, o brasileiro por exemplo, e obter um outro formato, para inserção em um banco de dados ou outras tarefas.

O formato brasileiro é o d/m/Y, porém o formato americano, aquele que devemos gravar no banco é diferente: Y-m-d. Antigamente muitos utilizavam técnicas como o explode para separar a string em array e depois juntá-las novamente. Com o DateTime isso se torna desnecessário.

## Exemplo

Um exemplo de utilização, informar uma data no nosso formato e retornar a data no formato para gravação no banco:
<!-- language: php -->
```
//data desejada no formato brasileiro
$data = "25/02/2017";

//o d/m/Y indica o formato da data que estamos fornecendo a classe, para que a data seja entendida e possa ser manipulada
$data = DateTime::createFromFormat( "d/m/Y", $data );

//$novadata recebe o formato desejado
$novadata = $data->format( "Y-m-d" );

//irá mostrar 2017-02-25
echo $novadata;
```
## Validando a Data com checkdate

Agora que temos a data é possível utilizar uma função **checkdate** do PHP (existentes nas verses 4 a 7) para validação das datas. Esta função verifica qualquer data em formato gregoriano, como mostra o exemplo na documentação [checkdate](http://php.net/manual/pt_BR/function.checkdate.php "Documentação Oficial"):

<!-- language: php -->
```
checkdate ( int $month , int $day , int $year )
```

A função retorna um booleano, sendo que o mês, dia e ano devem ser fornecidos. Como utilizamos o **DateTime** é possível separar esses dados de uma maneira eficiente:

<!-- language: php -->
```
$dia = $data->format( "d" );
$mes = $data->format( "m" );
$ano = $data->format( "Y" );

if ( checkdate( $mes, $dia, $ano ) ) echo "Data Válida!";
else echo "Data Inválida";
```
Assim podemos verificar se uma data específica é verdadeira ou não.

Espero ter ajudado!
