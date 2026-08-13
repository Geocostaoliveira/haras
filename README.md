# HARAS PRIME

## O haras prime eh um projeto de desenvolvimento web proposto pelo professor Regilan Meira. <br> A ideia principal eh de simular um haras virtual, onde se compra cavalos de diversas racas e possui a opcao de financiamento dos equinos. <br> O projeto conta com paginas de erros (para desenvolvimento da logica atraves do uso dos recursos do PHP).

### Requisitos mínimos e instalações anteriores.
1. Xampp instalado
2. Mysql (opcional)
3. PHP instalado
4. Composer (dependencias do PHP) 
instalado

<br>

### Instalação
O processo de instalação dentro do linux e do windows não tem uma diferença tão grande, se não algumas pastas para a instalação.
<br>
<br>

## Windows
Dentro do terminal (com o xampp e o composer baixado)

### `Powershell e Git Bash` 
> cd C:\xampp\htdocs <br>
>git clone https://github.com/Geocostaoliveira/haras <br>
> cd .\haras <br>
>mv .env.example .env <br>
> composer install

<br>

### `CMD`
>cd C:\xampp\htdocs <br>
>git clone https://github.com/Geocostaoliveira/haras <br>
> cd .\haras <br>
>ren .env.example .env <br>
>composer install


Após o processo, apague os comentários do seu `.env`
<br>

### Linux
Dentro do terminal, com o composer e o xampp baixado. O tutorial se estende para o arch linux, mas pode ser traduzido para outras distribuições. <br>

### `BASH`
>cd /opt/lampp/htdocs <br>
>git clone https://github.com/Geocostaoliveira/haras <br>
> cd ./haras <br>
>mv .env.example .env <br>
>composer install

<br><br>
## Instalação do Banco de Dados
Com o mariaDB, ou o mysql dentro do seu terminal:

### `CMD`
>mysql -u root -p <br>
>SOURCE "C:\xampp\htdocs\haras\database\haras.sql"


####

Caso o usuário utilize o mariadb, troque o `mysql -u root -p` por `mariadb -u root -p`. 

### `BASH LINUX`
>mysql -u root -p <br>
>SOURCE "/opt/lampp/htdocs/haras/databse/haras.sql"

<br><br>

## Possíveis erros

## Composer não consegue fazer a instalação das dependências, por conta do pacote .zip

Nesse caso, é simples. <br> 
Seu php ou composer provavelmente não está com a instalação correta. <br><br>
Para corrigir, é só entrar na pasta da instalação do seu php e editar o arquivo php.ini <br> Dentro do arquivo, procure pela linha: `;extension=zip` e, em seguida, apague o "`;`", descomentando a linha `extension=zip`. <br> Com a linha descomentada, o seu composer consegue continuar normalmente a instalação.
<br><br>

#

## Banco de dados não exporta
Nesse caso, há de haver o estudo do caso. Mas provavelmente é somente uma questão de acesso de administrador.
<br><br>

#

## Erro na conexão: SQLSTATE[HY000] [2002] No such file or directory
Mude o nome do seu localhost na .env para o seu ip. Muito provavelmente mudar para 127.0.0.1 vai resolver.