## System Login Logout PHPuro


### Sobre

> Este projeto é um sistema básico de autenticação (login e logout) desenvolvido utilizando **PHP puro**, sem o uso de frameworks. Ele demonstra funcionalidades essenciais como o registro de usuários, validação de login, gerenciamento de sessões para proteger páginas restritas e a funcionalidade de logout.


### Tecnologia Usadas

* **PHP:** Linguagem principal para o backend e gerenciamento de sessões.
* **HTML:** Estruturação das páginas (formulários de login, registro, área restrita).
* **CSS:** Estilização básica da interface (pode ser incluída ou não, dependendo da versão exata no repo).
* **Password Hashing:** Funções nativas do PHP (`password_hash`, `password_verify`) para segurança das senhas.


### Execução do projeto

**Requer um ambiente de desenvolvimento web local configurado (como XAMPP, WAMP, MAMP ou Docker com Apache/Nginx e PHP ) e o GIT instalado!**

 # 1. Clone o repositório para a pasta raiz do seu servidor web  é faça o git clone e entre na pasta!
~~~bash
 #    - git clone https://github.com/wwilliamsantana/system-login-logout-phpuro.git
 #    - cd system-login-logout-phpuro
~~~

 # 2. Inicie seu servidor web (Apache/Nginx )
~~~bash

 #   - Abra seu navegador e acesse: http://localhost/system-login-logout-phpuro/ (ou o caminho correspondente no seu servidor local)
~~~

**Funcionalidades:**

* Acesse `signup.php` para registrar um novo usuário.
* Acesse `index.php` (ou a página de login) para entrar no sistema.
* Após o login, você será redirecionado para a `home.php` (área restrita).
* Use o link/botão de logout na `home.php` para encerrar a sessão.
