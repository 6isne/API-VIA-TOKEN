<?php

#pegando o token via get
$key=$_GET['token'];
#ler arquivo txt
$conteudo=file_get_contents("token.txt");

#pegar token por token

$token=explode("\r\n",$conteudo);


#decidindo se o token esta valido
$cont=0;
print_r(count($token));
while ($cont < count($token))

{
    #caso for verdadeiro o valor
    if($token[$cont] == $key)
    {
        #SUA API
        #retorna json da API aqui caso o token stiver valido
        echo 'SEU TOKEN ESTA VALIDO';
        break;
    }
    #caso for falso o valor do token
    else{
        #retorna emnsagem de erro
        exit("SEU TOKEN ESTA INVALIDO");
    }
    break;
    $cont +=1;
}
