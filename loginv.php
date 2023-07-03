<?php 



?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.google.com/specimen/Archivo+Black" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    
    <title>Login</title>
  </head>
  <body>

    <style>
* {
  margin: 0;
  padding: 0;
	font-family: 'Archivo Black',  sans-serif;
}

body {

  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background: linear-gradient(135deg, #124559, transparent), url(./bela-vista-de-uma-pequena-cidade-nas-montanhas-durante-o-por-do-sol-no-brasil.png);
	height: 100vh;
	background-size: cover;
	background-position: center center;
	place-items: center;
	text-align: center;
  font-size: 1.6em;

}
  


.container {
  display: flex;
  justify-content: center;
  width: 100%;
  margin-top: -200px;
}

.card {
  background-color: #eff6e0c2;
  padding: 30px;
  border-radius: 4%;
  box-shadow: 3px 3px 1px 0px #00000060;
  margin-top: 250px;
}

h1{
  text-align: center;
  margin-bottom: 20px;
  color: #01161e
}

.label-float input{
  width: 100%;
  padding: 5px 5px;
  display: inline-block;
  border: 0;
  border-bottom: 2px solid #01161e;
  background-color: transparent;
  outline: none;
  min-width: 180px;
  font-size: 16px;
  transition: all .3s ease-out;
  border-radius: 0;
  
}

.label-float{
  position: relative;
  padding-top: 13px;
  margin-top: 5%;
  margin-bottom: 5%;
}

.label-float input:focus{
  border-bottom: 2px solid #01161e;
}

.label-float label{
  color: #01161e;
  position: absolute;
  top: 0;
  left: 0;
  margin-top: 13px;
  transition: all .3s ease-out;
}

.label-float input:focus + label,
.label-float input:valid + label{
  font-size: 13px;
  margin-top: 0;
  color: #01161e
}

button{
  background-color: transparent;
  border-color: #01161e;
  color: #01161e;
  padding: 7px;
  font-weight: bold;
  font-size: 12pt;
  margin-top: 20px;
  border-radius: 4px;
  cursor: pointer;
  outline: none;
  transition: all .4s ease-out;
}

button:hover{
  background-color: #01161e;
  color: #fff;
}

.justify-center{
  display: flex;
  justify-content: center;
}

hr{
  margin-top: 10%;
  margin-bottom: 10%;
  width: 60%;
}

p{
  color: #01161e;
  font-size: 14pt;
  text-align: center;
}

a{
  color: #01161e;
  font-weight: bold;
  text-decoration: none;
  transition: all .3s ease-out;
}

a:hover{
  color: #01161e;
}

.fa-eye{
  position: absolute;
  top: 15px;
  right: 10px;
  cursor: pointer;
  color: #01161e;
}

 #msgError{
  text-align: center;
  color: #ff0000;
  background-color: #ffbbbb;
  padding: 10px;
  border-radius: 4px;
  display: none;
}
.wrapper {
  
	max-width: 1100px;
	margin: 0 auto;
	position: relative;
}
header {
	background: transparent;
	text-align: center;
	width: 100%;
  display: flex;
}
.nav {
	width: 100%;
}
.nav-toggle {
	cursor: pointer;
	border: 0;
	width: 3rem;
	padding: 0em;
	background: transparent;
	color: #eff6e0;
	transition: opacity 250ms ease;
	position: absolute;
	right: 0;
}
.nav-toggle:focus, .nav-toggle:hover {
	opacity: 0.75;
}
.icon-area {
	width: 50%;
	position: relative;
}
.icon-area, .icon-area::before, .icon-area::after {
	display: block;
	margin: 0 auto;
	height: 3px;
	background: #eff6e0;
}
.icon-area::before, .icon-area::after {
	content: "";
	width: 100%;
}
.icon-area::before {
	transform: translateY(-6px);
}
.icon-area::after {
	transform: translateY(3px);
}
.nav {
	visibility: hidden;
	height: 0;
	position: absolute;
}
.nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
.nav ul li a {
	color: #eff6e0;
	text-decoration: none;
}
.openMenu {
	visibility: visible;
	height: auto;
	position: relative;
}
.logo {
	text-decoration: none;
	color: #eff6e0;
	font-family: bebas neue;
	text-transform: uppercase;
	font-size: 40px;
}

@media (min-width: 800px) {
	.nav-toggle {
		display: none;
	}
	.nav {
		visibility: visible;
		display: flex;
		align-items: center;
		justify-content: flex-end;
		height: auto;
		position: relative;
	}
	.nav ul {
		margin: 0;
		display: flex;
		justify-content: space-between;
	}
	.nav ul li {
		margin: 0 0 0 1.5rem;
	}
	.row {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
}

    </style>

<header>
  <div class="wrapper row">
    <button class="nav-toggle">
      <span class="icon-area"></span>
    </button>
    <a class="logo" href="./index2.html"><img style="width: 150px;" src="./Tu_n_me_respeita__1_-removebg-preview.png" alt="logo"></a>
    <nav class="nav">
      <ul>
        <li><a href="index2.html">Home</a></li>
        <li><a href="sobre.html">Sobre</a></li>
        <li><a href="Serviços.html">Serviços</a></li>
        <li><a href="trabalhosemfronteiras@gmail.com">Contato</a></li>
      </ul>            
    </nav>
  </div>
</header>

    <div class="container">
      <div class="card">
        <h1>Entrar</h1>

        <div id="msgError"></div>
        <form action="consulta_login.php" method="post">        

        <div class="label-float">
          <input type="email" id="usuario" paceholder="" required name="email"/>
          <label id="userLabel" for="usuario">Email</label>
        </div>

        <div class="label-float">
          <input type="password" id="senha" paceholder="" required name="senha"/>
          <label id="senhaLabel" for="senha">Senha</label>
          <i class="fa fa-eye" aria-hidden="true"></i>
        </div>

        <div class="justify-center">
          <a href="index2.html">
          <input type="submit" value="entrar">
         </a>
        </div>
        </form>        

        

        <p>
          Não tem uma conta?
          <a href="./cadastro.html">
            Cadastre-se
          </a>
        </p>
      </div>
    </div>

    <script>
      const cusMenu = document.querySelector(".nav-toggle");
          const nav = document.querySelector(".nav");

          cusMenu.addEventListener("click", () => {
          nav.classList.toggle("openMenu");
      });
    </script>
  </body>
</html>