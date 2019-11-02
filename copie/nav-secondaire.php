<style>
.nav-second-ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  height: 100%;
}

.nav-second-ul a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

.nav-second-ul a.active {
  background-color: #4CAF50;
  color: white;
}

.nav-second-ul a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>

<ul class="nav-second-ul">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>