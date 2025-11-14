## 🎬 ControleSeries: Gerenciador Pessoal de Séries

> 📋 Sistema web desenvolvido em **Laravel** para auxiliar no gerenciamento de séries, temporadas e episódios assistidos.

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

---

## 💡 Sobre o Projeto

O **ControleSeries** é uma aplicação robusta e simples, criada para te ajudar a manter o controle das suas séries favoritas. Nunca mais perca a conta de qual episódio você parou!

Construído utilizando o poder do framework **Laravel**, o projeto demonstra a aplicação de conceitos essenciais como a arquitetura **MVC** (Model-View-Controller), gerenciamento de rotas, controladores e persistência de dados.

---

## ✨ Funcionalidades Principais

* 📺 **Cadastro de Séries:** Adicione suas séries favoritas.
* 📅 **Controle Detalhado:** Gerencie temporadas e episódios de cada série.
* ✅ **Marcação de Progresso:** Marque episódios como assistidos para acompanhar seu avanço.
* ✏️ **Gerenciamento:** Edite e exclua séries facilmente.
* 🔍 **Listagem Otimizada:** Visualize suas séries com paginação para melhor navegação.

---

## 🛠️ Tecnologias Utilizadas

Este projeto foi construído com as seguintes ferramentas e tecnologias:

* **Backend:**
    * [PHP 8+](https://www.php.net/)
    * [Laravel 10+](https://laravel.com)
    * [Composer](https://getcomposer.org/) (Gerenciador de dependências)
* **Banco de Dados:**
    * [SQLite](https://www.sqlite.org/index.html) (Padrão) ou [MySQL](https://www.mysql.com/)
* **Frontend:**
    * [Bootstrap 5](https://getbootstrap.com/) ou [TailwindCSS](https://tailwindcss.com/)
* **Versionamento:**
    * [Git](https://git-scm.com/)

---



## 🚀 Como Executar o Projeto

### 1️⃣ Clonar o repositório
git clone https://github.com/jupicinink/ControleSeries.git cd ControleSeries


### 2️⃣ Instalar dependências
composer install npm install


### 3️⃣ Configurar o ambiente

Copie o arquivo .env.example e configure suas variáveis:

cp .env.example .env php artisan key:generate


### 4️⃣ Rodar as migrações e o servidor
php artisan migrate php artisan serve


Depois acesse: **`http://localhost:8000`**

---

## 🧠 Funcionalidades Principais

* 📺 **Cadastro de séries**
* 📅 **Controle de temporadas e episódios**
* ✅ **Marcação de episódios assistidos**
* 🗑️ **Exclusão e edição de séries**
* 🔍 **Listagem de séries com paginação**

---

## 💡 Estrutura de Pastas (Arquitetura MVC)

app/ ├── Http/ │ ├── Controllers/ │ └── Requests/ ├── Models/ bootstrap/ config/ database/ public/ resources/ ├── views/ routes/ ├── web.php


---

## 🧑‍💻 Contribuição

Contribuições são bem-vindas!
Sinta-se à vontade para abrir uma issue ou enviar um pull request.

## 📄 Licença

Este projeto está sob a licença **MIT**.
Criado com ❤️ por jupicinink.
