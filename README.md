<h1>Docker para Utilizar com o Laravel</h1>

<h1>Lista de coisas que devem ser feitas após clonar este repositório:</h1>

<ol>
  <li>Execute o comando Make build para baixar os containers do docker e logo após subir a aplicação;</li>
  <li>Depois de subir e se quiser conferir é só ir na URL e digitar localhost:7000 que seu projeto estará já rodando localmente;</li>
  <li>Para executar comandos referentes ao laravel, execute Make php para entrar no container e lá dentro você conseguirá executar os comandos normalmente para criar controllers, migrations e etc.</li>
</ol>

<h1>Observações</h1>
<br/>
<p>OBS 1: Para executar o comando Make você precisa ter ele instalado em sua máquina, caso no linux, vai aparecer a sugestão para instalar como sudo make install (eu acho que é assim), caso você vá utilizar no windows, aconselho a rodar dentro do terminal WSL por que querendo ou não será o mesmo comando já que você vai tá instalando dentro de uma distro linux e aconselho a utilizar sempre esse terminal enquanto tiver mexendo no projeto do laravel.</p>
<br/>
<p>OBS 2: Lembrar de copiar o .env.example e renomear pra .env e com isso trocar os dados do banco de dados para o que estiver dentro do docker-compose.yml. Você pode alterar o nome do banco para qual tu quiser, juntamente com as variáveis de ambiente do banco, sendo ele MySQL, porém você pode alterar as configurações para outros bancos porém lembrando que você tem que alterar também o Dockerfile para instalar as depedencias do banco que você irá utilizar.</p>
<br/>
<p>OBS 3: Caso queira criar um projeto laravel do zero é só rodar o comando make create_projet que ele irá criar um projeto com a versão mais recente do laravel, lembrando que se der algum BO pode ser que você tenha que alterar a versão do PHP que está sendo instalada no Dockerfile na primeira linha onde tem o FROM</p>
<br/>
<h1>Dica</h1>
<p>Caso queira saber mais, abre o arquivo Makefile e da uma olhadinha nos alias que está criado e você pode adicionar e remover os comandos para o jeito que você quiser, porém deixei os mais utilizados normalmente quando se trabalha com um docker simples!</p>

<h1>Sobre a API</h1>
<br/>
<p>Depois de subir o docker (caso você use ele), vai está em pé na porta 7000, então para acessar os endpoints você precisa utilizar: http://localhost:7000/api/ e o nome das rotas que se encontram no arquivo API.</p>
