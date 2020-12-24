<style>
*{
	margin: 0;
	padding: 0;
}
			
body{
	font: 20px Nanum Gothic;
}
		
a {
	text-decoration: none;
	color: black;
}
			
li{
	list-style: none;
}
#menu01{ 
          width: 100%;
		  height: 100px;
		  background: lightgrey;
}
#menu01  ul li{
				float: right;
				width: 7%;
				height: 100px;
				text-align: center;
				line-height: 100px
}

html {
	scroll-behavior: smooth;
}

body {
	overflow-x: hidden;
}

.codepen {
	display: flex;
	font-size: 60px;
	align-items: flex-start;
	color: #000;
	justify-content: center;
}

.bg {
	position: absolute;
	left: -25vw;
	top: -50vw;
	width: 150vw;
	height: 600vw;
	background-image: url(https://images.unsplash.com/photo-1538291323976-37dcaafccb12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80);
	background-size: cover;
	z-index: -1;
	-webkit-filter: blur(120px);
	filter: blur(120px);
}

.codepen span {
	position: sticky;
	top: calc(50% - 50px);
	height: 100px;
	display: inline-flex;
	align-items: center;
	
	font-family: "Fredoka One", sans-serif;
	margin-left: 2px;
	margin-right: 2px;
	font-size: 90px;
}

.c1 {
	margin-top: 0vw;
}
.c2 {
	margin-top: 100vw;
}
.c3 {
	margin-top: 200vw;
}
.c4 {
	margin-top: 300vw;
}
.c5 {
	margin-top: 400vw;
}
.c6 {
	margin-top: 500vw;
}


.scroll {
	position: fixed;
	background-color: rgba(0, 0, 0, 0.7);
	bottom: 0;
	pointer-events: none;
}

@media (max-width: 660px) {
	
	.codepen span {
		font-size: 15vw;
	}
}
</style>