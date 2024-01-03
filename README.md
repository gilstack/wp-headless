## 📜 Descrição

Esse projeto consiste em um CMS para uma aplicação web da agência Trendor,
nele foi utilizado wordpress como headless e SSR do NextJS com padrões de
arquitetura de software. Para garantir a qualidade foi configurado o ambiente
CI/CD com Github Actions via FTP Deploy.

## 🚀 Tecnologias

Esse projeto está utilizando as seguintes tecnologias:

- [Wordpress](https://br.wordpress.org/)
- [NextJS](https://nextjs.org/)
- [MySQL](https://www.mysql.com/)
- [Docker](https://www.docker.com/)

## ⚙️ Como funciona?

## RFs (Requisitos funcionais)

- [x] É possível gerenciar as postagens do blog
- [x] É possível gerenciar todos os serviços
- [x] É possível criar novas categorias no portfólio
- [x] É possível filtrar portfólio por categorias
- [x] É possível visualizar detalhes de um projeto
- [x] É possível editar detalhes de um projeto
- [x] É possível deletar um projeto
- [x] É possível realizar contato via form (SMTP)
- [x] É possível realizar login

## 🎲 Iniciando o o projeto?

### Clone esse repositório

```bash
git clone https://github.com/gilstack/trendor-wp.git
```

### Navegue até o diretório do projeto

```bash
cd trendor-wp
```

### Configure a DB no arquivo wp-config

```bash
define( 'DB_NAME', 'database' );
```

```bash
define( 'DB_USER', 'root' );
```

```bash
define( 'DB_PASSWORD', '' );
```

```bash
define( 'DB_HOST', 'localhost' );
```

### Inicie a aplicação

---

<p>Desenvolvido com 💙 por <a href='https://github.com/gilstack' target='_blank'>Gilmar Junior</a></p>
