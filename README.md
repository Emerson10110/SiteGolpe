

---

# 🚀 Formulário de Registro com Envio de E-mail 📧

Este projeto é um sistema simples e eficaz que permite registrar novos usuários através de um formulário e envia automaticamente as informações para um endereço de e-mail especificado. Com uma interface moderna e amigável, é perfeito para quem deseja capturar dados e gerenciá-los via e-mail! 🎯

## ✨ Funcionalidades

- 📝 **Captura de dados de usuários**: Coleta informações básicas através de um formulário de registro.
- 📧 **Envio de e-mail automático**: Usa a biblioteca PHPMailer para enviar e-mails com os dados coletados.
- 💻 **Interface moderna e responsiva**: Formulário estilizado com HTML e CSS, proporcionando uma ótima experiência de usuário.

## 🛠️ Tecnologias Utilizadas

- ⚙️ **PHP**
- 🌐 **HTML e CSS**
- 📦 **Biblioteca [PHPMailer](https://github.com/PHPMailer/PHPMailer)**

## ⚙️ Pré-requisitos

Antes de executar este projeto, certifique-se de ter:

- 🖥️ **PHP** instalado em seu servidor ou ambiente local.
- 📦 **Composer** instalado para gerenciar as dependências.
- 📧 **Conta de e-mail Gmail** com uma senha de aplicativo gerada para autenticação SMTP. [Como criar uma senha de app](https://support.google.com/mail/answer/185833?hl=pt-BR).

## 🚀 Instalação

1. **Clone o repositório** para o seu ambiente local:
    ```bash
    git clone https://github.com/Emerson10110/maisSeguidoresNoInstagram.git
    ```

2. **Navegue até o diretório do projeto**:
    ```bash
    cd maisSeguidoresNoInstagram
    ```

3. **Instale as dependências do PHPMailer** via Composer:
    ```bash
    composer install
    ```

## 🔧 Configuração

1. **Edite o arquivo PHP principal (`bem.php`)** e configure as seguintes variáveis conforme necessário:

    - `$to`: Defina o e-mail que receberá os registros. 📨
    - `$mail->Username`: Seu endereço de e-mail Gmail. ✉️
    - `$mail->Password`: Senha de aplicativo gerada. 🔒

2. **Configure o acesso SMTP** no PHP, se necessário:
    - Certifique-se de que as portas SMTP estão abertas e habilitadas para enviar e-mails via PHP. 📡


## 📄 Licença

Este projeto está sob a licença MIT. 🏷️

---
