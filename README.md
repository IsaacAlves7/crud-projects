<a href="https://github.com/IsaacAlves7/crud-projects"><img src="https://user-images.githubusercontent.com/61624336/159622843-8f7ffa91-e9a5-49f4-8980-69d03dd2c3a7.png"></a>

# 📝 C.R.U.D Projects for different languages
<blockquote>It's a repository of simple application projects of <b>CRUD</b> (Create | Read | Update | Delete) with different architectures and projects.</blockquote> 

## Definição de CRUD
<img src="https://static.platzi.com/media/landing-projects/Proyecto-Python-CRUD.png" height="277" align="right">

O **CRUD**, acrônimo para **C**reate, **R**ead, **U**pdate e **D**elete, nada mais é do que uma aplicação de grande ou pequeno porte que consiste em criar, ler, atualizar e deletar alguma informação, seja armazenada num banco de dados ou na própria aplicação através dos **métodos do protocolo HTTP** com seus **status de requisição** e **resposta**. 

Portanto, essa é uma aplicação Back-End que pode conter ou não interface gráfica, além de você utilizar ela de forma particular ou integrando em conjunto com outro projeto, tudo isso vai depender da necessidade.

> **Obs**: Então, um Crud é, teoricamente, como se fosse um papel onde podemos: escrever, ler, apagar o que foi escrito ou atualizar aquela anotação.

## Preparação da aplicação
<img src="https://user-images.githubusercontent.com/61624336/184163155-980cbb4b-be36-43d1-b6c9-f6ccc20a2c7c.jpg" align="right" height="177">

Então, escolha uma linguagem de programação back-end da sua preferência (PHP, Ruby, Python, Node.js, Java, Go, C++, C# e etc.), mais especificamente com suporte ao paradigma **OOP** - **P**aradigma de **O**rientação a **O**bjetos, e utilize conforme o seu desejo na sua aplicação. Mais precisamente utilizamos o seguinte padrão no desenvolvimento:

- POO (Paradigma de Programação Orientada a Objetos);
- Arquitetura MVC (Model View Controller);
- Métodos HTTP;
- ORM ou ODM;
- REST API;

Coloquei lado a lado com a determinada funcionalidade que essas tecnologias desempenham atuando juntas na criação de um CRUD:

<table>
  <tr>
    <td><b>CRUD</b></td>
    <td><b>SQL</b></td>
    <td><b>HTTP</b></td>
  </tr>
  <tr>
    <td><b>C</b>reate</td>
    <td>INSERT</td>
    <td>POST</td>
  </tr>
  <tr>
    <td><b>R</b>ead</td>
    <td>SELECT</td>
    <td>GET</td>
  </tr>
  <tr>
    <td><b>U</b>pdate</td>
    <td>UPDATE</td>
    <td>PUT/PATCH</td>
  </tr>
  <tr>
    <td><b>D</b>elete</td>
    <td>DELETE/DROP</td>
    <td>DELETE</td>
  </tr>
</table>

> **Obs**: O mesmo serve para um banco de dados NoSQL que será feito com um tempo de resposta bem mais rápida.

Em relação ao **banco de dados**, você pode escolher algum **modelo de banco** com o tipo de consulta: **SQL** (relacional) ou **No-SQL**, por isso foram feitos algumas **técnicas de programação de mapeamento** para converter dados entre incompatíveis tipos de sistemas em banco de dados e linguagens de programação orientadas a objeto. Isso cria, um efeito de um "objeto virtual de banco dados" que pode ser usado de dentro da linguagem de programação, e assim, melhorar o desenvolvimento de consultas no banco de dados:

- **ORM** (Mapeamento objeto-relacional) serve para banco de dados relacionais, com esse tipo de mapeamento podemos
- **ODM** (Mapeamento objeto-documento) serve para banco de dados NoSQL, com esse tipo de mapeamento podemos

> 🔄 Essa parte será aprofundada melhor na **arquitetura MVC** com o tópico **Model**.

### Web Stacks
Você também pode usar uma **Web stack** para padronizar o seu desenvolvimento. Abaixo se encontra algumas web stacks mais utilizadas para fazer esse projeto:

- LAMP (Linux, Apache, MySQL/MariaDB, PHP/Python/Perl)
- LEMP (Linux, NGINX, MySQL/MariaDB, PHP/Python/Perl)
- MERN (MongoDB, Express, React.js/React Native, Node.js)
- MEAN (MongoDB, Express, Angular, Node.js)
- MENV (MongoDB, Express, Express, Node.js, Vue.js)
- PERN (PostgreSQL, Express, React.js/React Native, Node.js)
- FRAmP (Flask)
- ROR (RubyOnRails)

> 🔠 Cada stack possui uma linguagem de programação, porém você pode inserir bibliotecas e frameworks dessa linguagem, isso tudo pode ser muito bem customizável, dependendo do seu projeto e da etapa de desenvolvimento do software.

### Arquitetura usada
Todas essas _web stacks_ obedecem a arquitetura padrão para aplicações web chamada **MVC**, acrônimo para **M**odel **V**iew **C**ontroller, onde o **Model** fica no back-end para acessar, controlar e colocar algum dado no banco de dados, **View** é onde se localiza todo o seu front-end e o **Controller** é onde se localiza as **APIs**, o **Router** onde fica a ação de rotas da aplicação e o **Controller** que é onde ficar a ação da aplicação em devolver alguma requisição ou resposta para ser renderizada no lado do cliente, ou seja ele funciona como um "intermediário" entre o _View_ e o _Model_.

> 🚮 Essa é uma arquitetura totalmente voltada para aplicações web, porém existem outras como que valem a pena serem estudadas.

### API
Além disso a integração com o lado do cliente e o lado do servidor é feito com uma API chamada **REST API**, necessária para atender as requisições e respostas enviadas pelos métodos do protocolo HTTP entre os dois lados. Para isso você deve configurar suas atividades do protocolo HTTP em ambos os lados da sua aplicação, para tanto o navegador quanto o servidor interpretar essa troca de mensagens entre si.

<!-- 
# 📜 JavaScript (Node.js) Language Programming
<img src="https://www.webdesignemfoco.com/img/files/original/368570-crud-nodejs-l.jpg">

# 🐍 Python Language Programming
<img src="https://www.webdesignemfoco.com/img/files/original/194176-banner-curso-de-python-l.jpg">
 -->
 
## Autor
| [<img src="https://avatars.githubusercontent.com/u/61624336?v=4" width="110"><br><sub>@IsaacAlves7</sub>](https://github.com/IsaacAlves7) |
| :---: |
