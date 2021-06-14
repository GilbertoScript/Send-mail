<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/GilbertoASJ/Send-mail/">
    <img 
      src="./assets/logo.png" 
      alt="Logo Send mail"
      width="100"
      height="100" 
    >
  </a>

  <h2 align="center">Send mail</h2>

  <p align="center">
    Seu app de envio de e-mails particular
    <br />
    <a href="https://github.com/GilbertoASJ/Send-mail/"><strong>Explore os arquivos »</strong></a>
    <br />
    <br />
    <a href="https://github.com/GilbertoASJ/Send-mail/">Ver Demo</a>
    ·
    <a href="https://github.com/GilbertoASJ/Send-mail/issues">Reportar Bug</a>
    ·
    <a href="https://github.com/GilbertoASJ/Send-mail/issues">Implementar Feature</a>
  </p>
</p>

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Lista de conteúdo</summary>
  <ol>
    <li>
      <a href="#Sobre-o-projeto">Sobre o projeto</a>
      <ul>
        <li><a href="#Construido-com">Construido com</a></li>
      </ul>
    </li>
    <li>
      <a href="#Como-usar">Como usar</a>
      <ul>
        <li><a href="#Pré-requisitos">Pré-requisitos</a></li>
        <li><a href="#Instalação">Instalação</a></li>
      </ul>
    </li>
    <li><a href="#Contribuindo">Contribuindo</a></li>
    <li><a href="#Licença">Licença</a></li>
    <li><a href="#Reconhecimentos">Reconhecimentos</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## Sobre o projeto

<hr>
<img src="https://user-images.githubusercontent.com/56325350/121954056-b1ce1a80-cd34-11eb-83db-492bcc8d4434.png" alt="Send mail - Home">

<hr>

Send mail é uma aplicação web de envio de emails, que consiste basicamente em você fazer o envio de e-mails de forma rápida e simples, há responsividade no site.

Alguns dos assuntos aprendidos e abordados durante a construção do projeto foram: Packagist, PHPMailer, Namespaces, etc.

### Construido com

As tecnologias usadas nesse projeto foram:
* [HTML5](https://developer.mozilla.org/pt-BR/docs/Web/Guide/HTML/HTML5)
* [CSS3](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
* [Bootstrap](https://getbootstrap.com/)
* [PHP](https://www.php.net/)

<!-- GETTING STARTED -->
## Como usar

### Passo 1 - Configure um email e senha válidos

Para começar a usar o Send mail temos alguns pré-requisitos:

Que você esteja planejando utilizar um Gmail, pois a aplicação ainda não possui suporte a outros tipos de serviços SMTP.

Que você aceite o acesso a aplicação menos restritas no seu Gmail, por aqui não se preocupe, a aplicação é segura e você pode ativar essa funcionalidade apenas quando for mandar seus e-mails pelo Send mail.

Insira e-mail e senha válidos, para que não ocorra nenhum erro ao fazer o envio dos emails.

E para manter a aplicação mais segura e que não ocorra nenhum tipo de vazamento de dados, sempre quando for utilizar o Send mail, preencha corretamente os dois formulários, já que não armazenamos e nem recuperamos os dados do usuário em nenhum banco de dados, cache, cookies... É necessário que sempre preencha os campos de login e senha quando for utilizar o app.

### Passo 2 - Envie seus emails

Agora que já realizou a configuração, vamos enviar os emails:

Não tem muito segredo, no primeiro formulário preencha login e senha com o e-mail que você configurou no passo 1.

Acesse o segundo formulário, e no campo 'Para' preencha com o e-mail do destinatário(quem irá receber o seu e-mail)

No campo 'Assunto' preencha com o assunto(cabeça do e-mail).

E no campo 'Mensagem' preencha com a mensagem(corpo do e-mail) que você quer enviar.

Clique em 'Enviar mensagem' e confira se você foi levado para a página de sucesso, recomendo enviar um e-mail para você mesmo como um teste :D !

<hr>

Este é um exemplo de como você pode dar instruções sobre como configurar seu projeto localmente. Para obter uma cópia local instalada e funcionando, siga estas etapas simples de exemplo.

### Pré-requisitos

``` XAMPP, Git(opcional) ```

### Instalação

```
# Clone este repositório dentro de xampp -> htdocs
$ git clone https://github.com/GilbertoASJ/Send-mail.git

# Ligue o servidor Apache e o banco de dados MySQL no xampp

# Abra o navegador em localhost

# Navegue até Send-mail e veja o projeto rodar
```


<!-- CONTRIBUTING -->
## Contribuindo

As contribuições são o que tornam a comunidade de código aberto um lugar incrível para aprender, inspirar e criar. Quaisquer contribuições que você fizer são ** muito apreciadas **.

1. Faça um fork do projeto
2. Crie seu Feature Branch (`git checkout -b feature / AmazingFeature`)
3. Faça commit de suas alterações (`git commit -m 'Add some AmazingFeature'`)
4. Envie para o Branch (`git push origin feature / AmazingFeature`)
5. Abra um pull request


<!-- LICENSE -->
## Licença

Distribuído sob a licença MIT. Veja `LICENSE` para obter mais informações.
